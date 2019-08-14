<?php

Route::get('login', 'Auth\LoginController@ShowLoginForm')->middleware('guest');

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::post('login','Auth\LoginController@login')->name('login');
Route::get('logout','Auth\LoginController@logout')->name('logout');


	/**
	* Rutas de controladores de iglesias
	*/ 
	Route::get('churches','ChurchController@index')->name('churches');
	Route::get('churches/create','ChurchController@create')->name('churches.create');
	Route::get('churches/{id}/edit','ChurchController@create')->name('churches.edit');
	Route::resource('churches', 'ChurchController', ['as' => 'churches', 'except' => ['index', 'create', 'edit'] ]);