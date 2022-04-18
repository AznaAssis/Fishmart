@extends("ADMIN.header");
@section('body')
<form>
	<table class="table">
		<tr>
			<th style="background-color: #bbbec4;color: white;">Name</th>
			<th>Mobile Number</th>
			<th style="background-color: #bbbec4;color: white;">Address</th>
			<th>Email ID</th>
			<th>Purchase Button</th>
			<th style="background-color: #bbbec4;">Confirm Button</th>
		</tr>
		@foreach($data as $value)
		<tr>
			<td style="background-color: #bbbec4;color: white;">{{$value->fname}}{{$value->lname}}</td>
			<td style="color: green;">{{$value->mob_no}}</td>
			<td style="background-color: #bbbec4;color: white;">{{$value->h_name}}<br>{{$value->l_mark}}<br>{{$value->city}}<br>{{$value->state}}</td>
			<td style="color: green;">{{$value->email_id}}</td>
			<td><a href="/view_customer_cart/{{$value->sid}}" class="btn btn-success">Purchase Details</a></td>
			@if($value->status==0 && $value->user==1)
			<td style="background-color: #bbbec4;"><a href="/confirm_user/{{$value->lid}}" class="btn btn-primary">Confirm User</a></td>
			@endif
			
		</tr>
		@endforeach
	</table>
</form>
@endsection