<?php


Route::get('/', ['as' => 'client.home', 'uses' => 'HomeController@getIndex']);
Route::get('courses/free', ['as' => 'client.courses.free', 'uses' => 'CoursesController@getIndex']);