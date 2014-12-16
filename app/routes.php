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

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(['prefix' => 'admin/NWEX', 'before' => 'auth.basic.plain'], function(){
	Route::get('/', 'admin\NWEXController@index');
	Route::post('upload', 'admin\NWEXController@upload');
});

Route::group(['prefix' => 'NWEX'], function(){
	Route::resource('/', 'NWEX\ProductController');
});
// Route::controller('admin/NWEX', 'Admin\NWEXController');