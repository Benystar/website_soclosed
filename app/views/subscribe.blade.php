@extends('layouts.default')

@section('content')

@include('header')

@if (Session::has('login_errors'))
    <span class="error">Login ou mot de passe incorrect.</span>
@endif

<div class="row">
	<div class="col-md-3" style="margin-top: 20px;">
	{{ Form::open(array('action' => 'SubscribeUserController@insertUser')) }}


	<h2>Inscription</h2>
	<div class="form-title">Nom</div>
	<input class="form-control" type="text" name="name" /><br />
	<div class="form-title">Email</div>
	<input class="form-control" type="text" name="username" /><br />
	<div class="form-title">Password</div>
	<input class="form-control" type="text" name="password" /><br />
	<div class="text-right">
	<button type="submit" class="btn btn-large btn-primary">Valider</button>
	</div>

	{{ Form::close() }}
	</div>
</div>

@endsection