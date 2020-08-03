<?php

use Illuminate\Database\Seeder;

class Extracurricular_membersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extracurricular_members')->insert([
        'student_id_number' => '181910030',
        'id_extracurricular' => '10',
        ]);
    }
}
