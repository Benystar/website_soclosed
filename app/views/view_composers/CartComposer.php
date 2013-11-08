<?php

class CartComposer {

	public function compose($view){

		$tabItems = array();

print_r($_SESSION['cart']);exit();

		if(isset($_SESSION['cart'])) {  		

		    foreach($_SESSION['cart'] as $item_id) { 
		    	$item = Item::where('id', '=', $item_id)->first();
		    	array_push($tabItems, $item);
			}			
		}

		$view->with('tabItems', $tabItems);		
	}
}

