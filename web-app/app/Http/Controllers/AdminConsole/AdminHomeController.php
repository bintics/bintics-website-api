<?php
namespace App\Http\Controllers\AdminConsole;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminHomeController extends Controller {

	public function getIndex() {
		return view('admin-console.home');
	}

}