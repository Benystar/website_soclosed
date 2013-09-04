@extends('layouts.default')

@section('content')
<div class="header">   
</div>

<div class="content">	
    <div class="row-fluid">
		<div class="span4">
			<h2>Créer une vente</h2>
			<p>Envie de créer une nouvelle vente privée? C'est dans cette section que ça se passe</p>
			<p>
				<a class="btn" href="{{{ URL::to('create_sale') }}}">Créer »</a>
			</p>
		</div>
		<div class="span4">
			<h2>Heading</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>	
		<div class="span4">
			<h2>Heading</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div> 
	</div>	 
</div>
@endsection