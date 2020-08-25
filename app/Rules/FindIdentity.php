<?php

namespace App\Rules;

use App\Faculty;
use App\Student;
use Illuminate\Contracts\Validation\Rule;

class FindIdentity implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (!empty(Student::where('email',$value)->first())) {
            return true;
        }
        elseif (!empty(Faculty::where('email',$value)->first())) {
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'No records found in the database';
    }
}
