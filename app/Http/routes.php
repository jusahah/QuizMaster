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
// Authentication routes...

Route::group(['middleware' => ['web']], function () {
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');
});


Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'HomeController@index');
	Route::get('test', ['as' => 'test', 'uses' => 'HomeController@test']);
	Route::get('info', ['as' => 'tournamentinfo', 'uses' => 'HomeController@tournamentInfo']);
	Route::get('participationinfo', ['as' => 'participationinfo', 'uses' => 'HomeController@participationInfo']);
	Route::get('contact', ['as' => 'contact', 'uses' => 'PageController@showContact']);
	Route::get('cooperation', ['as' => 'cooperation', 'uses' => 'PageController@showCooperation']);
	Route::get('guide', ['as' => 'guide', 'uses' => 'PageController@showGuide']);
});


Route::group(['prefix' => 'tournaments', 'middleware' => ['web']], function() {
	Route::get('/', ['as' => 'tournaments', 'uses' => 'HomeController@index']);
	Route::get('{tid}/full', ['as' => 'fullresults', 'uses' => 'HomeController@fullResults']);
	Route::get('{tid}/participate', ['as' => 'participate', 'uses' => 'HomeController@participateTournament']);
	Route::get('{tid}', ['as' => 'tournamentinfo', 'uses' => 'HomeController@tournamentInfo']);


});
Route::group(['middleware' => ['web', 'auth']], function () {
	Route::get('creation', ['uses' => 'AdminController@showCreate', 'middleware' => 'checkAdmin']);
	Route::post('creation', ['as' => 'createtournament', 'uses' => 'AdminController@create', 'middleware' => 'checkAdmin']);
	Route::post('creationquestions', ['as' => 'createquestions', 'uses' => 'AdminController@createQuestions', 'middleware' => 'checkAdmin']);
});
// HTML routes end

// API routes
// All return JSON responses

// Each API request must have api key set
Route::group(['prefix' => 'api', 'middleware' => 'checkApiKey'], function() {
	// Get soon-to-be-started tourneys
	// Api key was already matched in middleware so we need only "me" params inside the controller
	Route::post('tournaments', 'APIController@fetchTournaments'); 
	Route::post('donetournaments', 'APIController@saveTournamentInfo'); 
	Route::post('usercount', 'APIController@userCount');
});

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
