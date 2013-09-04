@extends('layouts.default')

@section('content')

{{ Form::open(array('action' => 'SaleController@insertSale')) }}


<div class="form-title"><h2>Je crée ma vente</h2></div>
<div class="form-title">Le nom de ma vente</div>
<input class="form-field" type="text" name="sale_name" /><br />
<div class="form-title">La description de ma vente</div>
<input class="form-field" type="text" name="sale_description" /><br />
<div class="form-title">La date de fin de ma vente</div>
    <div class="input-append date" id="dp3" data-date-format="dd-mm-yyyy">
    <input class="span2" size="16" type="text" value="12-02-2013" readonly><span class="add-on"><i class="icon-th"></i></span>
    </div><br />

<script type="text/javascript">
	$(document).ready(function() {
	 	$('#dp3').datepicker();
	});
</script>


<div class="submit-container">
<input class="submit-button" type="submit" value="Validez" />
</div>

{{ Form::close() }}

@endsection