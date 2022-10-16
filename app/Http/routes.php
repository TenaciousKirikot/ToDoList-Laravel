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

Route::get('/', "WebsiteController@Homepage")->name('homepage');
Route::get('/add', function () { return view('add'); });
Route::post('/add-task', "WebsiteController@Add");

/*Route::get('/', "WebsiteController@Homepage")->name('homepage');
Route::get('/add-cheese', function () { return view('add-cheese'); });
Route::post('/delete-cheese', "WebsiteController@Delete");

Route::get('/',        function () { return view('title'); });
Route::get('/welcome', function () { return redirect('/'); });
Route::get('/title',   function () { return redirect('/'); });
Route::get('/add',   function () { return view('/add'); });*/