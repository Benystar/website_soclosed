@extends('layouts.default')

@section('content')

<div class="content">
	<div class="row">
		<div class="span12 text-right"><img src="{{{asset("assets/img/logo.png")}}}"></div>
	</div>
	<br />
	<div class="row" style="background-color: #fbf9fa;">
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
</div>

@endsection