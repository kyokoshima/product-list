<?php
namespace NWEX;
use \BaseController,\View,\Product;
class ProductController extends BaseController {
	protected $layout = 'layouts.master';
	function index(){
		$products = Product::all();
		return View::make('NWEX.index')->with('products', $products);
	}
}