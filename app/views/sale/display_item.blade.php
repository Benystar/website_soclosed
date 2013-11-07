@extends('layouts.default')

@section('content')

<br />
<div class="row">
	<div class="col-md-12 text-right"><img src="{{{asset("assets/img/logo.png")}}}"></div>
</div>

<br />

<div class="row">
	<a href="">Revenir à la vente</a>
</div>
<div class="row" style="background-color: #fbf9fa;">	
	<div class="col-md-4 offset1 thumbnail" style="background-color: #ffffff;">
		<img src="{{{ asset($item->picture_url) }}}">
	</div>
	<div class="col-md-6">
		<div class="row">&nbsp;</div>
		<div class="row">
			<div class="col-md-3 item-name">{{{ $item->name }}}</div>
			<div class="col-md-3 text-right item-price">Prix : {{{ $item->price }}}.00€</div>
		</div>
		<div class="row">&nbsp;</div>		
		<div class="row">
			<div class="col-md-6">{{{ $item->description }}}</div>			
		</div>
		<div class="row">&nbsp;</div>
		<div class="row">
			<div class="col-md-6"><b>En stock</b></div>			
		</div>
		<div class="row">&nbsp;</div>
		<div class="row">
			<div class="col-md-6"><b>Quantité</b></div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<select class="form-control">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>			
		</div>
		<div class="row">&nbsp;</div>

		<form id="formzoom" name="formzoom" method="post" action="">
			<input type="hidden" id="form_id_item" name="ID_ITEM" value="{{{ $item->id }}}" />
		</form>

		<div class="row">
			<div class="col-md-6"> <button class="btn btn-large btn-inverse" type="button" onclick="addItemToCart();">Ajouter au panier</button></div>
		</div>
	</div>
</div>

@endsection