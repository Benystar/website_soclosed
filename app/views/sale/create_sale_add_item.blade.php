@extends('layouts.default')

@section('content')

<?php
	$get_sale = Session::get('sale');		
?>

<div class="container-fluid">
    <div class="row-fluid">
    	<div class="span9">
    	{{ Form::open(array('action' => 'SaleController@addItem')) }}

			<div class="form-title"><h2>J'ajoute mes articles</h2></div>
			<div class="form-title">Le nom de mon article</div>
			<input class="form-field" type="text" name="item_name" /><br />
			<div class="form-title">La description de mon article</div>
			<input class="form-field" type="text" name="item_description" /><br />
			<div class="form-title">Le prix de mon article</div>
			<input class="form-field" type="text" name="item_price" /><br />

			<div class="submit-container">
				<input class="submit-button" type="submit" value="Validez" />
			</div>

		{{ Form::close() }}
    	</div>
    	<div class="span3">
   		<div class="">
   			<h4>Ma vente</h4>
   			<p>Nom : {{{ Input::old('sale_name') }}}</p>
   			<p>Description : {{{ $get_sale['sale_description'] }}}</p>
   			<p>Date de fin : {{{ $get_sale['sale_date'] }}}</p>
   		</div>
    	</div>
    </div>
</div>


<div class="row">
    <div class="span2"><h2>J'ajoute mes articles</h2></div>
    <div class="span10">
    	<p>Nom</p>
    	<p>Description</p>
    	<p>Prix</p>
    </div>
</div>
<div class="row">
    <div class="span2"><h2>J'ajoute mes articles</h2></div>
    <div class="span10">
    	<p>Nom</p>
    	<p>Description</p>
    	<p>Prix</p>
    </div>
</div>

@endsection