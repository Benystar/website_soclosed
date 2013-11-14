@extends('layouts.default')

@section('content')

@include('header')
<br />
<br />

<div class="row">	
	<div class="col-md-10">		
	    <div class="row">
		    <div class="col-md-8">
			    <div class="col-md-12 header-sale-section">Mes ventes en cours</div>
			    @if($sales->count() <= 0)						  
					<p>Vous n'avez pas de vente en cours.<br / >Cliquez ici pour créer une nouvelle ventes en quelques minutes</p>
				@else
					@foreach ($sales as $key => $val)						
						<div class="row">
							<div class="col-md-2"><img src="{{{asset("assets/img/panier-vente.png")}}}" class="img-polaroid"></div>
							<div class="col-md-6">
								<p><strong>{{{ $val->name }}}</strong></p>
								<p><img src="{{{asset("assets/img/icon-chrono.png")}}}">&nbsp; {{ HelperClass::convertDate($val->sale_date) }}</p>
							</div>						
							<div class="col-md-2"><a href="{{{ URL::to($val->alias) }}}">Consulter</a></div>
						</div>
						<div class="col-md-12 spacer20">&nbsp;</div>
					@endforeach
				@endif				
				<div class="col-md-12 spacer30">&nbsp;</div>
				<div class="col-md-12 header-sale-section">Mes ventes terminées</div>
				<p>Vous n'avez pas de vente terminée.</p>			
		    </div>
		    <div class="col-md-3 col-md-offset-1 create-sale text-center">
		    	<br />
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