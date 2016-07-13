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

Route::get('index', 'TestController@index');
Route::get('about', 'TestController@about');
Route::get('contact', 'TestController@contact');

//Posts

Route::get('post_1_recursos_aprender_programacion', 'TestController@post1');
Route::get('post_2', 'TestController@post2');
Route::get('post_3', 'TestController@post3');
Route::get('post_4', 'TestController@post4');


