<?php

use App\Semester;
use Illuminate\Database\Seeder;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Semester::truncate();
        
        Semester::create([
    		'semester'=>'Spring 2020'
    	]);

    	Semester::create([
    		'semester'=>'Summer 2020'
    	]);

    	Semester::create([
    		'semester'=>'Fall 2020'
    	]);
    }
}
