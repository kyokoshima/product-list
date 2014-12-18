<?php
namespace NWEX;
use \BaseController,\Product,\Category,\View;
class CategoryController extends BaseController {
	protected $layout = 'layouts.master';

	function index() {}
	function show($id){
		$categories = Category::getOptions();
		$products = Product::where('category_id', $id)->get();
		$selectedCategory = $id;
		if(empty($products)) {
			$selectedCategory = 0;
		}
		return View::make('NWEX.category')
			->with(
					array('products' => $products, 
							'categories' => $categories,
							'selectedCategory' => $selectedCategory));
	}
}