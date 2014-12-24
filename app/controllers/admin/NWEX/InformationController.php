<?php
namespace Admin\NWEX;
use \Information,\View, \Input, \Session;
class InformationController extends \BaseController {
	protected $layout = 'layouts/admin';

	public function __construct(){
		$this->beforeFilter('csrf', ['on' => 'post']);
	}

	function index(){
		// $information = Information::all()->toArray();
		// return View::make('admin.NWEX.information', compact('information'));
		$newInfo = new Information;
		return View::make('admin.NWEX.information', compact('newInfo'));
	}

	function store(){

		$validator = \Validator::make(Input::all(), 
			['content' => 'required'],
			['content.required' => 'お知らせ内容を入力してください']
		);

		if ($validator->fails()){
			// dd($validator->messages());
			return \Redirect::back()->withErrors($validator);
		}

		$id = Input::get('id');
		$content = Input::get('content');
		$enabled = Input::get('enabled');

		if (empty($id)) {
			$info = Information::create(array('content' => $content, 'enabled' => $enabled));
			// $info = new Information;
			// $info->content = $content;
		} else {
			$info = Information::find($id);
			$info->content = $content;
			$info->enabled = $enabled;
		}
		// dd($info);
		$info->save();

		return View::make('admin.NWEX.information');
	}

	function destroy($id){
		$info = Information::find($id);
		var_dump($info);
		// dd($info);
		if ($info->delete()) {
			return \Redirect::to('admin/NWEX/information')->with('success', "お知らせ #${id} を削除しました");
			// Session::flash('success', "お知らせ #${id} を削除しました");
		} else {
			return \Redirect::to('admin/NWEX/information')->with('error', "お知らせ #${id} の削除に失敗しました");
		}
		return View::make('admin.NWEX.information');
	}
}