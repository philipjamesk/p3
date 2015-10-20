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
    return view('index');
});

Route::get('/lorem', 'LoremController@getLorem');
Route::post('/lorem', 'LoremController@postLorem');

Route::get('/users', 'UsersController@getUsers');
Route::post('/users', 'UsersController@postUsers');
Route::get('/users/results', 'UsersController@getJson');

Route::get('/password', 'PasswordController@getPassword');
Route::post('/password', 'PasswordController@postPassword');

// views logs on local environment
if(App::environment('local')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
};