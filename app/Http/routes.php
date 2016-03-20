<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::post('/createPatient', 'PatientController@createPatient');

Route::get('/view-all-patient', 'PatientController@getAllPatient');

Route::get('/updatePatient', 'PatientController@showPatientInfo');

Route::post('/updatePatient', 'PatientController@updatePatientInfo');

Route::post('/deactivatePatient', 'PatientController@deactivatePatient');

Route::get('/add-diagnosis', 'MedicalRecordController@getPatientInfo');

Route::post('/add-diagnosis', 'MedicalRecordController@createMedicalRecord');

Route::get('/view-medical-history', 'PatientController@viewMedicalHistory');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
