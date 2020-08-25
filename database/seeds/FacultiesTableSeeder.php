<?php

use App\Department;
use App\Faculty;
use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$department = Department::where('department_code','35')->first();
        Faculty::truncate();
    	Faculty::create([
    		'name'=>'Asif Khan Shakir',
    		'initial' => 'AKS',
    		'email' => 'khaledur.se@gmail.com',
    		'official_id' => '710001557',
    		'contact' => '01917607480',
    		'department_id' => $department['id'],
    		'designation' => 'Senior Lecturer'
    	]);

        Faculty::create([
            'name'=>'Jhon Doe',
            'initial' => 'JD',
            'email' => 'lifedaily247@gmail.com',
            'official_id' => '710001501',
            'contact' => '01815787898',
            'department_id' => $department['id'],
            'designation' => 'Department Head'
        ]);
    }
}
