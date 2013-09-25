@extends('layouts.default')

@section('content')


<div class="row">
	<div class="span12 text-right"><img src="{{{asset("assets/img/logo.png")}}}"></div>
</div>

<br />
<br />
<div class="row">
	<a href="{{{ URL::to(Session::get('current_sale')->alias) }}}">Revenir à la vente</a>
</div>
<div class="row" style="background-color: #fbf9fa;">	
	<div class="span4 offset1 thumbnail" style="background-color: #ffffff;">
		<img src="{{{ asset($item->picture_url) }}}">
	</div>
	<div class="span6">
		<div class="row">&nbsp;</div>
		<div class="row">
			<div class="span3 item-name">{{{ $item->name }}}</div>
			<div class="span3 text-right item-price">Prix : {{{ $item->price }}}.00€</div>
		</div>
		<div class="row">&nbsp;</div>		
		<div class="row">
			<div class="span6">{{{ $item->description }}}</div>			
		</div>
		<div class="row">&nbsp;</div>
		<div class="row">
			<div class="span6"><b>En stock</b></div>			
		</div>
		<div class="row">&nbsp;</div>
		<div class="row">
			<div class="span6"><b>Quantité</b></div>
		</div>
		<div class="row">
			<div class="span6">
				<select>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>			
		</div>
		<div class="row">&nbsp;</div>
		<div class="row">
			<div class="span6"> <button class="btn btn-large btn-inverse" type="button">Ajouter au panier</button></div>
		</div>
	</div>
</div>

@endsection