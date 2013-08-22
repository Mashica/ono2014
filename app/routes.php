<?php

// Home
Route::get('/', 'UserController@showIndex');

// Usuarios
Route::get('ciclistas', array('as'=>'u', 'uses' => 'UserController@showUsers'));
Route::get('ciclistas/new', array('as'=>'u_new', 'uses' => 'UserController@newUser'));
Route::post('ciclistas/new', array('before' => 'csrf', 'as'=>'u_create', 'uses' => 'UserController@createUser'));
Route::get('ciclistas/{id}', array('as'=>'u_show', 'uses' => 'UserController@showUser'));
Route::get('ciclistas/{id}/edit', array('as'=>'u_edit', 'uses' => 'UserController@editUser'));
//Route::post('ciclistas/{id}', array('as'=>'u_update', 'uses' => 'UserController@updateUser'));
Route::post('ciclistas/{id}', 'UserController@updateUser');
Route::get('ciclistas/{id}/delete', array('as'=>'u_delete', 'uses' => 'UserController@destroyUser'));

// carreras
Route::get('carreras', array('as'=>'races', 'uses' => 'RaceController@index'));
Route::get('carreras/new', array('as'=>'race_new', 'uses' => 'RaceController@create'));
Route::post('carreras/new', array('as'=>'race_store', 'uses' => 'RaceController@store'));
Route::get('carreras/{id}', array('as'=>'race_show', 'uses' => 'RaceController@show'));
Route::get('carreras/{id}/edit', array('as'=>'race_edit', 'uses' => 'RaceController@edit'));
Route::post('carreras/{id}', 'RaceController@update');
Route::get('carreras/{id}/delete', array('as'=>'race_delete', 'uses' => 'RaceController@destroy'));






Route::get('login', function()
{	return View::make('login');
});

Route::get('/logout', function()
{	Auth::logout();
	return Redirect::to('/');
});









//Route::controller('users', 'UserController');


Route::get('/environment', array('as' => 'env' , function()
{
	$environment = App::environment();
	return $environment;
}));




Event::listen('laravel.query', function($sql){
	var_dump($sql);
});

