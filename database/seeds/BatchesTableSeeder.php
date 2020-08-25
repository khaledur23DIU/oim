<?php

use App\Batch;
use App\Department;
use Illuminate\Database\Seeder;

class BatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Batch::truncate();
    	$b20 = Batch::create([
    		'batch'=>'20'
    	]);

    	$b21 = Batch::create([
    		'batch'=>'21'
    	]);

    	$b22 = Batch::create([
    		'batch'=>'22'
    	]);

    	$b23 = Batch::create([
    		'batch'=>'23'
    	]);

    	$b24 = Batch::create([
    		'batch'=>'24'
    	]);

    	$b25 = Batch::create([
    		'batch'=>'25'
    	]);

    	

        $swe = Department::where('department_initial','SWE')->first();
        

        $b20->departments()->attach($swe);
        $b21->departments()->attach($swe);
        $b22->departments()->attach($swe);
        $b23->departments()->attach($swe);
        $b24->departments()->attach($swe);
        $b25->departments()->attach($swe);


    }
}
