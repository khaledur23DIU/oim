<?php

use App\Term;
use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Term::truncate();
        
    	Term::create([
    		'term'=>'1'
    	]);

    	Term::create([
    		'term'=>'2'
    	]);

    	Term::create([
    		'term'=>'3'
    	]);

    	
    }
}
