<?php

Route::get('login', 'Auth\LoginController@ShowLoginForm')->middleware('guest');

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::post('login','Auth\LoginController@login')->name('login');
Route::get('logout','Auth\LoginController@logout')->name('logout');


// rutas de controladores de iglesia
Route::get('churches','ChurchController@index')->name('churches');