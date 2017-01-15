<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/character', function() {
	return view('character-page');
});

// Route::get('battle', function() {
// 	return view('battle-page');
// });