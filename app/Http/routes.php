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
  return view('welcome');
});


Route::get('/loremipsum', function () {
  return view('lorem');
});


Route::get('/bootstrap', function () {
  return view('bootstrap');
});

Route::get('/faker', function () {
  return view('faker');
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');