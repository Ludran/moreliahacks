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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/original', function () {
    return view('inicio-original');
});

Route::get('/twitter', function()
{
    return Twitter::postTweet(['status' => 'morelia', 'format' => 'json']);
});