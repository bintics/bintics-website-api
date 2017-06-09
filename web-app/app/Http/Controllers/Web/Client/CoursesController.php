<?php
namespace App\Http\Controllers\Web\Client;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class CoursesController extends Controller {

	public function getIndex() {
		$courses = Course::where('cost', 0)->where('released', true)->paginate(5);
		return view('clients.courses.home', ['courses' => $courses]);
	}

	public function getSignon(Course $course) {
		return view('clients.courses.signon', ['course' => $course]);
	}

	public function postSignon(Request $request, Course $course) {
		$email = $request->input('email');
		$password = $request->input('password');
		$confirm_password = $request->input('confirm_password');

		if($password !== $confirm_password) {
			return redirect()->route('client.courses.signon', [$course])->with('status', 'La contraseña y la confirmación de la contraseña no coinciden');
		}

		
		$usuario = new User();
		$usuario->email = $email;
		$usuario->password = Hash::make($password);
		$usuario->save();

		$course->users()->attach($usuario->id);

		return redirect()->route('client.courses.success', [$course]);
	}

	public function getSuccess(Course $course) {
		return view('clients.courses.signon-success', ['course' => $course]);
	}

}