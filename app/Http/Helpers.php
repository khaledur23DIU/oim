<?php

use App\Student;
use App\Faculty;
use App\User;

class Helpers
{
	
	/*function __construct(argument)
	{
		# code...
	}*/
	
	public static function findEmail_from_students($email)
	{
		
			return Student::where('email', $email)->first();
		
	}

	public static function findEmail_from_faculties($email)
	{
		
			return Faculty::where('email', $email)->first();
		
	}
}