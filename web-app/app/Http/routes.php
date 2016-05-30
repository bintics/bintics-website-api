<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'client.home', 'uses' => 'Clients\HomeController@getIndex']);
Route::get('courses/free', ['as' => 'client.courses.free', 'uses' => 'Clients\CoursesController@getIndex']);


Route::get('admin-console-login', ['as' => 'admin.login', 'uses' => 'AdminConsole\AdminConsoleAuthController@getLogin']);
Route::post('admin-console-login', ['middleware' => ['first.user'], 'uses' => 'AdminConsole\AdminConsoleAuthController@postLogin']);
Route::get('admin-console-logout', ['as' => 'admin.logout', 'uses' => 'AdminConsole\AdminConsoleAuthController@getLogout']);

Route::group(['prefix' => 'admin-console', 'middleware' => ['auth']], function() {
	Route::get('/', ['as' => 'admin.home', 'uses' => 'AdminConsole\AdminHomeController@getIndex']);

	Route::group(['prefix' => 'users'], function() {
		Route::get('/', ['as' => 'admin.users', 'uses' => 'AdminConsole\AdminUsersController@getIndex']);
	});	

	Route::group(['prefix' => 'format-courses'], function() {
		Route::get('/', ['as' => 'admin.format_courses.home', 'uses' => 'AdminConsole\AdminFormatCoursesController@getIndex']);
		Route::get('new', ['as' => 'admin.format_courses.new', 'uses' => 'AdminConsole\AdminFormatCoursesController@getNew']);
		Route::post('new', ['uses' => 'AdminConsole\AdminFormatCoursesController@postNew']);
		Route::get('{formatCourse}/edit', ['as' => 'admin.format_courses.edit', 'uses' => 'AdminConsole\AdminFormatCoursesController@getEdit']);
		Route::post('{formatCourse}/edit', ['uses' => 'AdminConsole\AdminFormatCoursesController@postEdit']);
		Route::post('{formatCourse}/delete', ['as' => 'admin.format_courses.delete', 'uses' => 'AdminConsole\AdminFormatCoursesController@postDelete']);
	});	

	Route::group(['prefix' => 'courses'], function() {
		Route::get('/', ['as' => 'admin.courses', 'uses' => 'AdminConsole\AdminCoursesController@getIndex']);
		Route::get('new', ['as' => 'admin.courses.new', 'uses' => 'AdminConsole\AdminCoursesController@getNew']);
		Route::post('new', ['uses' => 'AdminConsole\AdminCoursesController@postNew']);

		Route::get('{course}/edit', ['as' =>'admin.courses.edit', 'uses' => 'AdminConsole\AdminCoursesController@getEdit']);
		Route::post('{course}/edit', ['uses' => 'AdminConsole\AdminCoursesController@postEdit']);
	});	

});
