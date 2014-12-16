<?php
namespace NWEX;
use \BaseController,\View,\Product,\Category;
class ProductController extends BaseController {
	protected $layout = 'layouts.master';
	function index(){
		$categories = Category::all()->toArray();
		$products = Product::orderBy('code', 'desc')->take(10)->get();
		return View::make('NWEX.index')->with(array('products'=> $products, 'categories' => $categories));
	}
}