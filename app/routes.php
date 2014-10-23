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
	return View::make('lorem');
});

Route::post('/lorem', function()
{
	$parCnt = Input::get('parCnt');

	return View::make('lorem')
		->with('parCnt', $parCnt);
});

Route::get('/user', function()
{
	return View::make('user');
});

Route::post('/user', function()
{
	$usrCnt = Input::get('usrCnt');

	return View::make('user')
		->with('usrCnt', $usrCnt);
});