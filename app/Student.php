<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
    use Notifiable;
    // use SoftDeletes;
    
	protected $table = 'students';
	protected $guarded = [];
	
    public function user()
    {
    	return $this->morphOne(User::class, 'userable');
    }

    public function department()
    {
    	return $this->belongsTo(Department::class);
    }

    public function batch()
    {
    	return $this->belongsTo(Batch::class, 'batch_id');
    }
}
