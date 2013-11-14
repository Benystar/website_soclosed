<?php

class CartComposer {

	public function compose($view){

		$tabItems = array();
		$total_amount = 0;

		if(isset($_SESSION['cart'])) {  		

		    foreach($_SESSION['cart'] as $item_id => $quantity) {
		    	if($item_id != "" && $item_id != null) {
			    	$item = Item::where('id', '=', $item_id)->first();
			    	array_push($tabItems, $item);

			    	$total_amount = $total_amount + $item->price;
		    	}
			}

		}

		$view->with('tabItems', $tabItems)
			 ->with('total_amount', $total_amount);		
	}
}

