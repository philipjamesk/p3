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


Route::get('/', 'MyController@getIndex');

Route::get('/lorem', 'MyController@getLorem');
Route::post('/lorem', 'MyController@postLorem');

Route::get('/users', 'MyController@getUsers');
Route::post('/users', 'MyController@postUsers');

Route::get('/password', 'MyController@getPassword');
Route::post('/password', 'MyController@postPassword');

// views logs on local environment
if(App::environment('local')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
};