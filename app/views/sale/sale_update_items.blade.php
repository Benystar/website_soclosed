@extends('layouts.default')

@section('content')

@include('header')

<br />
<div class="row">
  <div class="col-md-10">
  <blockquote>
    <p>Ma vente : {{{ $sale->name }}}</p>
    <small>
      <span style="font-weight:bold;">Description :</span>  {{{ $sale->description }}}</small>
     <small> 
      <span style="font-weight:bold;">Date de fin :</span>  {{{ $sale->sale_date }}}
    </small>
  </blockquote>   
  </div>
  <div class="col-md-2 text-right">
  		<a class="btn btn-large btn-primary" href="{{{ URL::to($sale->alias) }}}">Terminer</a>
  </div>
</div>

@include('sale/add_item_form', array('action'=>'update'));

@include('sale/add_item_list', array('sale'=> $sale));

@endsection