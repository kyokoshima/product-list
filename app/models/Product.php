<?php
class Product extends Eloquent {
	public function category() {
		return $this->BelongsTo('Category');
	}
}