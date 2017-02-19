<?php
namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Page;
use Auth;

class MenusController extends Controller {

	public function getIndex() {
		$this->checkDefaultMenus();
		$menus = Menu::paginate(10);
		return view('admin-console.menus.home', ['menus' => $menus]);
	}

	public function postNew(Request $request) {
		$menu = new Menu();
		$menu->name = $request->input('name');
		$menu->user_id = Auth::user()->id;
		$menu->save();
		return redirect()->route('admin.menu.home');
	}

	public function getEdit(Menu $menu) {
		return view('admin-console.menus.edit', ['menu' => $menu]);
		// return view('admin-console.menus.edit', ['menu' => $menu]);
	}

	public function postEdit(Menu $menu, Request $request) {
		$menu->name = $request->input('name');
		$menu->save();
		return redirect()->route('admin.menu.home');
	}

	private function checkDefaultMenus() {
		if(Menu::count() == 0) {
			$navTop = new Menu();
			$navTop->name = 'MainMenu';
			$navTop->user_id = Auth::user()->id;
			$navTop->save();
		}
	}
}
