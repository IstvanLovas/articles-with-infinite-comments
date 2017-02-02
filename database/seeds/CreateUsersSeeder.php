<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            	'name' => env('ADMIN_NAME'),
	        	'email' => env('ADMIN_EMAIL'),
	        	'password' => \Hash::make(env('ADMIN_PASSWORD'))
	        ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
