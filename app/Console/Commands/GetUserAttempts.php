<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Attempt;

class GetUserAttempts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'attempts:user {uuid=null}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get user attempts';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $uuid = $this->argument('uuid');
        $user = User::where('uuid', $uuid)->first();
        if($user == null)
            $this->info('There is no user with that uuid');
        else 
        {
            $attempts = $user->attempts;
            if($attempts == null || sizeof($attempts) == 0)
            {
                $this->info('User has no attempts');
                return 0;
            }
            $this->info('User has ' . sizeof($attempts) . ' attempts');
            foreach($attempts as $attempt)
            {
                $this->info($attempt->created_at->toDateString() . ' ' . $attempt->country->name);
            }
        }
        return 0;
    }
}
