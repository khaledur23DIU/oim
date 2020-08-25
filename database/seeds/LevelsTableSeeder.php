<?php

use App\Level;
use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::truncate();
        
    	Level::create([
    		'level'=>'1'
    	]);

    	Level::create([
    		'level'=>'2'
    	]);

    	Level::create([
    		'level'=>'3'
    	]);

    	Level::create([
    		'level'=>'4'
    	]);
    }
}
