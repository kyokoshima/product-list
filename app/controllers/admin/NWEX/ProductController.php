<?php
namespace Admin\NWEX;
use \View;
use \Product;
use \Input;
use \Session;
class ProductController extends \BaseController {

	protected $layout = 'layouts/admin';
	public function index(){
		$products = Product::with('category')->get();
		return View::make('admin.NWEX.index')->with('products', $products);
		// $this->layout->content = View::make('NWEX.index', compact($products));
		// return View::
		// $this->layout->with('products', $products);
	}

	public function upload() {
		$errorMessages = null;
		$updated = array();
		if (Input::hasFile('csv')) {
			$csv = Input::file('csv');
			// var_dump($csv);
			if (($fh = fopen($csv->getRealPath(), 'r')) !== false) {
				$rowIndex = 0;
				while(($data = fgetcsv($fh)) !== false) {
					$rowIndex++;
					if (count($data) != 3) {
						$errorMessages[] = "${rowIndex}行目が不正です";
						continue;
					} else {
						$code = $data[0];
						$price = $data[1];
						$stock = $data[2];
						$product = Product::where('code',$code)->first();
						// var_dump($product);
						if (!empty($product)) {
							// var_dump (array((int)$price,(int)$product->price));
							// var_dump ((int)$price != (int)$product->price);
							$changed = false;
							if (!empty($price) and ((int)$price != (int)$product->price)) {
								$product->price = $price;
								$changed = true;
							}
							if (!empty($stock) and ((int)$stock != (int)$product->stock)) {
								$product->stock = $stock;
								$changed = true;
							}
							// $saveResult = $product->save();
							// echo "****** changed ${code} ";
							// var_dump($changed);
							if ($changed) {
								$product->save();
								$updated[] = $product->code;
							}
						}
					}
					// var_dump($product);
				}
			}
		}
		// $result = $this->getIndex();
		// Session::flush('errorMessages', $errorMessages);
		Session::flash('errorMessages', $errorMessages);

		if (!empty($updated)) {
			$updated_count = count($updated);
			Session::flash('success', "${updated_count}件更新されました");
		} else {
			Session::flush();
		}
		$products = Product::all();
		return View::make('admin.NWEX.index')
				->with('products', $products)
				->with('updated', $updated);
		// return $result->with('updated', $updated);
	}
}
