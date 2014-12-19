<?php
class Recommend extends Eloquent {
	protected $guarded = array('id');
	public function product(){
		return $this->belongsTo('Product');
	}
}