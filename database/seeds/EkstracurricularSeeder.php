<?php

use Illuminate\Database\Seeder;

class EkstracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('ekstracurriculars')->insert([
            'ekstracurricular_name'=> 'choir',
        ]);
    }
}
