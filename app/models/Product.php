<?php
class Product extends Eloquent {
	use SoftDeletingTrait;
	public function category() {
		return $this->BelongsTo('Category');
	}
}