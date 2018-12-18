<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('login', function () {
		return view('login');
	});

Route::get('register', function () {
		return view('register');
	});

Route::get('positionnement', function () {
		return view('positionnement');
	});

Route::get('mentions', function () {
		return view('mentions');
	});

Route::get('mentions', function () {
		return view('mentions');
	});

Route::get('positionnement', function () {
		return view('positionnement');
	});

Route::get('created', function () {
		return view('created');
	});

Route::get('success', function () {
		return view('success');
	});

Route::get('previous', function () {
		return view('previous');
	});

Route::get('profil', function () {
		return view('profil');
	});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('Auth\LoginController@__construct');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('Auth\RegisterController@register');

Route::get('positionnement', 'PositionnementController@create')->name('positionnement');
Route::post('positionnement', 'PositionnementController@store')->name('positionnement');

Route::get('previous', 'PreviousController@generatePDF')->name('previous');