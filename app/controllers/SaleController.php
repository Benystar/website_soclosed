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


		$inputs = Input::all();
		$validator = Validator::make($inputs, $rules);

		if ($validator->passes())
		{			
			$date = DateTime::createFromFormat('j-m-Y', Input::get('sale_date'));			
			
			$sale 				= new Sale;
			$sale->name 		= Input::get('sale_name');
			$sale->description  = Input::get('sale_description'); 			
			$sale->sale_date   	= $date->format('Y-m-d 00:00:00');
			$sale->id_user 		= Auth::user()->id;
			// Calcul totalement aléatoire de l'alias ---- On retire les blancs pour avoir une URL propre
			$sale->alias 		= str_random(6).str_random(9).'&'.str_replace(" ", "-", Input::get('sale_name'));	 
			$sale->save();			
			
			Session::put('current_sale', $sale);
						
			return Redirect::to('sale_add_item');				
		}

		// Something went wrong.
		//
		return Redirect::to('create_sale')->withInput($inputs)->withErrors($validator->getMessageBag());
		//
		
	}

	public function updateSale(){

		$rules = array(
			'sale_name'            	=> 'Required',			
			'sale_description'      => 'Required',
			'sale_date'             => 'Required'			
		);

		$inputs = Input::all();
		$validator = Validator::make($inputs, $rules);

		if ($validator->passes())
		{
			$sale = Sale::where('alias', '=', $inputs['alias'])->first();						
			$sale->description  = Input::get('sale_description'); 	

			$date = DateTime::createFromFormat('j-m-Y', Input::get('sale_date'));		
			$sale->sale_date   	= $date->format('Y-m-d 00:00:00');			
			 
			$sale->save();			
						
			return Redirect::to($inputs['alias']);				
		}

		return Redirect::to('create_sale')->withInput($inputs)->withErrors($validator->getMessageBag());		
	}

	public function addItem(){
		$file = Input::file('file'); // your file upload input field in the form should be named 'file'
		$sale_alias = Session::get('current_sale')->alias;
		$destinationPath = 'assets/uploads/'.$sale_alias;
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

		return Redirect::to('sale_add_item');
	}

	public function updateItem(){

		$file = Input::file('file'); // your file upload input field in the form should be named 'file'
		$sale_alias = Session::get('current_sale')->alias;
		$destinationPath = 'assets/uploads/'.$sale_alias;
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

		return Redirect::to('sale_update_item');
	}
}