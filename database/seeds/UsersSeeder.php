<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
        'name' =>'candra',
        'level' => '1',
        'email' => 'candra1923@gmail.com',
        'password' => '124hnj5k69038jnm456',
        'remember_token' => '124hnj5k69038jnm456',
    ]);
    }
}
