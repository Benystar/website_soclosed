@extends('layouts.default')

@section('content')
<div style="text-align:right;">
    <h4>Ma vente</h4>         
    <span style="font-weight:bold;">Nom :</span> {{{ Session::get('current_sale')->name }}}&nbsp;
    <span style="font-weight:bold;">Description :</span>  {{{ Session::get('current_sale')->description }}}&nbsp;
    <span style="font-weight:bold;">Date de fin :</span>  {{{ Session::get('current_sale')->sale_date }}}
</div>
<br />
<div class="well">
    <div class="row-fluid">
      <div class="span12">
       <div class="form-title"><h2>J'ajoute un article</h2></div>
     </div>
    </div>

    <div class="row-fluid">
    	<div class="span4">
    	{{ Form::open(array('action' => 'SaleController@addItem')) }}
			
  			<div class="form-title">Le nom de mon article</div>
  			<input class="form-field" type="text" name="item_name" /><br />
  			<div class="form-title">La description de mon article</div>
  			<input class="form-field" type="text" name="item_description" /><br />
  			<div class="form-title">Le prix de mon article</div>
  			<input class="form-field" type="text" name="item_price" /><br />
    	</div>
      <div class="span3">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
          <div>
          <span class="btn btn-file"><span class="fileupload-new">Parcourir</span><span class="fileupload-exists">Changer</span><input type="file" name="main_picture" /></span>
          <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Supprimer</a>
          </div>
        </div>
      </div>  
      <div class="span3">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
          <div>
          <span class="btn btn-file"><span class="fileupload-new">Parcourir</span><span class="fileupload-exists">Changer</span><input type="file" name="second_picture" /></span>
          <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Supprimer</a>
          </div>
        </div>
      </div>
      
      <div class="span2"></div>

    </div>
    <div class="row-fluid">
      <div class="span12" style="text-align:right;">
        <button type="submit" class="btn btn-large btn-primary">Validez</button>
      </div>
    </div>
</div>

{{ Form::close() }}
<div class="row">
    <div class="span2"><h2>J'ajoute mes articles</h2></div>
    <div class="span10">
    	<p>Nom</p>
    	<p>Description</p>
    	<p>Prix</p>
    </div>
</div>
<div class="row">
    <div class="span2"><h2>J'ajoute mes articles</h2></div>
    <div class="span10">
    	<p>Nom</p>
    	<p>Description</p>
    	<p>Prix</p>
    </div>
</div>

@endsection