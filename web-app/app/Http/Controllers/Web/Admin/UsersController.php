<?php
namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller {

	public function getIndex() {
		$users = User::all();
		return view('admin-console.users.home', ['users' => $users]);
	}

}