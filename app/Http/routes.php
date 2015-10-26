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
header('Access-Control-Allow-Origin: http://localhost:8080');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function() {

	Route::group(['prefix' => 'programas'], function() {

		Route::get('', ['uses' => 'ProgramaController@index']);

		Route::get('{id}', ['uses' => 'ProgramaController@show']);

		Route::post('', ['uses' => 'ProgramaController@store']);

		Route::put('{id}', ['uses' => 'ProgramaController@update']);

		Route::delete('{id}', ['uses' => 'ProgramaController@destroy']);
	});
});
