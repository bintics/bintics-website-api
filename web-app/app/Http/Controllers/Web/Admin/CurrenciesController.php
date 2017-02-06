<?php
namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Currency;

class CurrenciesController extends Controller {

	public function getIndex() {
		$currencies = Currency::paginate(10);
		return view('admin-console.currencies.home', ['currencies' => $currencies]);
	}

	public function getNew() {
		return view('admin-console.currencies.new');
	}

	public function postNew(Request $request) {
		$currency = new Currency();
		$currency->name = $request->input('name');
		$currency->save();
		return redirect()->route('admin.currencies.home');
	}

	public function getEdit(Currency $currency) {
		return view('admin-console.currencies.edit', ['currency' => $currency]);
	}

	public function postEdit(Currency $currency, Request $request) {
		$name = $request->input('name');
		$f = Currency::where('name', $name)->first();
		if(is_null($f)) {
			$currency->name = $name;
			$currency->save();
			return redirect()->route('admin.currencies.home');
		}
		return redirect()->back();
	}

	public function postDelete(Currency $currency) {
		$currency->delete();
		return redirect()->back();
	}

}