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

/*Route::get('/', function()
{
	return View::make('hello');
});*/

Route::get('/', 'ConvocatoriaController@showIndex');

Route::get('/paso1', 'ConvocatoriaController@showPaso1');
Route::get('/paso2', 'ConvocatoriaController@showPaso2');
Route::get('/paso3', 'ConvocatoriaController@showPaso3');
Route::get('/paso4', 'ConvocatoriaController@showPaso4');
Route::get('/paso5', 'ConvocatoriaController@showPaso5');
Route::get('/cons', 'ConvocatoriaController@showConsideraciones');
Route::get('/registro', 'RegistroController@index');
Route::get('/registro/create', 'RegistroController@create');
Route::post('/registro/create', 'RegistroController@store');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@autenticate');
Route::get('/logout', 'LoginController@logout');

Route::get('/preguntas', 'PreguntaController@index');
Route::get('/preguntas/create', 'PreguntaController@create');
Route::post('/preguntas/create', 'PreguntaController@store');
Route::delete('/preguntas/delete/{id}','PreguntaController@destroy');//*/

//Route::get('user/{id}', 'PreguntaController@destroy');//test

Route::delete('pregunta/{id}', [
  'uses' => 'PreguntaController@destroy',
  'as' => 'preguntas.destroy'
]);

Route::get('/preguntas/edit/{id}', 'PreguntaController@edit');

Route::put('/preguntas/edit/{id}', [
  'uses' => 'PreguntaController@update',
  'as' => 'pregunta.update'
]);

//////////////////////////////////////////////////////////////////////////

Route::delete('respuestas/{id}', [
  'uses' => 'RespuestaController@destroy',
  'as' => 'respuesta.destroy'
]);

Route::get('/respuestas/edit/{id}', 'RespuestaController@edit');

Route::put('/Respuestas/edit/{id}', [
  'uses' => 'RespuestaController@update',
  'as' => 'respuesta.update'
]);


