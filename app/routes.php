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

Route::get('/', 'HomeController@showWelcome');
Route::post('register/store','UserController@store');
Route::post('login','UserController@login');
Route::get('logout','UserController@logout');
Route::get('editprofile','UserController@viewProfile');





