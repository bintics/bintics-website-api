<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    public function user() {
    	return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function pages() {
    	return $this->hasMany('App\Models\Page', 'id', 'parent_page_id');
    }

    public function parentPage() {
    	return $this->belongsTo('App\Models\Page', 'parent_page_id');
    }
}
