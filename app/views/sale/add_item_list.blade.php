@if(count(Item::where('id_sale', '=', $sale->id)->get()) > 0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th width="240px">Photo</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th width="320px">&nbsp;</th>
      </tr>
    </thead>
  <tbody>  
      
   @foreach(Item::where('id_sale', '=', $sale->id)->get() as $item)
    <tr>
      <td><img src="{{ asset($item->picture_url) }}" style="width: 200px; height: 150px;" /></td>  
      <td>{{ $item->name }}</td>
      <td>{{ $item->description }}</td>
      <td>{{ $item->price }} &euro;</td>
      <td>
          <button type="button" class="btn btn-info btn-xs">Aperçu de la fiche produit</button>&nbsp;&nbsp;<button type="button" class="btn btn-warning btn-xs">Modifier</button>&nbsp;
          <a href="delete/{{ $sale->alias }}/{{ $item->id }}"><button type="button" class="btn btn-danger btn-xs">Supprimer</button></a>
      </td>
    </tr> 
  @endforeach
  </tbody>  
  </table>
@endif