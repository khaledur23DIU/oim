<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    	$this->call(DepartmentsTableSeeder::class);
    	$this->call(BatchesTableSeeder::class);
    	$this->call(FacultiesTableSeeder::class);
    	$this->call(StudentsTableSeeder::class);
    	$this->call(RolesTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(CampusesTableSeeder::class);
        $this->call(SemesterTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        //$this->call(UsersTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
