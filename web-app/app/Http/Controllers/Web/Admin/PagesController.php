<?php
namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller {

	public function getIndex() {
		$formatCourses = Page::paginate(10);
		return view('admin-console.pages.home', ['formatCourses' => $formatCourses]);
	}

	public function getNew() {
		return view('admin-console.pages.new');
	}

	public function postNew(Request $request) {
		$format = new Page();
		$format->name = $request->input('name');
		$format->save();
		return redirect()->route('admin.format_courses.home');
	}

	public function getEdit(Page $formatCourse) {
		return view('admin-console.pages.edit', ['formatCourse' => $formatCourse]);
	}

	public function postEdit(Page $formatCourse, Request $request) {
		$name = $request->input('name');
		$f = Page::where('name', $name)->first();
		if(is_null($f)) {
			$formatCourse->name = $name;
			$formatCourse->save();
			return redirect()->route('admin.format_courses.home');
		}
		return redirect()->back();
	}

	public function postDelete(Page $formatCourse) {
		$formatCourse->delete();
		return redirect()->back();
	}

}