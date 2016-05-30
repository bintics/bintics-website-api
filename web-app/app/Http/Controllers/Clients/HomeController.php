<?php
namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;

class HomeController extends Controller {

	public function getIndex() {
		return redirect()->route('client.courses.free');
	}

}