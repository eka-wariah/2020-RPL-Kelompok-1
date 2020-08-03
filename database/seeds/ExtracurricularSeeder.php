<?php

use Illuminate\Database\Seeder;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extracurricular')->insert([
        'extracurricular_name'=> 'choir',
        'field'=>'music',
        ]);
    }
}
