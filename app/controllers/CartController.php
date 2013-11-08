<?php

class CartController extends BaseController {

	public function addItemToCart(){

		//$_SESSION['cart'] = array();

		$item_id = Input::get('id');			
				
		if($item_id && !$this->itemExists($item_id)) {
		    die("Error. Product Doesn't Exist");
		}

		// test if session array exists
		$_SESSION['cart'] = array_key_exists('cart', $_SESSION)?$_SESSION['cart']:array();
		
		if (array_key_exists($item_id, $_SESSION['cart']))
			$_SESSION['cart'][''.$item_id.'']++;
		else
			$_SESSION['cart'][''.$item_id.''] = 1;
		

		/* Pour retouner un tableau de valeur */
		//return array( "name"=>"John","time"=>"2pm" );
		return $item_id;	
	}

	public function removeItemToCart(){

		$item_id = Input::get('id');
		
		if($item_id && !itemExists($item_id)) {
		    die("Error. Product Doesn't Exist");
		}

		$_SESSION['cart'][$item_id]--; //remove one from the quantity of the product with id $item_id
        if($_SESSION['cart'][$item_id] == 0)
        	unset($_SESSION['cart'][$item_id]);

        return $item_id;			
	}

	public function clearCart(){

		$_SESSION['cart'] = array();

		return "success";	
	}

	
	public function itemExists($item_id) {
	    $item = Item::where('id', '=', $item_id)->first();
	    
	    return $item != null;
	}

	public function insertItemID(){

	}

	public function updateItemQuantity(){

	}


}