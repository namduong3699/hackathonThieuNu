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

Route::get('/', 'HomeController@index');

Route::get('/login', 'LoginController@getLogin');
Route::post('/login', 'LoginController@postLogin');

Route::get('logout', function(){
	Auth::logout();
	return redirect()->back();
});

Route::group(['prefix'=>'patient','middleware'=>'patient'],function(){
	Route::get('/', 'PatientController@index');
	Route::get('/home', 'PatientController@index');
});

Route::group(['prefix'=>'doctor','middleware'=>'doctor'],function(){
	Route::get('/', 'DoctorController@index');
	Route::get('/home', 'DoctorController@index');
});