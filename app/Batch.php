<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
	protected $table = 'batches';
	protected $guarded = [];

    public function students()
    {
    	return $this->hasMany('App\Student');
    }

    public function departments()
    {
    	return $this
            ->belongsToMany('App\Department')
            ->withTimestamps();
    }
}
