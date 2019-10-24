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
        $user->save();
    }
}
