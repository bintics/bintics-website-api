<?php
namespace App\Http\Controllers\AdminConsole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormatCourse;

class AdminFormatCoursesController extends Controller {

	public function getIndex() {
		$formatCourses = FormatCourse::paginate(10);
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

	public function getEdit(FormatCourse $formatCourse) {
		return view('admin-console.format-courses.edit', ['formatCourse' => $formatCourse]);
	}

	public function postEdit(FormatCourse $formatCourse, Request $request) {
		$name = $request->input('name');
		$f = FormatCourse::where('name', $name)->first();
		if(is_null($f)) {
			$formatCourse->name = $name;
			$formatCourse->save();
			return redirect()->route('admin.format_courses.home');
		}
		return redirect()->back();
	}

	public function postDelete(FormatCourse $formatCourse) {
		$formatCourse->delete();
		return redirect()->back();
	}

}