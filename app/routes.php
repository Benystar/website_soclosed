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
Route::get('/', function() {
   
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
        return Redirect::to('home');
    }
    else
    {
        // auth failure! lets go back to the login
        return Redirect::to('login')
            ->with('login_errors', true);
    }

    
});

Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('/');
});

Route::get('home', array('before' => 'auth', 'do' => function() {

    $sales = Sale::where('id_user', '=', Auth::user()->id)->get();

    // Quand on passe un paramètre "with" à une View, on peut le récupérer tel quel sur la vue
    return View::make('home')->with('sales', $sales);
}));


Route::get('subscribe', function() {
   
    return View::make('subscribe');
});

Route::get('create_sale', array('before' => 'auth', 'do' => function() {
   
    return View::make('sale/create_sale_describe');
}));

Route::get('create_sale_add_item', array('before' => 'auth', 'do' => function() {
   
    return View::make('sale/create_sale_add_item');
}));

Route::get('create_sale_share', array('before' => 'auth', 'do' => function() {
   
    return View::make('sale/create_sale_share');
}));

// Route pour le login via Facebook----------------------------------
Route::get('login/fb', function() {
    $facebook = new Facebook(Config::get('facebook'));
    $params = array(
        'redirect_uri' => url('/login/fb/callback'),
        'scope' => 'email',
    );
    return Redirect::to($facebook->getLoginUrl($params));
});

Route::get('login/fb/callback', function() {
    $code = Input::get('code');
    if (strlen($code) == 0)
        return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');
 
    $facebook = new Facebook(Config::get('facebook'));
    $uid = $facebook->getUser();
 
    if ($uid == 0)
         return Redirect::to('/')->with('message', 'There was an error');
 
    $me = $facebook->api('/me'); 
    $profile = Profile::whereUid($uid)->first();

    if (empty($profile)) {
 
        $user           = new User;
        $user->name     = $me['first_name'].' '.$me['last_name'];
        $user->email    = $me['email'];
        $user->photo    = 'https://graph.facebook.com/'.$me['username'].'/picture?type=large'; 
        $user->save();
 
        $profile           = new Profile();
        $profile->uid       = $uid;
        $profile->username  = $me['username'];
        $profile = $user->profiles()->save($profile);
    }
 
    $profile->access_token = $facebook->getAccessToken();
    $profile->save();
 
    $user = $profile->user;
 
    Auth::login($user);
 
    return Redirect::to('home')->with('message', 'Logged in with Facebook');
});

Route::get('admin', array('before' => 'auth_admin', 'do' => function() {

           return "bien joué";
          
}));

Route::get('display_item/{id}', array('before' => 'auth', 'do' => function($id) {

        $item = Item::where('id', '=', $id)->first();

        return View::make('sale/display_item')->with('item', $item);          
}));

Route::get('/{alias}/{create?}', array('before' => 'auth', 'do' => function($alias,$create=null) {

    // Comme il est certain qu'il n'y ait qu'un seul résultat, on utilise first()
    $sale = Sale::where('alias', '=', $alias)->with('items')->first();

    if($sale != null) {
        // La chaine 21&4 est une chaine prise au hasard qui permet de détecter que l'on vient d'une page de création de vente
        if($create != "21&4"){            
            return View::make('sale/display_sale')->with('sale', $sale);
        }else{    
            Session::flash('success', 'Vente créée avec succès!');        
            return View::make('sale/display_sale')->with('sale', $sale);
        }
    }else{
        return Redirect::to('/');
    }        
}));




/***********************************************
    Routes vers les contrôleurs
************************************************/
// Mandatory when you call a controller from a form

Route::post('subscribe', 'SubscribeUserController@insertUser');
Route::post('create_sale', 'SaleController@insertSale');
Route::post('create_sale_add_item', 'SaleController@addItem');


