<?php
namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller {

	public function getIndex() {
		return view('admin-console.home');
	}

}