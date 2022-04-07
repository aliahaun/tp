<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    /*   \App\User::create([
           'name'=>'admin',
           'email'=>'admin@gmail.com',
           'password'=> bcrypt('password'),
       ]);*/

       DB::table('users')->insert([
        'name' => Str::random(10),
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
    ]);

    }
}
