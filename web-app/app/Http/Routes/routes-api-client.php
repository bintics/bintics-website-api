<?php
// API Client
//Route::get('/', ['as' => 'client.courses.free', 'uses' => 'HomeController@getIndex']);
Route::get('/', ['uses' => function() {
	return 'Api Client';
}]);