<?php

use App\Campus;
use Illuminate\Database\Seeder;

class CampusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campus::truncate();
        
    	Campus::create([
    		'campus'=>'Main'
    	]);

    	Campus::create([
    		'campus'=>'PC'
    	]);
    }
}
