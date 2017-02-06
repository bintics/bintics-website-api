<?php
namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Currency;
use App\Models\Course;
use App\Models\FormatCourse;

class CoursesController extends Controller {

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
		$short_description = $request->input('short_description');
		$num_match = Course::where('name', $name)
							->where('start_date', $start_date)
							->where('format_course_id', $format_course_id)
							->where('cost', $cost)
							->where('short_description', $short_description)
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
		$short_description = $request->input('short_description');
		$long_description = $request->input('long_description');
		$currency_id = $request->input('currency');
		
		$course->name = $name;
		$course->url_logo = (is_null($url_logo) || trim($url_logo) == "") ? null : $url_logo;
		$course->format_course_id = $format_course_id;
		$course->type_currency_id = $currency_id;
		$course->start_date = $start_date;
		$course->cost = $cost;
		$course->short_description = $short_description;
		$course->long_description = $long_description;
		$course->save();
	}

}