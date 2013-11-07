<!DOCTYPE html>
<html lang="fr">
	<head>	
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>
			@section('title')
			So CLosed
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- CSS
		================================================== -->
		<link href="{{{ asset('assets/css/bootstrap.css') }}}" rel="stylesheet">		
		<link href="{{{ asset('assets/css/soclosed.css') }}}" rel="stylesheet">
		<link href="{{{ asset('assets/css/datepicker.css') }}}" rel="stylesheet">
		<link href="{{{ asset('assets/css/bootstrap-fileupload.min.css') }}}" rel="stylesheet">

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">

		<!-- Javascripts
		================================================== -->
		<script src="{{{ asset('assets/js/jquery.v1.8.3.min.js') }}}"></script>
		<script src="{{{ asset('assets/js/bootstrap/bootstrap.js') }}}"></script>
		<script src="{{{ asset('assets/js/bootstrap-datepicker.js') }}}"></script>
		<script src="{{{ asset('assets/js/bootstrap-fileupload.min.js') }}}"></script>
		<script src="{{{ asset('assets/js/so-closed.js') }}}"></script>
			
	</head>

	<body>
		<!-- Navbar -->			
		<div class="navbar navbar-default navbar-inverse navbar-fixed-top">
			<div class="container">
               <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav pull-right">
                        @if (Auth::check())			                       
	                        <li><a href=""><span class="glyphicon glyphicon-user"></span>
 {{{ Auth::user()->username }}}</a></li>
	                        <li><a href="{{{ URL::to('home') }}}">Mes ventes</a></li>
	                        <li><a href="{{{ URL::to('cart') }}}">Mon panier</a></li>
	                        <li><a href="{{{ URL::to('logout') }}}">Déconnexion</a></li>
                        @else
	                        <li><a href="{{{ URL::to('login') }}}">Login</a></li>
	                        <li><a href="{{{ URL::to('subscribe') }}}">S'inscrire</a></li>
                        @endif
                    </ul>				
				</div>
			</div>
		</div>
		<!-- End Navbar -->	
		<!-- Container -->
		<div class="container">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
		</div>
		<!-- ./ container -->

		<!-- Javascripts
		================================================== -->		
		<!--
		<script src="{{{ asset('assets/js/bootstrap/bootstrap.min.js') }}}"></script>
		<script src="{{{ asset('assets/js/bootstrap-fileupload.min.js') }}}"></script>-->
	</body>
</html>