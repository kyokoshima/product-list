<?php
namespace NWEX;
use \BaseController,\View,\Product,\Category;
class ProductController extends BaseController {
	protected $layout = 'layouts.master';
	function index(){
		// $categories_data = Category::all();
		// $categories = array();
		// foreach($categories_data as $category) {
		// 	$categories[$category->id] = $category->name_ja;
		// }
		$categories = Category::getOptions();
		$products = Product::orderBy('stock', 'desc')->take(20)->get();
		return View::make('NWEX.index')
			->with(array('products'=> $products, 'categories' => $categories,
				'selectedCategory' => 0));
	}
}