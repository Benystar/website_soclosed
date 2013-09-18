<?php

class Sale extends Eloquent{
	public function items(){
		return $this->hasMany('Item', 'id_sale');
	}
}