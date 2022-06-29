<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Answer;

class GetAnswerToday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'answer:today';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the answer for today';

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
        $country = Answer::whereDate('on', now())->first();
        if($country == null)
            $this->info('There is no country set for today! (' . date('Y-m-d') . ')');
        else
            $this->info('The country for today (' . date('Y-m-d') . ') is ' . $country->country->name);
        return 0;
    }
}
