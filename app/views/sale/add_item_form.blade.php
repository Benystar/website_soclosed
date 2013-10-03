<div class="well">
    <div class="row">
      <div class="col-md-12">
       <div class="form-title"><h2>J'ajoute un article</h2></div>
     </div>
    </div>

    <div class="row">
    	<div class="col-md-4">
    @if($action == "create")
    	{{ Form::open(array('action' => 'SaleController@addItem','files'=>true)) }}
    @elseif($action == "update")
      {{ Form::open(array('action' => 'SaleController@updateItem','files'=>true)) }}
    @endif  
			
  			<div class="form-title">Le nom de mon article</div>
  			<input class="form-control" type="text" name="item_name" /><br />
  			<div class="form-title">La description de mon article</div>
  			<textarea class="form-control" rows="3" name="item_description"></textarea><br />
  			<div class="form-title">Le prix de mon article</div>
  			<input class="form-control" type="text" name="item_price" /><br />
    	</div>
      <div class="col-md-3 col-md-offset-1">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
          <div>
          <span class="btn btn-file"><span class="fileupload-new">Parcourir</span><span class="fileupload-exists">Changer</span><input type="file" name="file" /></span>
          <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Supprimer</a>
          </div>
        </div>
      </div>  
      <div class="col-md-3">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
          <div>
          <span class="btn btn-file"><span class="fileupload-new">Parcourir</span><span class="fileupload-exists">Changer</span><input type="file" name="second_picture" /></span>
          <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Supprimer</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" style="text-align:right;">
        <button type="submit" class="btn">Validez</button>
      </div>
    </div>
</div>
{{ Form::close() }}