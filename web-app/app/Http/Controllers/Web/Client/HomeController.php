<?php
namespace App\Http\Controllers\Web\Client;

use App\Http\Controllers\Controller;

class HomeController extends Controller {

	public function getIndex() {
		return view('clients.home');
	}

}