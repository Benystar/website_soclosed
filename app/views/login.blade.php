@extends('layouts.default')

@section('content')

<div class="row">
    <div class="span12 text-center">
        <img src="{{{ asset('assets/img/logo_page_accueil.png' )}}}">
    </div>
</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">
    <div class="text-center span12">
        <div class="home-login-area">    
        {{ Form::open(array('url' => 'login')) }}

            <!-- check for login errors flash var -->
            @if (Session::has('login_errors'))
                <span class="error">Login ou mot de passe incorrecte.</span>
            @endif

            <!-- username field -->
            <p><b>Login</b></p>
            <p>{{ Form::text('username') }}</p>

            <!-- password field -->
            <p><b>Mot de passe</b></p>
            <p>{{ Form::password('password') }}</p>

            <!-- submit button -->
           <!-- <p>{{ Form::submit('Login') }}</p>-->
           <button type="submit" class="btn btn-large btn-inverse">Login</button>

        {{ Form::close() }}

        </div>
    </div>
</div>
<div class="row">&nbsp;</div>
<div class="row">
    <div class="span12 text-center">
        <p><a href="{{{ URL::to('login/fb') }}}"><img src="{{{ asset('assets/img/facebook/facebook.png') }}}" /></a></p>
        <p><a href="{{{ URL::to('subscribe') }}}">Pas encore inscrit?</a></p>
    </div>
</div>
@endsection
