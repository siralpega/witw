<?php

namespace App\Console\Commands;

use App\Models\Answer;
use App\Models\Country;
use Illuminate\Console\Command;

class GenerateAnswer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'answer:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a new, random answer for the next available date';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $countries = Country::all();
        if(sizeof($countries) == 0)
        {
            $this->error('There are no countries in the database');
            return -1;
        }
        $previousCountry = Answer::orderBy('on', 'DESC')->first();
        $country = $this->getRandom($countries, ($previousCountry != null ? $previousCountry->country : null));
        $date = ($previousCountry != null && $previousCountry->on != null && $previousCountry->on->isAfter(now())) ? $previousCountry->on->addDay() : now()->startOfDay();
        
        $answer = new Answer();
        $answer->country_id = $country->id;
        $answer->on = $date;
        $answer->save();
        $this->info('Created answer for ' . $date . ' with country ' . $country->name);
        \Illuminate\Support\Facades\Log::info('Created answer for ' . $date . ' with country ' . $country->name);
        return 0;
    }

    /**
     * Returns random country, will prevent duplicates in a row, if $previousCountry is not null
     */
    private function getRandom($countries, $previousCountry = null)
    {
        $country = $countries->random();
        if($previousCountry != null && $country->name == $previousCountry->name)
            $country = $this->getRandom($countries, $previousCountry);
        return $country;
    }
}
