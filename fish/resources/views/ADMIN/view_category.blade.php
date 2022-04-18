@extends("ADMIN.header")
@section('body')
  <form>
  	<table class="table">
  		<tr>
  			<th>Image</th>
  			<th>Category</th>
  		</tr>
  		@foreach($data as $value)
  		<tr>
  			<td><img src="{{asset('upload/image/'.$value->image1)}}" style="height:130px;width:130px;"></td>
  			<td style="color: green;">{{$value->category}}</td>
  		</tr>
  		@endforeach
  		<tr>
  			<td>
  			</td>
  			<td><a href="/category" class="btn btn-danger">Add</a></td>
  		</tr>
  	</table>
    {{$data->links()}}
  </form>
</div>

@endsection
