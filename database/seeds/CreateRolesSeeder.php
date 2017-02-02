<?php

use App\Role;
use Illuminate\Database\Seeder;

class CreateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => "admin"],
            ['name' => "editor"],
        ];

        foreach($roles as $role) {
            Role::create($role);
        }
    }
}
