<?php
class Helpers {
	static function selectQty($name, $stock) {
		$max = 10;
		if ($stock < $max) {
			$max = $stock;
		}
		$list = array();
		for($i=1; $i<=$max; $i++) {
			$list[$i] = $i;
		}
		return Form::select($name, $list);
	}
}