<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    public function users() {
    	return $this->belongsToMany('App\Models\User', 'users_records_courses', 'course_id', 'user_id');
    }
}
