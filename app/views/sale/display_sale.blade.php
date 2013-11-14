@extends('layouts.default')

@section('content')

<br />
<div class="row">
	<div class="col-md-12 text-right"><img src="{{{asset("assets/img/logo.png")}}}"></div>
</div>
<br />
@if($sale->id_user == Auth::user()->id) 
<div class="row header-display-sale">
	<div class="col-md-2 col-md-offset-6 text-right">
		<a href="{{{ URL::to('update_sale/'.$sale->alias) }}}" class="header-a">Modifier ma vente</a>
	</div>
	<div class="col-md-2 text-right">
		<a href="{{{ URL::to('update_items/'.$sale->alias) }}}" class="header-a">Gérer les articles</a></div>
	<div class="col-md-2 text-right">
		<a href="{{{ URL::to('sale_share_update/'.$sale->alias) }}}" class="header-a">Inviter des amis</a></div>
</div>
@else
<div class="row header-display-sale" style="height:25px;">
</div>
@endif
<div class="row background-color">
	<br />
	<div class="col-md-3">
	   	<blockquote>
		    <p>{{{ $sale->name }}}</p>
		    	<br />
		    	<img src="{{{asset("assets/img/icon-chrono.png")}}}">&nbsp;{{{ $sale->sale_date }}}			    
		</blockquote>					
	</div>
	<div class="col-md-9">
		
    	@foreach ($items as $key => $val)		    	
		    <div class="col-md-5">
			    <div class="col-md-12 thumbnail" style="height:520px; margin-top:20px;">
				    <div class="text-center">
				   		<img src="{{{ asset($val->picture_url) }}}" height="370px" width="290px">
				   	</div>
				    <div class="caption">
					    <label>{{{ $val->name }}}</label>
					    <p>{{{ $val->description }}}</p>
					    <p align="center"><a href="{{{ URL::to("display_item/".$val->id) }}}" class="btn btn-default btn-block">Fiche produit</a></p>						    
				    </div>
			    </div>
		    </div>				    			   
	    @endforeach	
	      	  	
	</div>		    
</div>   	 


@endsection