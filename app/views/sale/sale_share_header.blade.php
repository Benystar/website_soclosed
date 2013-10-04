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
    <p>Ma vente : {{{ $sale->name }}}</p>
    <small>
      <span style="font-weight:bold;">Description :</span>  {{{ $sale->description }}}</small>
     <small> 
      <span style="font-weight:bold;">Date de fin :</span>  {{{ $sale->sale_date }}}
    </small>
  </blockquote>  
   
  </div>
  <div class="col-md-2 text-right">