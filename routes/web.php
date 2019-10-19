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

Route::get('medicine/{id}', 'HomeController@getMedicine');
Route::get('doctorDetail/{id}', 'HomeController@getDoctor');

Route::group(['prefix'=>'patient','middleware'=>'patient'],function(){
	Route::get('/', 'PatientController@index');
	Route::get('/home', 'PatientController@index');
	Route::get('index', 'PatientController@index');
	Route::get('searchDoctorByName', 'PatientController@searchDoctorByName');
	Route::get('searchDoctor','PatientController@searchDoctor');
	Route::get('patientDetail','PatientController@patientDetail');
	Route::get('doctorDetail/{id}', 'PatientController@getDoctorDetail');
	Route::get('reportDetail/{medicalReportId}', 'PatientController@reportDetail');




});

Route::group(['prefix'=>'doctor','middleware'=>'doctor'],function(){
	Route::get('/', 'DoctorController@index');
	Route::get('home', 'DoctorController@index');
	Route::get('searchPatient', 'DoctorController@searchPatient');
	Route::get('searchPatientByName', 'DoctorController@searchPatientByName');
	Route::get('patientDetail/{id}', 'DoctorController@patientDetail');
	Route::get('patientDetail', 'DoctorController@createMedicalReportDetail');
	Route::get('reportDetail/{medicalReportId}', 'DoctorController@reportDetail');
	Route::get('search', 'DoctorController@search');
	Route::get('createPatient', 'DoctorController@createPatient');
	Route::post('createPatient', 'DoctorController@createPatientPost');
	Route::get('getMedicineAjax/{name}', 'DoctorController@getMedicineAjax');
	Route::get('doctorDetail/{id}', 'DoctorController@getDoctorDetail');

});

