<?php
namespace App\Http\Controllers\Web\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller {

	public function getPage($title = '', Page $page) {
		return view('clients.pages.home', ['page' => $page]);
	}

}