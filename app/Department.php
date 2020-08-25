<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $table = 'departments';
	protected $guarded = [];

    public function faculties()
    {
    	return $this->hasMany('App\Faculty');
    }

    public function students()
    {
    	return $this->hasMany('App\Student');
    }

    public function batches()
    {
        return $this
            ->belongsToMany('App\Batch')
            ->withTimestamps();
    }
}
