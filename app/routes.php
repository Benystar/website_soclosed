<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Appel direct depuis l'URL
/*Route::get('/', function() {
    return View::make('login');
});*/

// Appel direct depuis l'URL
Route::get('login', function() {
   
    return View::make('login');
});

// Appel depuis un formulaire
Route::post('login', function() {
    
    // get POST data
    $userdata = array(
        'username'      => Input::get('username'),
        'password'      => Input::get('password')
    );

    if ( Auth::attempt($userdata) )
    {        
        // we are now logged in, go to home

        //return Redirect::intended('home');
        return Redirect::to('home');
    }
    else
    {

        // auth failure! lets go back to the login
        return Redirect::to('login')
            ->with('login_errors', true);
        // pass any error notification you want
        // i like to do it this way :)
    }

    
});

Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('login');
});

Route::get('home', array('before' => 'auth', 'do' => function() {

    return View::make('home');
}));


Route::get('subscribe', function() {
   
    return View::make('subscribe');
});

// Mandatory when you call a controller from a form
Route::post('subscribe', 'SubscribeUserController@insertUser');