@extends('layouts.default')

@section('content')

<div class="row">
  <div class="span10">
  <blockquote>
    <p>Ma vente : {{{ Session::get('current_sale')->name }}}</p>
    <small>
      <span style="font-weight:bold;">Description :</span>  {{{ Session::get('current_sale')->description }}}</small>
     <small> 
      <span style="font-weight:bold;">Date de fin :</span>  {{{ Session::get('current_sale')->sale_date }}}
    </small>
  </blockquote>  
   
  </div>
  <div class="span2 text-right">
   <a class="btn  btn-large btn-primary" href="{{{ URL::to('create_sale_share') }}}">Etape suivante</a>    
  </div>
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
    	{{ Form::open(array('action' => 'SaleController@addItem','files'=>true)) }}
			
  			<div class="form-title">Le nom de mon article</div>
  			<input class="form-field" type="text" name="item_name" /><br />
  			<div class="form-title">La description de mon article</div>
  			<textarea rows="3" name="item_description"></textarea><br />
  			<div class="form-title">Le prix de mon article</div>
  			<input class="form-field" type="text" name="item_price" /><br />
    	</div>
      <div class="span3">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
          <div>
          <span class="btn btn-file"><span class="fileupload-new">Parcourir</span><span class="fileupload-exists">Changer</span><input type="file" name="file" /></span>
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
        <button type="submit" class="btn">Validez</button>
      </div>
    </div>
</div>

{{ Form::close() }}

@if(count(Sale::find(Session::get('current_sale')->id)->items) > 0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
      </tr>
    </thead>
  <tbody>  
      
   @foreach(Sale::find(Session::get('current_sale')->id)->items as $item)
    <tr>
      <td width="300"><img src="{{ $item->picture_url }}" style="width: 200px; height: 150px;" /></td>  
      <td>{{ $item->name }}</td>
      <td>{{ $item->description }}</td>
      <td>{{ $item->price }}</td>
    </tr> 
  @endforeach
  </tbody>  
  </table>
@endif

@endsection