@extends('layouts.default')

@section('content')

<script src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
	function invitation_fb()
	{
	     // assume we are already logged in
	      FB.init({appId: '430052157115604', xfbml: true, cookie: true});

	      FB.ui({
	          method: 'send',
	          name: 'Facebook Dialogs',
	          link: 'https://developers.facebook.com/docs/reference/dialogs/'
	          });
	}
</script>

<br />

<div class="row">
  <div class="col-md-10">
  <blockquote>
    <p>Ma vente : {{{ Session::get('current_sale')->name }}}</p>
    <small>
      <span style="font-weight:bold;">Description :</span>  {{{ Session::get('current_sale')->description }}}</small>
     <small> 
      <span style="font-weight:bold;">Date de fin :</span>  {{{ Session::get('current_sale')->sale_date }}}
    </small>
  </blockquote>  
   
  </div>
  <div class="col-md-2 text-right">
   	<a class="btn  btn-large btn-primary" href="{{{ URL::to(Session::get('current_sale')->alias) }}}/21&4">Terminer</a>    
  </div>
</div>

<div class="row">
   <div class="col-md-12">
       <div class="form-title"><h2>J'invite mes amis à participer</h2></div>
   </div>
</div>
<div class="well">
	<div class="row">
	    <div class="col-md-6">
		    <label>Facebook</label>	    
		    <p>Clique sur ce bouton pour inviter tes amis Facebook à rejoindre la vente</p>
		</div>
		<div class="col-md-3"><br />
	    	<div id="btn_invit_fb">
				<p><a href="#" class="invitation-facebook-btn" onClick="invitation_fb()">Invitation</a></p> 
			</div>
		 </div>	   
	</div>
	<div class="row">
	    <div class="col-md-6">
		    <label>Twitter</label>	    
		    <p>Clique sur ce bouton pour inviter tes amis Twitter à rejoindre la vente</p>
		</div>
		<div class="col-md-3">
	    	<!-- A compléter -->
		</div>	   
	</div>
	<div class="row">
	    <div class="col-md-6">
		    <label>E-Mails</label>	    
		    <p>Clique sur ce bouton pour inviter tes amis par e-mail à rejoindre la vente</p>
		</div>
		<div class="col-md-3">
	    	<!-- A compléter -->
		</div>	   
	</div>
</div>

@endsection
