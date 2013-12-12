@extends('layouts.default')

@section('content')

<div class="row index-font-row" style="height:405px;">
    <div class="col-md-5 col-md-offset-1 text-center index-background-area-dark" style="height:405px;">          
             <div class="col-md-12 index-text-h1">La manière la plus facile de vendre tous vos articles</div>
             <div class="col-md-12 index-text-h2">CR&Eacute;ER ET ORGANISER VOTRE VENTE PRIV&Eacute;E <br /> N'A JAMAIS &Eacute;T&Eacute; AUSSI SIMPLE !</div>
             <div class="col-md-12 index-button"><button type="" class="btn btn-lg btn-primary btn-block">Organiser une vente</button></div>
    </div>
    <div class="col-md-5 col-md-offset-1" style="padding-top:60px;">
         <iframe width="460" height="258" src="//www.youtube.com/embed/M0k3giXi8eM" frameborder="0" allowfullscreen></iframe>     
    </div>
</div>
<div class="row" style="margin-top:40px;">
    <div class="col-md-4 index-step text-center">1. Je crée</div>
    <div class="col-md-4 index-step text-center">2. Je diffuse</div>
    <div class="col-md-4 index-step text-center">3. Je gère</div>
</div>


<div class="row">
    <div class="col-md-4 text-center col-md-offset-4">
        <div class="home-login-area">
            {{ Form::open(array('url' => 'login')) }}
               

                @if (Session::has('login_errors'))
                 <span class="error">Login ou mot de passe incorrect.</span>
                @endif
                
                <p><b>Login</b></p>
                <p>
                    <input class="form-control" type="text" name="username" id="username" value="{{ Input::old('username') }}" />
                </p>
             
                <p><b>Mot de passe</b></p>
                <p>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Input::old('password') }}" />
                </p>
              
                <button type="submit" class="btn btn-large btn-primary">Se connecter</button>
            {{ Form::close() }}
        </div>
    </div>
</div>
<div class="row">&nbsp;</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
        <p><a href="{{{ URL::to('login/fb') }}}"><img src="{{{ asset('assets/img/facebook/facebook.png') }}}" /></a></p>
        <p><a href="{{{ URL::to('subscribe') }}}">Pas encore inscrit?</a></p>
    </div>
</div>

@endsection