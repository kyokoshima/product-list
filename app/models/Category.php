<?php
class Category extends Eloquent {

	static function getOptions() {
		$data = self::all();
		$options = array();
		foreach($data as $category) {
			$options[$category->id] = $category->name_ja;
		}
		return $options;
	}	
}