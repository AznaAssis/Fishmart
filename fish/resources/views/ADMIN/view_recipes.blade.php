@extends('ADMIN.header');
@section('body')
<form>
	<table class="table">
		<tr>
			<th>Image</th>
			<th>Recipes Name</th>
			<th>Ingredients</th>
			<th>Method</th>
		</tr>
		@foreach($data as $value)
		<tr>
			<td><img src="{{asset('upload/image/'.$value->image3)}}" style="height:130px;width:130px;"></td>
			<td>{{$value->r_name}}</td>
			<td>{{$value->ingredients}}</td>
			<td>{{$value->method}}</td>
		</tr>
		@endforeach
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><a href="/recipes" class="btn btn-danger">Add</td>
		</tr>
	</table>
	{{$data->links()}}
</form>
</div>
@endsection