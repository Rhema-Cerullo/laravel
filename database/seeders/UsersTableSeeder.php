<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  factory(User::class, 10)->create();
      User::create([
          "name"=>'Fabulous',
          "surname"=>'Final',
          "username"=>'Flash',
          "password"=>Hash::make('TheFlash'),
          "email"=>'flash@gmail.com',
          "email_verified_at"=>'',
          "contact"=>'',
          "gender"=>'Male',
          "stamp"=>'',
          "profilepic"=>'',

      ]);
      User::create([
          "name"=>'Beri',
          "surname"=>'Becky',
          "username"=>'Excess',
          "password"=>Hash::make('TheFlash'),
          "email"=>'beri@gmail.com',
          "email_verified_at"=>'',
          "contact"=>'',
          "gender"=>'Female',
          "stamp"=>'',
          "profilepic"=>'',

      ]);
      User::create([
          "name"=>'Pretty',
          "surname"=>'Sandrine',
          "username"=>'Iris',
          "password"=>Hash::make('TheFlash'),
          "email"=>'don@gmail.com',
          "email_verified_at"=>'',
          "contact"=>'',
          "gender"=>'Female',
          "stamp"=>'',
          "profilepic"=>'',

      ]);
    }
}
