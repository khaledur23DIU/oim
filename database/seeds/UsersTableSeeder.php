<?php

use App\Faculty;
use App\Role;
use App\Student;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UsersTableSeeder extends Seeder
{
    use VerifiesEmails;
    /**
     * Run the database seeds.
     *
     * @return void
     */
  
    public function run()
    {
        User::truncate();
        // DB::table('role_user')->truncate();

        $adminRole = Role::where('name','admin')->first();
        $facultyRole = Role::where('name','faculty')->first();
        $studentRole = Role::where('name','student')->first();


        $adminFind = Faculty::where('email','khaledur.se@gmail.com')->first();
        $facultyFind = Faculty::where('email','lifedaily247@gmail.com')->first();
        $studentFind = Student::where('email','khaledur35-2173@diu.edu.bd')->first();


        $admin = $adminFind->user()->create([
        	'name' => $adminFind['name'],        	
        	'email' => $adminFind['email'],
        	'password' => Hash::make('password')
        ]);

        $faculty = $facultyFind->user()->create([
            'name' => $facultyFind['name'],         
            'email' => $facultyFind['email'],
            'password' => Hash::make('password')
        ]);

        $student = $studentFind->user()->create([
        	'name' => $studentFind['name'],        	
        	'email' => $studentFind['email'],
        	'password' => Hash::make('password')
        ]);

        /*event(new Registered($admin));
        event(new Registered($user = $this->create($request->all())));
        event(new Registered($faculty));
        event(new Registered($student));*/

        $admin->roles()->attach([$adminRole['id'], $facultyRole['id']]);
        $student->roles()->attach($facultyRole);
        $student->roles()->attach($studentRole);
       
    }
}
