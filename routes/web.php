<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
	return view('welcome');
});

//Route::get('/addRole',function(){
//	auth()->user()->attachRole(1);
//});
//
//Route::get('/testRole',function(){
//	dd( auth()->user()->hasRole('owner') );
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
