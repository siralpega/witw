<?php

namespace App\Console\Commands;

use App\Models\Attempt;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ClearAllAttempts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'attempts:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears all the attempts in the database';

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
        Attempt::truncate();
        $this->info('Cleared all attempts');
        return 0;
    }
}
