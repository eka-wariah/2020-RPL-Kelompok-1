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
         DB::table('users')->insert([
            'name' =>'admin',
            'role_id' => '1',
            'email' => 'admin@gmail.com',
            'password' =>Hash::make('admin'),
            'remember_token' =>Hash::make('admin'),
        ]);
         DB::table('users')->insert([
            'name' =>'Dede Suryana',
            'role_id' => '2',
            'email' => 'teacher@gmail.com',
            'password' =>Hash::make('teacher'),
            'remember_token' =>Hash::make('teacher'),
        ]);
    }
}
