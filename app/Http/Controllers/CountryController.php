<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Answer;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\GuessController;

class CountryController extends Controller
{
    /**
     * Returns the country svg info in a view
     */
    public function view(Request $request)
    {
        $country = Answer::today()->first();
        if($country == null)
        {
            Log::error('No country is set for today\'s date!');
            abort(500, 'No country has been set for today!');
        }
        $countries = Country::all('name');
        $guesses = GuessController::getUserAttempts($request->cookie('uuid'));
        return view('index', ['paths' => $country->country->paths, 'countries' => $countries, 'guesses' => $guesses]);
    }

    /**
     * Validates the given input is a valid country.
     * @param String $name
     * @return Country country or `null`
     */
    public static function validateCountry($name)
    {
        return Country::where('name', $name)->first();
    }
}
