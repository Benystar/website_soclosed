@extends('layouts.default')

@section('content')

@include('header')

<ol class="breadcrumb">
  <li class="inactive">Mon panier</li>
  <li class="active">Coordonnées</li>
  <li class="inactive">Paiement</li>
  <li class="inactive">Récapitulatif</li>
</ol>

<h4>Choisissez votre adresse de livraison</h4>
{{ Form::open(array('url' => 'payment','class' => 'form-horizontal')) }}		
<div class="col-md-12 address-area-active">
	<div class="radio">
	  <label>
	    <input type="radio" name="optionsRadios" id="optionsRadios1" value="delivery" onclick="delivery_checkbox_event();" checked>
	    Mon adresse postale :
	  </label>
	</div>
	<span class="spacer20">&nbsp;</span>
	<div class="form-group">
	    <label for="recipient" class="col-md-2 control-label">Destinataire</label>
	    <div class="col-md-5">
	      <p class="form-control-static">{{{ Auth::user()->name }}}</p>	
	      <input type="hidden" id="recipient" name="recipient" value="{{{ Auth::user()->name }}}">
	    </div>
  	</div>
	<div class="form-group">
	    <label for="address" class="col-md-2 control-label">Adresse</label>
	    <div class="col-md-5">
	    	<p class="form-control-static">{{{ Auth::user()->address }}}</p>	
	      	<input type="hidden" id="address" name="address" value="{{{ Auth::user()->address }}}">
	    </div>
  	</div>
  	<div class="form-group">
	    <label for="zip-code" class="col-md-2 control-label">Code postal</label>
	    <div class="col-md-5">
	    	<p class="form-control-static">{{{ Auth::user()->zip_code }}}</p>
	      	<input type="hidden" id="zip-code" name="zip-code" value="{{{ Auth::user()->zip_code }}}">
	    </div>
  	</div>
  	<div class="form-group">
	    <label for="city" class="col-md-2 control-label">Ville</label>
	    <div class="col-md-5">
	    	<p class="form-control-static">{{{ Auth::user()->city }}}</p>
	      	<input type="hidden" id="city" name="city" value="{{{ Auth::user()->city }}}">
	    </div>
  	</div>
</div>
<span class="spacer20">&nbsp;</span>
<div class="col-md-12 address-area-active">
	<div class="radio">
	  <label>
	    <input type="radio" name="optionsRadios" id="optionsRadios2" value="delivery-custom" onclick="delivery_checkbox_event();">
	   Une autre adresse :
	  </label>
	</div>
	<span class="spacer20">&nbsp;</span>
	<div class="form-group">
	    <label for="recipient-custom" class="col-md-2 control-label">Destinataire</label>
	    <div class="col-md-5">
	      <input type="text" class="form-control" id="recipient-custom" name="recipient-custom" disabled>
	    </div>
  	</div>
	<div class="form-group">
	    <label for="address-custom" class="col-md-2 control-label">Adresse</label>
	    <div class="col-md-5">
	      <input type="text" class="form-control" id="address-custom" name="address-custom" disabled>
	    </div>
  	</div>
  	<div class="form-group">
	    <label for="zip-code-custom" class="col-md-2 control-label">Code postal</label>
	    <div class="col-md-5">
	      <input type="text" class="form-control" id="zip-code-custom" name="zip-code-custom" disabled>
	    </div>
  	</div>
  	<div class="form-group">
	    <label for="city-custom" class="col-md-2 control-label">Ville</label>
	    <div class="col-md-5">
	      <input type="text" class="form-control" id="city-custom" name="city-custom" disabled>
	    </div>
  	</div>
</div>
<br />
<div class="col-md-2 col-md-offset-10 text-right">
	<button type="submit" class="btn btn-large btn-primary">Etape suivante&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></button>
</div>
{{ Form::close() }}
<span class="spacer20">&nbsp;</span>
@endsection