<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/paso1', 'ConvocatoriaController@showPaso1');
Route::get('/paso2', 'ConvocatoriaController@showPaso2');
Route::get('/paso3', 'ConvocatoriaController@showPaso3');
Route::get('/paso4', 'ConvocatoriaController@showPaso4');
Route::get('/paso5', 'ConvocatoriaController@showPaso5');
Route::get('/cons', 'ConvocatoriaController@showConsideraciones');
Route::get('/registro', 'RegistroController@index');
Route::get('/registro/create', 'RegistroController@create');
Route::post('/registro/create', 'RegistroController@store');