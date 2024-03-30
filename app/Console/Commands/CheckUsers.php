<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CheckUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get count of users on the platform';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // php artisan check:users --verified => checking command
        echo User::count() . "\n";
    }
}
