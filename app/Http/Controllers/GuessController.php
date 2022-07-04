<?php

namespace App\Http\Controllers;

use App\Models\Attempt;
use App\Models\Country;
use App\Models\User;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\CountryController;
use App\Http\Middleware\HasUUIDCookie;

enum Direction { case N; case NW; case NE; case S; case SW; case SE; case W; case E; }
class GuessController extends Controller
{
   
    /**
     * Return a list of all possible countries
     */
    public function index(Request $request)
    {
        $countries = Country::all('name');
        return response()->json($countries);
    }

    /**
     * Make a guess
     */
    public function make(Request $request)
    {
        $this->validate($request, [
            'guess' => 'string|required'
        ]);

        $guess = $request->input('guess');
        $user = User::where('uuid', $request->cookie('uuid'))->first();
        if($user == null)
        {
            $uuid = $request->has('uuid') ? $request->get('uuid') : HasUUIDCookie::createUser($request->ip());
            $user = User::where('uuid', $uuid)->first();
            cookie()->forever('uuid', $uuid);
        }

        $today = Answer::today()->first();

        /* If user has any guesses left, or already correctly guessed */
        $guesses = Attempt::where('user_id', $user->id)->whereDate('created_at', today())->get(['id', 'country_id']);
        if(sizeof($guesses) >= 5)
            abort(403, 'You have reached the maximum amount of guesses for today');
        else if($guesses->contains('country_id', $today->country_id))
            abort(403, 'You have already guessed today\'s country');

        $guessCountry = CountryController::validateCountry($guess);
        if($guessCountry == null)
            abort(422, 'Invalid country');

        if($today->country->id == $guessCountry->id)
        {
            $this->saveAttempt($user, $guessCountry);
            $guesses = $this->getUserAttempts($user->uuid);
            $html = view('components.guesses', ['guesses' => $guesses])->render();
            return response()->json(['correct' => true, 'guesses' => $html]);
        }
        
        //Get distance
        //https://stackoverflow.com/a/10054282
        $latFrom = deg2rad($guessCountry->location['lat']);
        $lonFrom = deg2rad($guessCountry->location['lon']);
        $latTo = deg2rad($today->country->location['lat']);
        $lonTo = deg2rad($today->country->location['lon']);
        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;
        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        $distance = round($angle * 6371);

        //Get direction
        $direction = $this->getDirection($guessCountry->location['lon'], $guessCountry->location['lat'], $today->country->location['lon'], $today->country->location['lat'])->name;

        $this->saveAttempt($user, $guessCountry, $distance, $direction);
        $guesses = $this->getUserAttempts($user->uuid);
        $html = view('components.guesses', ['guesses' => $guesses])->render();
        $json = ['correct' => false, 'guesses' => $html];
        if(sizeof($guesses) == 5)
            $json = array_merge($json, ['answer' => $today->country->name]);
        return response()->json($json);
    }

    /**
     * Save the guess in the database
     */
    private function saveAttempt($user, $guess, $distance = 0, $direction = null)
    {
        $attempt = new Attempt();
        $attempt->user_id = $user->id;
        $attempt->answer_id = Answer::today()->first()->id;
        $attempt->country_id = $guess->id;
        $attempt->distance = $distance;
        $attempt->direction = $direction;
        $attempt->save();
    }

    /**
     * Returns the user's attempts for the current Answer
     */
    public static function getUserAttempts($uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        if($user == null)
            return [];
        $guesses = Attempt::where('user_id', $user->id)->whereDate('created_at', today())->with('country:id,name')->get(['country_id', 'distance', 'direction']);
        return $guesses;
    }

    /**
     * Return the direction from the user's guess country to the answer country
     */
    public function getDirection($guessLong, $guessLat, $answerLong, $answerLat)
    {
        $vertical = abs(($answerLat + 90) - ($guessLat + 90));
        $horizontal = abs(($answerLong + 180) - ($guessLong + 180));
        //Flip is it's shorter to go the other way
        $flip = $horizontal > 180 ? true : false;
        
        $a = sqrt(pow($vertical, 2) + pow($horizontal, 2));
        $angle = rad2deg(asin($horizontal / $a));

        if($answerLat + 90 > $guessLat + 90)
        {
            if($angle > 76.5 || $angle < 13.5)
            {
                if($horizontal > $vertical)
                {
                    if($answerLong + 180 > $guessLong + 180) return !$flip ? Direction::E : Direction::W;
                    else return !$flip ? Direction::W : Direction::E;
                }
                else return Direction::N;
            }
            else
            {
                if($answerLong + 180 > $guessLong + 180) return !$flip ? Direction::NE : Direction::NW;
                else return !$flip ? Direction::NW : Direction::NE;
            }
        }
        else
        {
            if($angle < 13.5) return Direction::S;
            else if($angle > 76.5)
            {
                if($answerLong + 180 > $guessLong + 180) return !$flip ? Direction::E : Direction::W;
                else return !$flip ? Direction::W : Direction::E;
            }
            else
            {
                if($answerLong + 180 > $guessLong + 180) return !$flip ? Direction::SE : Direction::SW;
                else return !$flip ? Direction::SW : Direction::SE;
            }
        }
    }
}
