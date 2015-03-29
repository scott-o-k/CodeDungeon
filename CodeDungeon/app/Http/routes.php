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

Route::get('/main_checklist','ChecklistController@listSteps');

Route::get('/applyNow', 'ChecklistController@getApp');

Route::post('/api/application_google/{application_id}', 'ChecklistController@updateEmailAction');

Route::post('/api/application_github/{application_id}', 'ChecklistController@updateGitHubAction');

Route::post('/api/application_twitter/{application_id}', 'ChecklistController@updateTwitterAction');

