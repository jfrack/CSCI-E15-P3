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
	$usrCnt = Input::get('usrCnt');
	$usrid_cb = Input::get('usrid_cb');
	$pswd_cb = Input::get('pswd_cb');
	$email_cb = Input::get('email_cb');
	$birth_cb = Input::get('birth_cb');
	$profile_cb = Input::get('profile_cb');
	$secimg_cb = Input::get('secimg_cb');

	return View::make('user_post')
		->with('usrCnt', $usrCnt)
		->with('usrid_cb', $usrid_cb)
		->with('pswd_cb', $pswd_cb)
		->with('email_cb', $email_cb)
		->with('birth_cb', $birth_cb)
		->with('profile_cb', $profile_cb)
		->with('secimg_cb', $secimg_cb);
});