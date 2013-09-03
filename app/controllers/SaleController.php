<?php

class SaleController extends BaseController {

	public function insertSale(){

		// Declare the rules for the form validation.
		//
		$rules = array(
			'sale_name'            	=> 'Required',			
			'sale_description'      => 'Required',
			'sale_date'             => 'Required'			
		);

		// Get all the inputs.
		//
		$inputs = Input::all();

		// Validate the inputs.
		//
		$validator = Validator::make($inputs, $rules);

		// Check if the form validates with success.
		//
		if ($validator->passes())
		{
			// Create the user.
			//
			$sale 				= new Sale;
			$sale->name 		= Input::get('sale_name');
			$sale->description  = Input::get('sale_description'); 
			$sale->sale_date   	= Input::get('sale_date'));
			$sale->save();
			
		    $saledata = array(
		        'sale_name'      		=> Input::get('sale_name');
		        'sale_description'      => Input::get('sale_description'); 
		        'sale_date'				=> Input::get('sale_date');
		    );

    
			if(Auth::attempt($saledata)) {
				return Redirect::to('sale/add_item');
			}			
		}

		// Something went wrong.
		//
		return Redirect::to('sale_create')->withInput($inputs)->withErrors($validator->getMessageBag());
		//
		
	}

}