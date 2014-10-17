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
	return View::make('lorem_post');
});

Route::get('/user', function()
{
	//$input = Input::all();
	//echo Pre::render($input, '$input');
	return View::make('user_get');
});

Route::post('/user', function()
{
	return View::make('user_post');
});