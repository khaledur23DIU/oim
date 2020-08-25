<?php

use App\Batch;
use App\Department;
use App\Faculty;
use App\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$batch = Batch::where('batch','23')->first();
    	$department = Department::where('department_code','35')->first();
        $faculty = Faculty::where('email','khaledur.se@gmail.com')->first();
        Student::truncate();
    	Student::create([
    		'name'=>'Md. Khaledur Rahman',
    		'email' => 'khaledur35-2173@diu.edu.bd',
    		'official_id' => '172-35-2173',
    		'contact' => '01905373137',
    		'department_id' => $department['id'],
    		'batch_id' => $batch['id'],
            'adviser_id'=> $faculty['id']
    	]);

    	Student::create([
    		'name'=>'Md. Rokibul Hasan',
    		'email' => 'rokibul35-2117@diu.edu.bd',
    		'official_id' => '172-35-2117',
    		'contact' => '01731237218',
    		'department_id' => $department['id'],
    		'batch_id' => $batch['id'],
            'adviser_id'=> $faculty['id']
    	]);

    	Student::create([
    		'name'=>'Md. Nahizuzzaman',
    		'email' => 'nahiduzzaman35-2108@diu.edu.bd',
    		'official_id' => '172-35-2108',
    		'contact' => '01773509296',
    		'department_id' => $department['id'],
    		'batch_id' => $batch['id'],
            'adviser_id'=> $faculty['id']
    	]);
    }
}
