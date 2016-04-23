<?php
namespace App\Http\Controllers\AdminConsole;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminCoursesController extends Controller {

	public function getIndex() {
		$courses = [];
		return view('admin-console.courses.home', ['courses' => $courses]);
	}

	public function getNew() {
		return view('admin-console.courses.new');
	}

	public function postNew() {
		return 'nnuevo curso';
	}

}