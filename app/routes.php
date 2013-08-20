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


Route::controller('account','AccountController' );
//Route::get('/', 'HomeController@showIndex');

Route::get('/test', function(){
	$user = User::find(1);
	var_dump($user->username);
    //return 'Hello World';
    });


Route::get('/', function()
{
    return View::make('connexion');
});

Route::get('/', array('before' => 'auth', function()
{
    echo 'Maintenant vous êtes sur le site '.Auth::user()->username;
}));
 
Route::get('login', array('as' => 'login', 'before' => 'guest', function()
{
    return View::make('connexion');
}));

Route::post('connexion', function()
{
    $nom = Input::get('nom');
    $passe = Input::get('password');
 
    if(Auth::attempt(array('username' => $nom, 'password' => $passe)))
        echo 'Vous êtes maintenant connecté '.Auth::user()->username;
    else
        //echo 'Echec de la connexion';
        return View::make('connexion');
});


