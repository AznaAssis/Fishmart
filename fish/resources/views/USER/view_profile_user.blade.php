@extends("USER.header");
@section('body')
<form>
	<table class="table">
		<tr>
			<th style="background-color: #bbbec4;color: white;">Name</th>
			<th style="background-color: #bbbec4;color: white;">Mobile Number</th>
			<th style="background-color: #bbbec4;color: white;">Address</th>
		</tr>
		@foreach($data as $value)
		<tr>
			<td style="background-color: #bbbec4;color: white;">{{$value->fname}}&nbsp;{{$value->lname}}</td>
			<td style="color: green;background-color: #bbbec4;color: white;">{{$value->mob_no}}</td>
			<td style="background-color: #bbbec4;color: white;">{{$value->h_name}}<br>{{$value->l_mark}}<br>{{$value->city}}<br>{{$value->state}}</td>
			<td><a href="/update_address" class="btn btn-danger">Edit Address</a></td>
		</tr>
		@endforeach
	</table>
</form>
@endsection