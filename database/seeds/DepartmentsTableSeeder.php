<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate();
    	Department::create([
    		'department_name'=>'Software Engineering',
    		'department_initial'=>'SWE',
    		'department_code' => '35'
    	]);

    	/*Department::create([
    		'department_name'=>'Multimedia & Creative Technology',
    		'department_initial' => 'MCT',
            'department_code' => '40'
    	]);*/

    	/*Department::create([
    		'department_name'=>'',
    		'department_code' => ''
    	]);*/
    }
}
