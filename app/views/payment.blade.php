@extends('layouts.default')

@section('content')

@include('header')

<ol class="breadcrumb">
  <li class="inactive">Mon panier</li>
  <li class="inactive">Coordonnées</li>
  <li class="active">Paiement</li>
  <li class="inactive">Récapitulatif</li>
</ol>
<span class="spacer20">&nbsp;</span>
<div class="col-md-12 text-center">
	 <img src="{{{ asset('assets/img/paiement_temp.jpg' )}}}" />
</div>
<div class="col-md-12 text-center">
	<a class="button-small grey-sc rounded3" href="{{{ URL::to('handle-order')}}}">Passer cette étape fictive</a>
</div>

@endsection