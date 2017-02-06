<?php
// API Admin
//Route::get('/', ['as' => 'client.courses.free', 'uses' => 'HomeController@getIndex']);
Route::get('/', ['uses' => function() {
	return 'API Admin';
}]);