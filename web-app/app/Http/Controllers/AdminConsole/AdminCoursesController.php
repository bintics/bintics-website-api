<?php
namespace App\Http\Controllers\AdminConsole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\FormatCourse;

class AdminCoursesController extends Controller {

	public function getIndex() {
		$courses = Course::paginate(10);
		return view('admin-console.courses.home', ['courses' => $courses]);
	}

	public function getNew() {
		$formatCourses = FormatCourse::all();
		return view('admin-console.courses.new', ['formatCourses' => $formatCourses]);
	}

	public function postNew(Request $request) {
		$name = $request->input('name');
		$startDate = $request->input('start_date');
		$count = Course::where('name', $name)->where('start_date', $startDate)->count();
		if($count <= 0) {
			$course = new Course;
			$course->format_course_id = $request->input('format_course');
			$course->name = $name;
			$course->start_date = $startDate;
			$course->cost = $request->input('cost');
			$course->description = $request->input('description');
			$course->save();
			return redirect()->route('admin.courses');
		}
		return redirect()->back();
	}

	public function getEdit(Course $course) {
		$formatCourses = FormatCourse::all();
		return view('admin-console.courses.edit', ['course' => $course, 'formatCourses' => $formatCourses]);
	}

	public function postEdit(Course $course, Request $request) {
		$name = $request->input('name');
		$start_date = $request->input('start_date');
		$format_course_id = $request->input('format_course');
		$cost = $request->input('cost');
		$_course = Course::where('name', $name)
							->where('start_date', $start_date)
							->where('format_course_id', $format_course_id)
							->where('cost', $cost)
							->first();

		if(!is_null($_course))
			return redirect()->back();

		$course->name = $name;
		$course->format_course_id = $request->input('format_course');
		$course->start_date = $request->input('start_date');
		$course->cost = $cost;
		$course->description = $request->input('description');
		$course->save();

		return redirect()->route('admin.courses');
	}

}