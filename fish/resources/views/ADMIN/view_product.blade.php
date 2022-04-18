@extends("ADMIN.header")
@section('body')
  <form>
  	<table class="table">
  		<tr>
  			<th>Image</th>
  			<th>Category</th>
        <th>Product Name</th>
        <th>Price per Kg</th>
        <th>Available Stock</th>
        <th>Update Price/Stock</th>
  		</tr>
  		@foreach($data as $value)
  		<tr>
  			<td><img src="{{asset('upload/image/'.$value->image2)}}" style="height:130px;width:130px;"></td>
  			<td style="background-color: #bdb0af;color: red;">{{$value->category}}</td>
        <td style="color: green;">{{$value->p_name}}</td>
        <td style="background-color: #bdb0af;color:red;">{{$value->price}}&nbsp;Rupees</td>
        <td style="color: green;">{{$value->avail_stock1}}{{$value->avail_stock2}}</td>
        <td><a href="/update_product_admin/{{$value->pid}}" class="btn btn-success">Update</a></td>
        <td><a href="/delete_product/{{$value->pid}}" class="btn btn-danger">Delete</a></td>
  		</tr>
  		@endforeach
  		<tr>
  			<td>
  			</td>
  			<td><a href="/product" class="btn btn-danger">Add</a></td>
  		</tr>
  	</table>
    {{$data->links()}}
  </form>
</div>

@endsection
