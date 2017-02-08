<?php
namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use Auth;

class SectionsController extends Controller {

	public function getIndex() {
		$this->checkDefaultSections();
		$sections = Section::whereNull('parent_section_id')->paginate(10);
		return view('admin-console.sections.home', ['sections' => $sections]);
	}

	private function checkDefaultSections() {
		// NavTop
		if(Section::count() == 0) {
			$navTop = new Section();
			$navTop->name = 'NavTop';
			$navTop->user_id = Auth::user()->id;
			$navTop->save();

			$navLeft = new Section();
			$navLeft->name = 'NavLeft';
			$navLeft->user_id = Auth::user()->id;
			$navLeft->save();

			$navRight = new Section();
			$navRight->name = 'NavRight';
			$navRight->user_id = Auth::user()->id;
			$navRight->save();

			$navBottom = new Section();
			$navBottom->name = 'NavBottom';
			$navBottom->user_id = Auth::user()->id;
			$navBottom->save();
		}
	}

	public function getNew() {
		return view('admin-console.sections.new');
	}

	public function postNew(Request $request) {
		$section = new Section();
		$section->name = $request->input('name');
		$section->user_id = Auth::user()->id;
		$section->save();
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
			if(is_null($section->parentSection)) {
				return redirect()->route('admin.sections.home');
			} else {
				return redirect()->route('admin.sections.sub.home', ['id' => $section->parentSection->id]);
			}
		}
		return redirect()->back();
	}

	public function postDelete(Section $section) {
		$section->delete();
		return redirect()->back();
	}


	public function getHomeSubSection(Section $section) {
		return view('admin-console.sections.sub.home', ['parent' => $section]);
	}

	public function getAddSubSection(Section $section) {
		return view('admin-console.sections.sub.add', ['parent' => $section]);
	}

	public function postNewSubSection(Request $request) {
		$_section = new Section();
		$_section->name = $request->input('name');
		$_section->user_id = Auth::user()->id;
		$_section->parent_section_id = $request->input('parent_id');
		$_section->foreign_url = $request->input('foreign_url');
		$_section->save();
		return redirect()->route('admin.sections.sub.home', ['id' => $request->input('parent_id')]);
	}

	public function getAddPageToSection(Section $section) {
		return view('admin-console.sections.newpage', ['parent' => $section]);
	}

	public function postAddPageToSection(Section $section) {
		
		return redirect()->route('admin.sections.sub.home', ['id' => $request->input('parent_id')]);
	}
}
