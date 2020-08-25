<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
	protected $table = 'faculties';
    protected $guarded = [];
	
    public function user()
    {
    	return $this->morphOne(User::class, 'userable');
    }

    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
}
