@extends('layouts.default')

@section('content')

<!--Form::open('user/profile', 'POST', array('class' => 'awesome'));-->

@if (Session::has('login_errors'))
    <span class="error">Login ou mot de passe incorrect.</span>
@endif

{{ Form::open(array('action' => 'SubscribeUserController@insertUser')) }}


<div class="form-title"><h2>Inscription</h2></div>
<div class="form-title">Nom</div>
<input class="form-field" type="text" name="name" /><br />
<div class="form-title">Email</div>
<input class="form-field" type="text" name="username" /><br />
<div class="form-title">Password</div>
<input class="form-field" type="text" name="password" /><br />
<div class="submit-container">
<input class="submit-button" type="submit" value="Validez" />
</div>

{{ Form::close() }}

@endsection