<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->insert([
            'role_name'=> 'admin',

        ]);
         DB::table('roles')->insert([
            'role_name'=> 'teacher',

        ]);
          DB::table('roles')->insert([
            'role_name'=> 'student',

        ]);
    }
}
