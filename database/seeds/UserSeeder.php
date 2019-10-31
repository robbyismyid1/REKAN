<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->id = 1;
        $user->name = "robby";
        $user->username = "robbyismyid1";
        $user->email = "robbyismyid1@gmail.com";
        $user->password = bcrypt("sdf749re11");
        $user->role_id = 1;
        $user->save();

        $user = new \App\User;
        $user->id = 2;
        $user->name = "reynaldi";
        $user->username = "reynaldi";
        $user->email = "rey@gmail.com";
        $user->password = bcrypt("123456");
        $user->role_id = 2;
        $user->save();
    }
}
