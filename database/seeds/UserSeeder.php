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
            'name' =>'windi',
            'role_id' => '1',
            'email' => 'admin@gmail.com',
            'password' =>Hash::make('admin'),
            'remember_token' =>Hash::make('admin'),
        ]);
         DB::table('users')->insert([
            'name' =>'ahmad',
            'role_id' => '2',
            'email' => 'ahmad@gmail.com',
            'password' =>Hash::make('teacher'),
            'remember_token' =>Hash::make('teacher'),
        ]);
    }
}
