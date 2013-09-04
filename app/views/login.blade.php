@extends('layouts.default')

@section('content')

<div class="hero-unit">
        <h1>So Closed</h1>
        <p>Le site de vos ventes privées sociales</p> 
</div>

{{ Form::open(array('routes' => 'login')) }}

    <!-- check for login errors flash var -->
    @if (Session::has('login_errors'))
        <span class="error">Username or password incorrect.</span>
    @endif

    <!-- username field -->
    <p>{{ Form::label('username', 'Username') }}</p>
    <p>{{ Form::text('username') }}</p>

    <!-- password field -->
    <p>{{ Form::label('password', 'Password') }}</p>
    <p>{{ Form::password('password') }}</p>

    <!-- submit button -->
    <p>{{ Form::submit('Login') }}</p>

{{ Form::close() }}

<a href="{{{ URL::to('subscribe') }}}">Pas encore inscrit?</a>
@endsection
