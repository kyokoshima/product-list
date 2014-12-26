<?php
namespace NWEX;
use \BaseController,\View,\Product,\Category, \Input,\Redirect;
class ProductController extends BaseController {
	protected $layout = 'layouts.master';
	function index(){

		// $categories = Category::getOptions();
		$products = Product::join('recommends', 'products.code', '=', 'recommends.product_id')
				->orderBy('recommends.sort_order', 'asc')->take(20)->get();
		return View::make('NWEX.index')
			->with(array('products'=> $products, 
				/*'categories' => $categories, */
				'selectedCategory' => 0));
	}

	function search(){
		if (!Input::has('q')) {
			return Redirect::back();
		}

		$word = Input::get('q');
		$wordArray = explode(' ', $word);

		$products = Product::where(function($query) use ($wordArray){
			foreach($wordArray as $w) {
				$query->orWhere('code', 'like', "%${w}%")
					->orWhere('name', 'like', "%${w}%");
			// $query->orWhereIn('code', $wordArray)
			// 		->orWhereIn('name', $wordArray);
			}
		})->get();

		$title = "キーワード「${word}」の検索結果";
		return View::make('NWEX.searchResult')
			->with('title', $title)
			->with('keyword', $word)
			->with('products', $products);

	}
}