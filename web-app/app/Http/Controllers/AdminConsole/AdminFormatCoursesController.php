<?php
namespace App\Http\Controllers\AdminConsole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormatCourse;

class AdminFormatCoursesController extends Controller {

	public function getIndex() {
		$formatCourses = FormatCourse::all();
		return view('admin-console.format-courses.home', ['formatCourses' => $formatCourses]);
	}

	public function getNew() {
		return view('admin-console.format-courses.new');
	}

	public function postNew(Request $request) {
		$format = new FormatCourse();
		$format->name = $request->input('name');
		$format->save();
		return redirect()->route('admin.format_courses.home');
	}

}