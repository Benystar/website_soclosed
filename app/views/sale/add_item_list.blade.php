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
      <td width="300"><img src="{{ asset($item->picture_url) }}" style="width: 200px; height: 150px;" /></td>  
      <td>{{ $item->name }}</td>
      <td>{{ $item->description }}</td>
      <td>{{ $item->price }}</td>
    </tr> 
  @endforeach
  </tbody>  
  </table>
@endif