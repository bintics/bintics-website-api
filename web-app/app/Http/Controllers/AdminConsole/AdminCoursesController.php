<?php
namespace App\Http\Controllers\AdminConsole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Currency;
use App\Models\Course;
use App\Models\FormatCourse;

class AdminCoursesController extends Controller {

	public function getIndex() {
		$courses = Course::paginate(10);
		return view('admin-console.courses.home', ['courses' => $courses]);
	}

	public function getNew() {
		$formatCourses = FormatCourse::all();
		$currencies = Currency::all();
		return view('admin-console.courses.new', ['formatCourses' => $formatCourses, 'currencies' => $currencies]);
	}

	public function postNew(Request $request) {
		if($this->existsCourse($request))
			return redirect()->back();
		$this->updateCourse(new Course(), $request);
		return redirect()->route('admin.courses');
	}

	public function getEdit(Course $course) {
		$formatCourses = FormatCourse::all();
		$currencies = Currency::all();
		return view('admin-console.courses.edit', ['course' => $course, 'formatCourses' => $formatCourses, 'currencies' => $currencies]);
	}

	public function postEdit(Course $course, Request $request) {
		if($this->existsCourse($request))
			return redirect()->back();
		$this->updateCourse($course, $request);
		return redirect()->route('admin.courses');
	}

	public function postEnable(Course $course) {
		$course->released = true;
		$course->save();
		return redirect()->back();
	}

	public function postDisable(Course $course) {
		$course->released = false;
		$course->save();
		return redirect()->back();
	}

	private function existsCourse(Request $request) {
		$name = $request->input('name');
		$url_logo = $request->input('url_logo');
		$start_date = $request->input('start_date');
		$format_course_id = $request->input('format_course');
		$cost = $request->input('cost');
		$description = $request->input('description');
		$num_match = Course::where('name', $name)
							->where('start_date', $start_date)
							->where('format_course_id', $format_course_id)
							->where('cost', $cost)
							->where('description', $description)
							->where('url_logo', $url_logo)
							->count();
		return $num_match > 0;
	}

	private function updateCourse(Course $course, Request $request) {
		$name = $request->input('name');
		$url_logo = $request->input('url_logo');
		$start_date = $request->input('start_date');
		$format_course_id = $request->input('format_course');
		$cost = $request->input('cost');
		$description = $request->input('description');
		$currency_id = $request->input('currency');
		
		$course->name = $name;
		$course->url_logo = (is_null($url_logo) || trim($url_logo) == "") ? null : $url_logo;
		$course->format_course_id = $format_course_id;
		$course->type_currency_id = $currency_id;
		$course->start_date = $start_date;
		$course->cost = $cost;
		$course->description = $description;
		$course->save();
	}

}