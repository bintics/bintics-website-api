<?php
namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Course;

class CoursesController extends Controller {

	public function getIndex() {
		$courses = Course::where('cost', 0)->paginate(5);
		return view('clients.courses.home', ['courses' => $courses]);
	}

}