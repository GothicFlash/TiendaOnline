<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();
      //Usuario general
      User::create([
        'name' => 'Esteban',
        'email' => 'emeo151863@upemor.edu.mx',
        'type' => 'user',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'name' => 'Eliacim',
        'email' => 'noeo150589@upemor.edu.mx',
        'type' => 'user',
        'password' => bcrypt('123456')
      ]);
      //Usuario admin
      User::create([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'type' => 'admin',
        'password' => bcrypt('123456')
      ]);
    }
}
