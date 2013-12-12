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
		<link href='http://fonts.googleapis.com/css?family=Oxygen|Signika+Negative|Open+Sans' rel='stylesheet' type='text/css'>

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">

		<!-- Javascripts
		================================================== -->
		<script src="{{{ asset('assets/js/jquery.v1.8.3.min.js') }}}"></script>
		<script src="{{{ asset('assets/js/bootstrap/bootstrap.js') }}}"></script>
		<script src="{{{ asset('assets/js/bootstrap-datepicker.js') }}}"></script>
		<script src="{{{ asset('assets/js/bootstrap-fileupload.min.js') }}}"></script>
		<script src="{{{ asset('assets/js/twitter-bootstrap-hover-dropdown.min.js') }}}"></script>
		<script src="{{{ asset('assets/js/so-closed.js') }}}"></script>
			
	</head>

	<body>
		<!-- Navbar

		<div class="navbar navbar-default navbar-inverse navbar-fixed-top">
			<div class="container">
               <div class="collapse navbar-collapse navbar-ex1-collapse">
               	   <ul class="nav navbar-nav">
               	  		 <li class="text-left" style="padding-top:17px;">
               	  		 	<img src="{{{ asset('assets/img/final_logo.gif') }}}" />
               	  		 </li>
                        @if (Auth::check())			                       
	                        <li><a href=""><span class="glyphicon glyphicon-user"></span>
 {{{ Auth::user()->username }}}</a></li>
	                        <li><a href="{{{ URL::to('home') }}}">Mes ventes</a></li>
	                        <li><a href="{{{ URL::to('cart') }}}">Mon panier</a></li>
	                        <li><a href="{{{ URL::to('logout') }}}">Déconnexion</a></li>
	                        <li class="dropdown">
							    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
							        Account <b class="caret"></b>
							    </a>
							    <ul class="dropdown-menu">
							        <li><a tabindex="-1" href="#">My Account</a></li>
							        <li class="divider"></li>
							        <li><a tabindex="-1" href="#">Change Email</a></li>
							        <li><a tabindex="-1" href="#">Change Password</a></li>
							        <li class="divider"></li>
							        <li><a tabindex="-1" href="#">Logout</a></li>
							    </ul>
							</li>
                        @else
	                        <li><a href="{{{ URL::to('subscribe') }}}">S'inscrire</a></li>
                        @endif
                    </ul>				
				</div>
			</div>
		</div>	
		-->
		<div class="row" style="margin-top:-40px;">
			<div class="col-md-2 col-md-offset-1" style="height:70px;">
				<img src="{{{ asset('assets/img/final_logo.gif') }}}" />
			</div>
			@if (Auth::check())
			<div class="col-md-8 text-right" style="margin-top:15px;">		                       
                <ul class="list-inline">
					<li>
					  	<li class="dropdown">
						    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false">
						        {{{ Auth::user()->username }}}&nbsp;<b class="caret"></b>
						    </a>
						    <ul class="dropdown-menu">
						        <li><a tabindex="-1" href="#">Mon compte</a></li>						       
						        <li><a tabindex="-1" href="#">Mes ventes</a></li>
						        <li class="divider"></li>				        
						        <li><a tabindex="-1" href="#">Déconnexion</a></li>
						    </ul>
						</li>
					</li>
					<li>|</li>
					<li><a href="{{{ URL::to('cart') }}}">Mon panier</a></li>
					<li>|</li>
					<li><a href="{{{ URL::to('logout') }}}">Déconnexion</a></li>
				</ul>
			</div>
            @else
               <div class="col-md-2 col-md-offset-7">S'inscrire</div>
            @endif
			
		</div>
		@include('notifications')
	
		@yield('content')

		<!-- Javascripts
		================================================== -->		
		<!--
		<script src="{{{ asset('assets/js/bootstrap/bootstrap.min.js') }}}"></script>
		<script src="{{{ asset('assets/js/bootstrap-fileupload.min.js') }}}"></script>-->
	</body>
</html>