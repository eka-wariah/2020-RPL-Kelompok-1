<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
	DB::table('student')->insert([
        'name'=> 'eka',
        'student_id_number' => '18191003',
        'class'=> 'XII',
        'gender'=> 'girls',
    ]);

    }
}
