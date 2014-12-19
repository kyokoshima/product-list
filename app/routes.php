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
	Route::get('/', 'admin\NWEX\ProductController@index');
	Route::post('upload', 'admin\NWEX\ProductController@upload');
	Route::resource('information', 'admin\NWEX\InformationController');
	Route::resource('recommend', 'admin\NWEX\RecommendController');
	
});

Route::group(['prefix' => 'NWEX'], function(){
	Route::resource('/', 'NWEX\ProductController');
	Route::resource('category', 'NWEX\CategoryController');
	Route::get('legal', function(){
		return View::make('NWEX.legal');
	});
});

Route::get('cart/', 'CartController@index');

View::composer('admin.NWEX.recommend', function($view){
	$view
		->with('recommends', Recommend::with('Product')->get())
		->with('products', Product::whereNotExists(function($query){
			$query->select(
				DB::raw(1))->from('recommends')->whereRaw('products.id = recommends.id');
		})->get());
});

