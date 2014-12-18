<?php
namespace Admin\NWEX;
use \Information,\View;
class InformationController extends \BaseController {
	protected $layout = 'layouts/admin';

	function index(){
		$information = Information::all();
		return View::make('admin.NWEX.information', compact($information));
	}
}