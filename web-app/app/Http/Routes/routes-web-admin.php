<?php

Route::get('home', ['as' => 'admin.home', 'uses' => 'HomeController@getIndex']);

Route::group(['prefix' => 'users'], function() {
	Route::get('/', ['as' => 'admin.users', 'uses' => 'UsersController@getIndex']);
});

/*----------------------------*/
//		Secciones
/*----------------------------*/
Route::group(['prefix' => 'sections'], function() {
	Route::get('/', ['as' => 'admin.sections.home', 'uses' => 'SectionsController@getIndex']);
	Route::get('new', ['as' => 'admin.sections.new', 'uses' => 'SectionsController@getNew']);
	Route::post('new', ['uses' => 'SectionsController@postNew']);
	Route::get('{section}/edit', ['as' => 'admin.sections.edit', 'uses' => 'SectionsController@getEdit']);
	Route::post('{section}/edit', ['uses' => 'SectionsController@postEdit']);
	Route::post('{section}/delete', ['as' => 'admin.sections.delete', 'uses' => 'SectionsController@postDelete']);

	Route::get('{section}/sub-sections', ['as' => 'admin.sections.sub.home', 'uses' => 'SectionsController@getHomeSubSection']);
	Route::get('{section}/add-sub-section', ['as' => 'admin.sections.sub.add', 'uses' => 'SectionsController@getAddSubSection']);
	Route::post('add-sub-section', ['as' => 'admin.sections.sub.add_post', 'uses' => 'SectionsController@postNewSubSection']);

	Route::get('{section}/add-page', ['as' => 'admin.sections.add.page', 'uses' => 'SectionsController@getAddPageToSection']);
	Route::post('{section}/add-page', ['uses' => 'SectionsController@postAddPageToSection']);
});

/*----------------------------*/
//		Secciones
/*----------------------------*/
Route::group(['prefix' => 'menu'], function() {
	Route::get('/', ['as' => 'admin.menu.home', 'uses' => 'MenusController@getIndex']);
	Route::post('/', ['uses' => 'MenusController@postNew']);

	Route::get('/{menu}', ['as' => 'admin.menu.edit', 'uses' => 'MenusController@getEdit']);
	Route::post('/{menu}', ['uses' => 'MenusController@postEdit']);
});
	

/*----------------------------*/
//		Páginas
/*----------------------------*/
/*
Route::group(['prefix' => 'pages'], function() {
	Route::get('/', ['as' => 'admin.pages.home', 'uses' => 'PagesController@getIndex']);
	Route::get('new', ['as' => 'admin.pages.new', 'uses' => 'PagesController@getNew']);
	Route::post('new', ['uses' => 'PagesController@postNew']);
	Route::get('{page}/edit', ['as' => 'admin.pages.edit', 'uses' => 'PagesController@getEdit']);
	Route::post('{page}/edit', ['uses' => 'PagesController@postEdit']);
	Route::post('{page}/delete', ['as' => 'admin.pages.delete', 'uses' => 'PagesController@postDelete']);
});
*/


/*----------------------------*/
//		Catalogos
/*----------------------------*/
Route::group(['prefix' => 'format-courses'], function() {
	Route::get('/', ['as' => 'admin.format_courses.home', 'uses' => 'FormatCoursesController@getIndex']);
	Route::get('new', ['as' => 'admin.format_courses.new', 'uses' => 'FormatCoursesController@getNew']);
	Route::post('new', ['uses' => 'FormatCoursesController@postNew']);
	Route::get('{formatCourse}/edit', ['as' => 'admin.format_courses.edit', 'uses' => 'FormatCoursesController@getEdit']);
	Route::post('{formatCourse}/edit', ['uses' => 'FormatCoursesController@postEdit']);
	Route::post('{formatCourse}/delete', ['as' => 'admin.format_courses.delete', 'uses' => 'FormatCoursesController@postDelete']);
});

Route::group(['prefix' => 'currencies'], function() {
	Route::get('/', ['as' => 'admin.currencies.home', 'uses' => 'CurrenciesController@getIndex']);
	Route::get('new', ['as' => 'admin.currencies.new', 'uses' => 'CurrenciesController@getNew']);
	Route::post('new', ['uses' => 'CurrenciesController@postNew']);
	Route::get('{currency}/edit', ['as' => 'admin.currencies.edit', 'uses' => 'CurrenciesController@getEdit']);
	Route::post('{currency}/edit', ['uses' => 'CurrenciesController@postEdit']);
	Route::post('{currency}/delete', ['as' => 'admin.currencies.delete', 'uses' => 'CurrenciesController@postDelete']);
});	

Route::group(['prefix' => 'courses'], function() {
	Route::get('/', ['as' => 'admin.courses', 'uses' => 'CoursesController@getIndex']);
	Route::get('new', ['as' => 'admin.courses.new', 'uses' => 'CoursesController@getNew']);
	Route::post('new', ['uses' => 'CoursesController@postNew']);

	Route::get('{course}/edit', ['as' =>'admin.courses.edit', 'uses' => 'CoursesController@getEdit']);
	Route::post('{course}/edit', ['uses' => 'CoursesController@postEdit']);
	Route::post('{course}/enable', ['as' => 'admin.courses.enable', 'uses' => 'CoursesController@postEnable']);
	Route::post('{course}/disable', ['as' => 'admin.courses.disable', 'uses' => 'CoursesController@postDisable']);
});
