<?php

use Illuminate\Database\Seeder;

class Coach_teacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coach_teacher')->insert([
        	'name' => 'windi',
        	'gender' => 'girls',
        	'extracurricular_trainer' => 'choir',
        ]);
    }
}
