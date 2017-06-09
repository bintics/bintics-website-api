<?php


Route::get('/', ['as' => 'client.home', 'uses' => 'HomeController@getIndex']);
Route::get('courses/free', ['as' => 'client.courses.free', 'uses' => 'CoursesController@getIndex']);
Route::get('courses/{course}/signon', ['as' => 'client.courses.signon', 'uses' => 'CoursesController@getSignon']);
Route::post('courses/{course}/signon', ['uses' => 'CoursesController@postSignon']);
Route::get('courses/{course}/signon-success', ['as' => 'client.courses.success', 'uses' => 'CoursesController@getSuccess']);

Route::get('{title?}{page}', ['as' => 'client.page', 'uses' => 'PagesController@getPage']);