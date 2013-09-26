@extends('layouts.default')

@section('content')


<div class="row">
	<div class="span12 text-right"><img src="{{{asset("assets/img/logo.png")}}}"></div>
</div>
<br />
<div class="row header-sale">
	<div class="span2 offset6 text-right">
		<a href="{{{ URL::to('update_sale/'.$sale->alias) }}}" class="header-a">Modifier ma vente</a>
	</div>
	<div class="span2 text-right">
		<a href="{{{ URL::to('') }}}" class="header-a">Ajouter des articles</a></div>
	<div class="span2 text-right">
		<a href="{{{ URL::to('') }}}" class="header-a">Inviter des amis</a></div>
</div>
<div class="row background-color">
	<br />
	<div class="span3">
	   	<blockquote>
		    <p>{{{ $sale->name }}}</p>
		    	<br />
		    	<img src="{{{asset("assets/img/icon-chrono.png")}}}">&nbsp;{{{ $sale->sale_date }}}			    
		</blockquote>					
	</div>
	<div class="span9">
		<ul class="thumbnails">
    	@foreach ($sale->items as $key => $val)		    	
			    <li class="span4" style="background-color: #ffffff;">
				    <div class="thumbnail">
					    <img src="{{{ asset($val->picture_url) }}}">
					    <div class="caption">
						    <h3>{{{ $val->name }}}</h3>
						    <p>{{{ $val->description }}}</p>
						    <p align="center"><a href="{{{ URL::to("display_item/".$val->id) }}}" class="btn btn-inverse btn-block">Fiche produit</a></p>
					    </div>
				    </div>
			    </li>				    			   
	    @endforeach	
	     </ul>  	  	
	</div>		    
</div>   	 


@endsection