<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    public function user() {
    	return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function pages() {
    	return $this->hasMany('App\Models\Page', 'menu_id', 'id');
    }

}
