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

// Route::resource('user','UserController');

Route::get('/', 'HomeController@showWelcome');
Route::get('/register', 'HomeController@showRegister');


Route::post('register/store','UserController@store');
Route::post('loginChk','UserController@login');
Route::get('logout','UserController@logout');
Route::get('profile/{id}','UserController@show');
Route::post('edit/{id}','UserController@edit');

Route::resource('owner','OwnerController');
Route::get('changepwd',array('uses'=>'OwnerController@changepassword','as'=>'owner.changepass'));
Route::resource('event', 'EventController');
Route::resource('myevent','MyEventController');
Route::resource('joinevent','JoinEventController');
Route::resource('promotion','PromotionController');
Route::resource('rate','RateSystemController');
Route::resource('achievement','AchievementController');

Route::get('test','HomeController@test');



