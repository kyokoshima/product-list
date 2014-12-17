<?php
class Category extends Eloquent {

	static function getOptions() {
		$data = self::all();
		$options = array(0 => '▼ カテゴリを選択できます');
		foreach($data as $category) {
			$options[$category->id] = $category->name_ja;
		}
		return $options;
	}	
}