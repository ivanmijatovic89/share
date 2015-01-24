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

Route::get('start', function()
{
	return View::make('start_share_screen');
});

Route::get('broadcast', array('as' => 'broadcast', function()
{
    return View::make('broadcast',['iframe'=>  Input::get('iframe')] );
}));