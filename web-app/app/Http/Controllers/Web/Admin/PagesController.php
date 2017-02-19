<?php
namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Menu;
use Auth;

class PagesController extends Controller {

	public function getIndex() {
		$pages = Page::paginate(10);
		return view('admin-console.pages.home', ['pages' => $pages]);
	}

	public function getNew() {
		$menus = Menu::all();
		return view('admin-console.pages.new', ['menus' => $menus]);
	}

	public function postNew(Request $request) {
		$page = new Page();
		$menu_id = $request->input('menu_id');
		if($menu_id > 0)
			$page->menu_id = $menu_id;

		$page->public = $request->input('public', false);
		$page->title = $request->input('title');
		$page->sub_title = $request->input('subtitle');
		$page->content = $request->input('content');
		$page->user_id = Auth::user()->id;
		$page->save();
		return redirect()->route('admin.pages.home');
	}

	public function getEdit(Page $page) {
		$menus = Menu::all();
		return view('admin-console.pages.edit', ['page' => $page, 'menus' => $menus]);
	}

	public function postEdit(Page $page, Request $request) {
		$menu_id = $request->input('menu_id');
		if($menu_id > 0)
			$page->menu_id = $menu_id;
		else
			$page->menu_id = null;		

		$page->public = $request->input('public', false);
		$page->as_foreign_url = $request->input('asurl', false);
		$page->foreign_url = $request->input('url');
		
		$page->title = $request->input('title');
		$page->sub_title = $request->input('subtitle');
		$page->content = $request->input('content');
		$page->save();
		return redirect()->route('admin.pages.home');
	}

	public function postDelete(Page $page) {
		$page->delete();
		return redirect()->back();
	}

}