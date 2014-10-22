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
	return View::make('splash');
});

Route::get('/lorem', function()
{
	return View::make('lorem_get');
});

Route::post('/lorem', function()
{
	$parCnt = Input::get('parCnt');

	return View::make('lorem_post')
		->with('parCnt', $parCnt);
});

Route::get('/user', function()
{
	return View::make('user_get');
});

Route::post('/user', function()
{
	return View::make('user_post');
});