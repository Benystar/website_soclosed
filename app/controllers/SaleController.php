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
			
			Session::put('current_sale', $sale);
						
			return Redirect::to('create_sale_add_item');				
		}

		// Something went wrong.
		//
		return Redirect::to('create_sale')->withInput($inputs)->withErrors($validator->getMessageBag());
		//
		
	}

	public function addItem(){
		$file = Input::file('file'); // your file upload input field in the form should be named 'file'
		$destinationPath = 'uploads/'.str_random(8);
		$filename = $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
		$uploadSuccess = Input::file('file')->move($destinationPath, $filename);		

		$item 				= new Item();
		$item->name     	= Input::get('item_name');
		$item->description  = Input::get('item_description');  
		$item->price     	= Input::get('item_price');  
		$item->picture_url  = $destinationPath ."/". $filename;
		$item->id_sale  	= Session::get('current_sale')->id;
		$item->save();

		return Redirect::to('create_sale_add_item');
	}

}