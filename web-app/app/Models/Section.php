<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';

    public function user() {
    	return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function sections() {
    	return $this->hasMany('App\Models\Section', 'id', 'parent_section_id');
    }

    public function parentSection() {
    	return $this->belongsTo('App\Models\Section', 'parent_section_id');
    }

    public function pages() {
    	return $this->hasMany('App\Models\Page', 'section_id', 'id');    	
    }

}
