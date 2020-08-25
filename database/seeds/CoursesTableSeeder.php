<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Course::truncate();

    	Course::create([
    		'course_title' => 'Art of living',
    		'course_code' => 'AOL101',
    		'credit' => '3',
    		'department_id' => '1',
    		'level_id' => '1',
    		'term_id' => '1'
    	]);

    	Course::create([
    		'course_title' => 'English 1',
    		'course_code' => 'ENG101',
    		'credit' => '3',
    		'department_id' => '1',
    		'level_id' => '1',
    		'term_id' => '1'
    	]);

    	Course::create([
    		'course_title' => 'Computer fundamentals',
    		'course_code' => 'SE111',
    		'credit' => '3',
    		'department_id' => '1',
    		'level_id' => '1',
    		'term_id' => '1'
    	]);
    	Course::create([
    		'course_title' => 'Computer fundamentals Lab',
    		'course_code' => 'SE112',
    		'credit' => '1',
    		'department_id' => '1',
    		'level_id' => '1',
    		'term_id' => '1'
    	]);
    	Course::create([
    		'course_title' => 'Introduction to Software engineering',
    		'course_code' => 'SE113',
    		'credit' => '3',
    		'department_id' => '1',
    		'level_id' => '1',
    		'term_id' => '1'
    	]);
    	Course::create([
    		'course_title' => 'Mathemetics l',
    		'course_code' => 'MAT101',
    		'credit' => '3',
    		'department_id' => '1',
    		'level_id' => '1',
    		'term_id' => '2'
    	]);
    	Course::create([
    		'course_title' => 'Physics l',
    		'course_code' => 'PHY101',
    		'credit' => '3',
    		'department_id' => '1',
    		'level_id' => '1',
    		'term_id' => '2'
    	]);
    	/*Course::create([
    		'course_title' => '',
    		'course_code' => '',
    		'credit' => '',
    		'department_id' => '',
    		'level_id' => '',
    		'term_id' => ''
    	]);
    	Course::create([
    		'course_title' => '',
    		'course_code' => '',
    		'credit' => '',
    		'department_id' => '',
    		'level_id' => '',
    		'term_id' => ''
    	]);
    	Course::create([
    		'course_title' => '',
    		'course_code' => '',
    		'credit' => '',
    		'department_id' => '',
    		'level_id' => '',
    		'term_id' => ''
    	]);*/
        

    }
}
