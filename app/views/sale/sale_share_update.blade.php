@extends('layouts.default')

@section('content')

@include('header')

@include('sale/sale_share_header')

   	<a class="btn  btn-large btn-primary" href="{{{ URL::to($sale->alias) }}}">Terminer</a>

@include('sale/sale_share_content') 

@endsection
