@extends('layouts.default')

@section('content')

@include('header')
<br />
<br />

@if(count($tabItems) > 0)
	<table class="table table-hover">
	    <thead>
	      <tr>
	        <th width="240px">#</th>
	        <th>Nom</th>
	        <th>Description</th>
	        <th>Prix</th>
	        <th width="150px">&nbsp;</th>
	      </tr>
	    </thead>
	  	<tbody>	      
		   	@foreach($tabItems as $item)
		    <tr>
		      <td><img src="{{ asset($item->picture_url) }}" style="width: 200px; height: 150px;" /></td>  
		      <td>{{ $item->name }}</td>
		      <td>{{ $item->description }}</td>
		      <td>{{ $item->price }}</td>
		      <td>
		          <button type="button" class="btn btn-warning btn-xs">Modifier</button>
		          
		      </td>
		    </tr> 
		  	@endforeach
	 	</tbody>  
	</table>
@endif

@endsection