<?php

class CartController extends BaseController {

	public function addItemToCart(){


		return Input::get('id');;
	}

	
	public function itemExists($item_id) {
	    $item = Item::where('id', '=', $item_id)->first();
	    
	    return $item != null;
	}
}