@extends('layouts.default')

@section('content')

@include('header')
<br />
<br />
<ol class="breadcrumb">
  <li class="active">Mon panier</li>
  <li class="inactive">Coordonnées</li>
  <li class="inactive">Paiement</li>
  <li class="inactive">Récapitulatif</li>
</ol>

@if(count($tabItems) > 0)
<div class="col-md-9">
	<table class="table table-hover">
	    <thead>
	      <tr>
	        <th width="15%">Photo</th>
	        <th width="25%">Nom</th>
	        <th width="49%">Description</th>
	        <th width="8%">Prix</th>
	        <th width="3%">&nbsp;</th>
	      </tr>
	    </thead>
	  	<tbody>	      
		   	@foreach($tabItems as $item)
		    <tr id="{{$item->id}}">
		      <td><img src="{{ asset($item->picture_url) }}" style="width: 90px; height: 115px;" /></td>  
		      <td>{{ $item->name }}</td>
		      <td>{{ $item->description }}</td>
		      <td>{{ $item->price }} &euro;</td>
		      <td>		          
		          <button type="button" class="btn btn-danger btn-xs" onclick="removeItemToCart({{ $item->id }});">X</button>
		      </td>
		    </tr> 
		  	@endforeach
	 	</tbody>  
	</table>
</div>
<div class="col-md-offset-1 col-md-2 info-cart"></div>
<br />
<div class="col-md-9">
	<table class="table">
		<tbody>
			<tr>
				<td class="text-right" width="89%"><strong>Montant total TTC :</strong></td>
				<td width="8%"><strong> {{ $total_amount }} &euro;</strong></td>
				<td width="3%"></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-9">
	<table class="table">
		<tbody>
			<tr>
				<td class="text-left" width="25%">
					<a class="button-small grey-sc rounded3" href="#"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;&nbsp;Continuer mon shopping</a>
				</td>
				<td width="50%"></td>
				<td class="text-right" width="25%">
					<a class="button-small purple-sc rounded3" href="{{{ URL::to('details')}}}">Passer votre commande&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endif

@endsection