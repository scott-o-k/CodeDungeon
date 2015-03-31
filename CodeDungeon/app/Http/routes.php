<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);

// Admin ------------------------------------------------


Route::get('/admin', 'AdminController@getAllStudents');



// Pre-Work ----------------------------------------------

Route::get('/main_checklist','ChecklistController@listSteps');

Route::get('/applyNow', ['as' => 'applyNow', 'uses' => 'ChecklistController@getApp']);

Route::post('/api/application/{application_id}', 'ChecklistController@updateEmailAction');


Route::post('/api/application_step0/{application_id}', 'ChecklistController@completeStep0');

Route::post('/api/application_step1/{application_id}', 'ChecklistController@completeStep1');

Route::post('/api/application_step2/{application_id}', 'ChecklistController@completeStep2');

Route::post('/api/application_step3/{application_id}', 'ChecklistController@completeStep3');

Route::post('/api/application_step4/{application_id}', 'ChecklistController@completeStep4');

Route::post('/api/application_step5/{application_id}', 'ChecklistController@completeStep5');

Route::post('/api/application_step6/{application_id}', 'ChecklistController@completeStep6');



