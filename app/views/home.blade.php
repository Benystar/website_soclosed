@extends('layouts.default')

@section('content')

<div class="content">    
	<div class="container-fluid">
	    <div class="row-fluid">
		    <div class="span7">
			    <h3>Mes ventes en cours</h3>				
				@if($sales->count() <= 0)						  
					<p class="well">Vous n'avez pas de vente en cours.<br / >Cliquez ici pour créer une nouvelle ventes en quelques minutes</p>
				@else
					@foreach ($sales as $key => $val)
						test
					@endforeach
				@endif				
				
				<h3>Mes ventes terminées</h3>
				<p class="well">Vous n'avez pas de vente terminées.</p>			
		    </div>
		    <div class="span3 offset2 well text-right">
			    <h4>Créer une vente</h4>
				<p>Envie de créer une nouvelle vente? C'est dans cette section que ça se passe</p>
				<p class="text-right">
					<a class="btn btn-primary" href="{{{ URL::to('create_sale') }}}">Créer »</a>
				</p>
		    </div>
	    </div>
    </div>	 
</div>
@endsection