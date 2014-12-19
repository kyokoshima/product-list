<?php
namespace Admin\NWEX;
use \Recommend,\Product,\View,\DB, \Input, \Redirect;
class RecommendController extends \BaseController {
	protected $layout = 'layouts/admin';
	function index(){
		// $recommends = Recommend::all();
		// $products = Product::whereNotExists(function($query){
		// 	$query->select(
		// 		DB::raw(1))->from('recommends')->whereRaw('products.id = recommends.id');
		// })->get();
		return View::make('admin.NWEX.recommend');
	}
	function store(){
		if (Input::has('productId')){
			$product_id = Input::get('productId');
			$recommend = Recommend::firstOrCreate(array('product_id' => $product_id));
		}
		return View::make('admin.NWEX.recommend');
	}
}