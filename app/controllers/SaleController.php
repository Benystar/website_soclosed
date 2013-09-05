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
			 $date = DateTime::createFromFormat('j-m-Y', Input::get('sale_date'));
			
			// Create the sale.
			//
			$sale 				= new Sale;
			$sale->name 		= Input::get('sale_name');
			$sale->description  = Input::get('sale_description'); 			
			$sale->sale_date   	= $date->format('Y-m-d 00:00:00');			
			$sale->save();
					      
			return Redirect::to('create_sale_add_item')->with('sale', $inputs);				
		}

		// Something went wrong.
		//
		return Redirect::to('create_sale')->withInput($inputs)->withErrors($validator->getMessageBag());
		//
		
	}

	public function addItem(){

		return Redirect::to('create_sale_add_item');
	}

}