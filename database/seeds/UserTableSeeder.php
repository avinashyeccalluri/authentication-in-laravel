<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'=>'Avinash',
            'email'=>'yeccaluriavinash@gmail.com',
            'password'=>Hash::make('password'),
            'remember_token'=>str_random(10),
        ]);
    }
}
