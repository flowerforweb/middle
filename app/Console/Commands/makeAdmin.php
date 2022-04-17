<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class makeAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:mkadmin {name} {name2} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'creating a new admin';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return User::create([
            'name' => $this->argument('name').' '.$this->argument('name2'),
            'email' => $this->argument('email'),
            'password' => Hash::make($this->argument('password')),
            'type' => 'admin',
        ]);
    }
}
