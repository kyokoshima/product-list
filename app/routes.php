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
	// return View::make('hello');
	return Redirect::to('NWEX');
});

Route::group(['prefix' => 'admin/NWEX', 'before' => 'auth.basic.plain'], function(){
	Route::get('/', 'admin\NWEX\ProductController@index');
	Route::post('upload', 'admin\NWEX\ProductController@upload');
	Route::resource('information', 'admin\NWEX\InformationController');
	Route::post('information', ['before' => 'csrf', 'uses' => 'admin\NWEX\InformationController@store']);
	Route::resource('recommend', 'admin\NWEX\RecommendController');
	
});

Route::group(['prefix' => 'NWEX'], function(){
	Route::resource('/', 'NWEX\ProductController');
	Route::get('search', 'NWEX\ProductController@search');
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

View::composer('admin.NWEX.index', function($view){
	$products = Product::withTrashed()->with('category')->get();
	$view
		->with('products', $products);
});

View::composer('admin.NWEX.information', function($view){
	$information = Information::all();
	$view->with('information', $information);
});

View::composer('NWEX.partials.information', function($view) {
	$information = Information::where('enabled', true)->get();
	$view->with('information', $information);
});

View::composer('NWEX.partials.categories', function($view){
	$categories = Category::all();
	$view->with('categories', $categories);
});