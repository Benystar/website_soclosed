<?php

class OrderController extends BaseController {

	public function insertOrder(){
		
		$rules = array(
			'amount'              	=> 'Required',
			'id_sale'              	=> 'Required',
			'id_user'              	=> 'Required',
			'delivery_recipient'   	=> 'Required',
			'delivery_address'     	=> 'Required',
			'delivery_zip_code'    	=> 'Required',
			'delivery_city'        	=> 'Required'					
		);

		$inputs = Input::all();
		
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

		return Redirect::to('summary')->withInput($inputs)->withErrors($validator->getMessageBag());
	}
}