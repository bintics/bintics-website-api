<?php
namespace App\Http\Controllers\AdminConsole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Models\User;
use Hash;
use Auth;

class AdminConsoleAuthController extends Controller {

	public function getLogin() {
		$count = User::count();
		if($count == 0) {
			$usuario = new User();
			$usuario->email = 'admin@admin.com';
			$usuario->password = Hash::make('masterkey');
			$usuario->save();
		}
		
		return view('admin-console.login');
	}

	public function postLogin(Request $request) {
		$email = $request->input('email');
		$password = $request->input('password');

		$user = User::where('email', $email)->first();
		if(!is_null($user)) {
			if(Hash::check($password, $user->password)) {
				Auth::login($user);
				return redirect()->route('admin.home');
			} else {
				return 'No entro: ' . $user->getAuthPassword() . ' --> ' . Hash::make($password);
			}
		}
		return back()->withInput();
	}

	public function getLogout() {
		Auth::logout();
		return redirect()->route('admin.home');
	}

}