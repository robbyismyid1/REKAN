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
        $roles = new \App\UserRoles;
        $roles->id = 1;
        $roles->name = "Keuangan";
        $roles->description = "Keuangan";
        $roles->save();

        $roles = new \App\UserRoles;
        $roles->id = 2;
        $roles->name = "Akademik";
        $roles->description = "Akademik";
        $roles->save();
    }
}
