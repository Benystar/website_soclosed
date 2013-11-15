<?php

class HelperClass {

	public static function convertDate($sale_date){		

		return strftime ('%d/%m/%Y', strtotime($sale_date));
		
	}

	public static function getOrderInformations($post_informations){

		$tabInfoOrder = array();

		if ($post_informations['optionsRadios'] == "delivery"){
			
	        $tabInfoOrder['recipient'] 	= $post_informations['recipient'];
	        $tabInfoOrder['address'] 	= $post_informations['address'];
	        $tabInfoOrder['zip-code'] 	= $post_informations['zip-code'];
	        $tabInfoOrder['city'] 		= $post_informations['city'];

    	}elseif($post_informations['optionsRadios'] == "delivery-custom"){

    		$tabInfoOrder['recipient'] 	= $post_informations['recipient-custom'];
	        $tabInfoOrder['address'] 	= $post_informations['address-custom'];
	        $tabInfoOrder['zip-code'] 	= $post_informations['zip-code-custom'];
	        $tabInfoOrder['city'] 		= $post_informations['city-custom'];
    	}

    	return $tabInfoOrder;
	}
}

?>