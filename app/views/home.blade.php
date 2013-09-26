@extends('layouts.default')

@section('content')

<div class="row">
	<div class="span12 text-right"><img src="{{{asset("assets/img/logo.png")}}}"></div>
</div>
<br />
<br />

<div class="row">
	<div class="span1">&nbsp;</div>
	<div class="span10 background-page">		
	    <div class="row">
		    <div class="span5">
			    <h3>Mes ventes en cours</h3>				
				@if($sales->count() <= 0)						  
					<p class="well">Vous n'avez pas de vente en cours.<br / >Cliquez ici pour créer une nouvelle ventes en quelques minutes</p>
				@else
					@foreach ($sales as $key => $val)
						<div class="row">
							<div class="span1"><img src="{{{asset("assets/img/panier-vente.png")}}}" class="img-polaroid"></div>
							<div class="span3">
								<strong>{{{ $val->name }}}</strong><br />
								<img src="{{{asset("assets/img/icon-chrono.png")}}}">&nbsp;{{{ $val->sale_date }}}
							</div>						
							<div class="span1"><a href="{{{ URL::to($val->alias) }}}">Consulter</a></div>
						</div>
						<br />
					@endforeach
				@endif				
				
				<h3>Mes ventes terminées</h3>
				<p class="well">Vous n'avez pas de vente terminée.</p>			
		    </div>
		    <div class="span3 offset1 well text-center">
			    <h4>Créer une vente</h4>
				<p>Envie de créer une nouvelle vente? C'est dans cette section que ça se passe</p>
				<p class="text-center">
					<a class="btn btn-primary" href="{{{ URL::to('create_sale') }}}">Créer »</a>
				</p>
		    </div>
	    </div>
	</div>
	<div class="span1">&nbsp;</div>	 
</div>
@endsection