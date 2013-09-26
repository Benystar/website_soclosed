@extends('layouts.default')

@section('content')

<div class="row">
	<div class="span12 text-right"><img src="{{{asset("assets/img/logo.png")}}}"></div>
</div>
<br />
<br />
<div class="row">
	<div class="span2"></div>
	<div class="span4 background-color" style="padding-left: 35px;">

		@if(isset($sale))
			{{ Form::open(array('action' => 'SaleController@updateSale')) }}
			<div class="form-title"><h2>Je modifie ma vente</h2></div>
			<div class="form-title">Le nom de ma vente</div>
			<input class="form-field" type="text" name="sale_name" value="{{{ $sale->name }}}" /><br />
			<div class="form-title">La description de ma vente</div>
			<textarea rows="3" name="sale_description" />{{{ $sale->description }}}</textarea><br />
			<div class="form-title">La date de fin de ma vente</div>
		    <div class="input-append date" id="dp3" data-date-format="dd-mm-yyyy">
		    	<input class="span2" size="16" type="text" value="12-02-2013" name="sale_date" readonly><span class="add-on"><i class="icon-th"></i></span>
		    </div>		    
		@else
			{{ Form::open(array('action' => 'SaleController@insertSale')) }}
			<div class="form-title"><h2>Je crée ma vente</h2></div>
			<div class="form-title">Le nom de ma vente</div>
			<input class="form-field" type="text" name="sale_name" /><br />
			<div class="form-title">La description de ma vente</div>			
			<textarea rows="3" name="sale_description"></textarea><br />
			<div class="form-title">La date de fin de ma vente</div>
		    <div class="input-append date" id="dp3" data-date-format="dd-mm-yyyy">
		    	<input class="span2" size="16" type="text" value="12-02-2013" name="sale_date" readonly><span class="add-on"><i class="icon-th"></i></span>
		    </div>		   
		@endif
			<br />
			<div class="submit-container text-right" style="padding-right: 60px;">
				<input class="btn btn-large btn-primary" type="submit" value="Validez" />
			</div>

			{{ Form::close() }}
	</div>
	<div class="span4 background-img-sale-describe">&nbsp;</div>
	<div class="span2"></div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
	 	$('#dp3').datepicker();
	});
</script>

@endsection