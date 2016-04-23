<?php
namespace App\Http\Controllers\AdminConsole;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminUsersController extends Controller {

	public function getIndex() {
		$users = User::all();
		return view('admin-console.users.home', ['users' => $users]);
	}

}