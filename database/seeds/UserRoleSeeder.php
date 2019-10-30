<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\UserRoles;
        $user->id = 1;
        $user->name = "Keuangan";
        $user->save();

        $user = new \App\UserRoles;
        $user->id = 2;
        $user->name = "Akademik";
        $user->save();
    }
}
