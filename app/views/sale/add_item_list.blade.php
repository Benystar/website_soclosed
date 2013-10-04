@if(count(Sale::find($sale->id)->items) > 0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th width="240px">#</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th width="150px">&nbsp;</th>
      </tr>
    </thead>
  <tbody>  
      
   @foreach(Sale::find($sale->id)->items as $item)
    <tr>
      <td><img src="{{ asset($item->picture_url) }}" style="width: 200px; height: 150px;" /></td>  
      <td>{{ $item->name }}</td>
      <td>{{ $item->description }}</td>
      <td>{{ $item->price }}</td>
      <td>
          <button type="button" class="btn btn-warning btn-xs">Modifier</button>
          <a href="delete/{{ $sale->alias }}/{{ $item->id }}"><button type="button" class="btn btn-danger btn-xs">Supprimer</button></a>
      </td>
    </tr> 
  @endforeach
  </tbody>  
  </table>
@endif