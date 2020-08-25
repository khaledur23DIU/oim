<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
    	Role::create([
    		'name'=>'admin',
    		'description' => 'Administration Level'
    	]);

    	Role::create([
    		'name'=>'faculty',
    		'description' => 'Faculty Level'
    	]);

    	Role::create([
    		'name'=>'student',
    		'description' => 'Student Level'
    	]);
    	
    }
}
