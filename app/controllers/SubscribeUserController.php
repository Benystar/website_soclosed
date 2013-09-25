<?php

class SubscribeUserController extends BaseController {

	public function insertUser(){

		// Declare the rules for the form validation.
		//
		$rules = array(
			'name'            		=> 'Required',			
			'username'              => 'Required|Email|Unique:users', //email
			'password'              => 'Required'			
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
			$user 				= new User;
			$user->name 		= Input::get('name');
			$user->username     = Input::get('username'); // email
			$user->password   	= crypt(Input::get('password'));
			$user->save();
			
		    $userdata = array(
		        'username'      => Input::get('username'),
		        'password'      => Input::get('password')
		    );

    
			if(Auth::attempt($userdata)) {
				return Redirect::to('home')->with('success', 'Compte créé avec succès!');
			}			
		}

		// Something went wrong.
		//
		return Redirect::to('subscribe')->withInput($inputs)->withErrors($validator->getMessageBag());
		//
		
	}

}