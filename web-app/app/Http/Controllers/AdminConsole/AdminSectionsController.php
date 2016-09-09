<?php
namespace App\Http\Controllers\AdminConsole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use Auth;

class AdminSectionsController extends Controller {

	public function getIndex() {
		$sections = Section::paginate(10);
		return view('admin-console.sections.home', ['sections' => $sections]);
	}

	public function getNew() {
		return view('admin-console.sections.new');
	}

	public function postNew(Request $request) {
		$aection = new Section();
		$aection->name = $request->input('name');
		$aection->user_id = Auth::user()->id;
		$aection->save();
		return redirect()->route('admin.sections.home');
	}

	public function getEdit(Section $section) {
		return view('admin-console.sections.edit', ['section' => $section]);
	}

	public function postEdit(Section $section, Request $request) {
		$name = $request->input('name');
		$f = Section::where('name', $name)->first();
		if(is_null($f)) {
			$section->name = $name;
			$section->save();
			return redirect()->route('admin.sections.home');
		}
		return redirect()->back();
	}

	public function postDelete(Section $section) {
		$section->delete();
		return redirect()->back();
	}

}