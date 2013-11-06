@extends('layouts.default')

@section('content')

@include('header')
<br />
<br />

<div class="row">	
	<div class="col-md-10 col-md-offset-1 background-page">		
	    <div class="row">
		    <div class="col-md-8">
			    <h3><b>Mes ventes en cours</b></h3>
			    <span class="straight-line"></span>			
				@if($sales->count() <= 0)						  
					<p class="well">Vous n'avez pas de vente en cours.<br / >Cliquez ici pour créer une nouvelle ventes en quelques minutes</p>
				@else
					@foreach ($sales as $key => $val)						
						<div class="row">
							<div class="col-md-2"><img src="{{{asset("assets/img/panier-vente.png")}}}" class="img-polaroid"></div>
							<div class="col-md-6">
								<strong>{{{ $val->name }}}</strong><br />
								<img src="{{{asset("assets/img/icon-chrono.png")}}}">&nbsp; {{ HelperClass::convertDate($val->sale_date) }}
							</div>						
							<div class="col-md-2"><a href="{{{ URL::to($val->alias) }}}">Consulter</a></div>
						</div>
						<br />
					@endforeach
				@endif				
				
				<h3><b>Mes ventes terminées</b></h3>
				<span class="straight-line"></span>	
				<p class="well">Vous n'avez pas de vente terminée.</p>			
		    </div>
		    <div class="col-md-3 well text-center" style="margin-top: 20px;margin-left: 20px;" >
			    <h4>Créer une vente</h4>
				<p>Envie de créer une nouvelle vente? C'est dans cette section que ça se passe</p>
				<p class="text-center">
					<a class="btn btn-primary" href="{{{ URL::to('create_sale') }}}">Créer »</a>
				</p>
		    </div>
	    </div>
	</div>		 
</div>

@endsection