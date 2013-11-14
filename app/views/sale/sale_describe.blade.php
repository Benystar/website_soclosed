@extends('layouts.default')

@section('content')

@include('header')
<br />
<br />
<div class="row">
	<div class="col-md-4 col-md-offset-2 background-color" style="padding-left: 35px;">

		@if(isset($sale))
			{{ Form::open(array('action' => 'SaleController@updateSale')) }}
			<input type="hidden"  name="alias"  value="{{{ $sale->alias }}}">
			<div class="form-title"><h2>Je modifie ma vente</h2></div>
			<label>Le nom de ma vente</label>
			<input class="form-control" type="text" name="sale_name" value="{{{ $sale->name }}}" readonly/><br />
			<label>La description de ma vente</label>
			<textarea rows="3" class="form-control" name="sale_description" />{{{ $sale->description }}}</textarea><br />
			<label>La date de fin de ma vente</label>
		    <div class="input-append date" id="dp3" data-date-format="dd-mm-yyyy">
		    	<input class="form-control" size="16" type="text" value="12-02-2013" name="sale_date" readonly><span class="add-on"><i class="icon-th"></i></span>
		    </div>		    
		@else
			{{ Form::open(array('action' => 'SaleController@insertSale')) }}
			<div class="form-title"><h2>Je crée ma vente</h2></div>
			<label>Le nom de ma vente</label>
			<input class="form-control" type="text" name="sale_name" /><br />
			<label>La description de ma vente</label>			
			<textarea class="form-control" rows="3" name="sale_description"></textarea><br />
			<label>La date de fin de ma vente</label>
		    <div class="input-append date" id="dp3" data-date-format="dd-mm-yyyy">
		    	<input class="form-control" size="16" type="text" value="12-02-2013" name="sale_date" readonly><span class="add-on"><i class="icon-th"></i></span>
		    </div>		   
		@endif

		<div class="submit-container text-right" style="padding-bottom: 10px; margin-top: 20px;">
			 <button type="submit" class="btn btn-default">Validez</button>			
		</div>
		{{ Form::close() }}

	</div>
	<div class="col-md-4 background-grey-sc" style="height:415px">&nbsp;</div>	
</div>

<script type="text/javascript">
	$(document).ready(function() {
	 	$('#dp3').datepicker();
	});
</script>

@endsection