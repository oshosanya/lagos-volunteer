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

Route::get('/', function(){
 return View::make('home');
});

Route::get('/about', function(){
 return View::make('about');
});

Route::get('/contact', function(){
 return View::make('contact');
});

/*Route::get('/register', function(){
	return View::make('register');
});*/

Route::get('/test', function(){
 $id = Auth::id();
 return $id;
});

Route::get('user/{id}', function($id){
 return "User #$id";
});

//Resource Controllers
Route::resource('applications', 'ApplicationController');
Route::post('/search', array('uses' => 'SearchController@executeSearch'));
Route::resource('login', 'UserController');
Route::resource('portal', 'PortalController');
Route::post('/authuser', array('uses' => 'UserController@loginUser'));
Route::post('/authuser/check', array('uses' => 'UserController@checkLogin'));


?>