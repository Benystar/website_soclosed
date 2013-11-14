@extends('layouts.default')

@section('content')
<br />
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <img src="{{{ asset('assets/img/logo_page_accueil.png' )}}}" />
    </div>
</div>

<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">
    <div class="col-md-4 text-center col-md-offset-4">
        <div class="home-login-area">
            {{ Form::open(array('url' => 'login')) }}
                <!-- check for login errors flash var -->

                @if (Session::has('login_errors'))
                 <span class="error">Login ou mot de passe incorrect.</span>
                @endif
                <!-- username field -->
                <p><b>Login</b></p>
                <p>
                    <input class="form-control" type="text" name="username" id="username" value="{{ Input::old('username') }}" />
                </p>
                <!-- password field -->
                <p><b>Mot de passe</b></p>
                <p>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Input::old('password') }}" />
                </p>
                <!-- submit button -->
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