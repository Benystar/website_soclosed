@extends('layouts.default')

@section('content')

<br />
<div class="row">
	<div class="col-md-12 text-right"><img src="{{{asset("assets/img/logo.png")}}}"></div>
</div>
<br />
@if($sale->id_user == Auth::user()->id) 
<div class="row header-sale">
	<div class="col-md-2 col-md-offset-6 text-right">
		<a href="{{{ URL::to('update_sale/'.$sale->alias) }}}" class="header-a">Modifier ma vente</a>
	</div>
	<div class="col-md-2 text-right">
		<a href="{{{ URL::to('update_items/'.$sale->alias) }}}" class="header-a">Gérer les articles</a></div>
	<div class="col-md-2 text-right">
		<a href="{{{ URL::to('sale_share_update/'.$sale->alias) }}}" class="header-a">Inviter des amis</a></div>
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
		<ul class="">
    	@foreach ($sale->items as $key => $val)		    	
			    <li class="col-md-5" style="height:520px;">
				    <div class="thumbnail" >
					    <img src="{{{ asset($val->picture_url) }}}">
					    <div class="caption">
						    <label>{{{ $val->name }}}</label>
						    <p>{{{ $val->description }}}</p>
						    <p align="center"><a href="{{{ URL::to("display_item/".$val->id) }}}" class="btn btn-default btn-block">Fiche produit</a></p>						    
					    </div>
				    </div>
			    </li>				    			   
	    @endforeach	
	     </ul>  	  	
	</div>		    
</div>   	 


@endsection