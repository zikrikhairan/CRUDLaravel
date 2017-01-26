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
Route::get('login', array('as'=>'masuk','uses'=> 'UserController@login'))->before('guest');
Route::post('authenticate','UserController@authenticate')->before('guest');
Route::group(array('before'=>'auth'),function(){
	Route::get('homepage','UserController@index');
	Route::get('create', 'SeminarController@create');
	Route::post('store', 'SeminarController@store');
	Route::get('logout','UserController@logout');
	ROute::get('data/index','DataController@index');
	Route::get('data/show/{id}','DataController@show');
	Route::get('data/{id}/edit','DataController@edit');
	Route::post('data/update/{id}','DataController@update');
	Route::get('data/{id}','DataController@destroy');
});
