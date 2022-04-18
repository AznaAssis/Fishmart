@extends('ADMIN.header');
@section('body')
<form>
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Subject</th>
			<th>Message</th>
			<th>Reply Message</th>
			<th></th>
			<th></th>>
		</tr>
		@foreach($data as $value)
		<tr>
			<td style="color: green;">{{$value->fname}}&nbsp;{{$value->lname}}</td>
			<td style="color: red;">{{$value->subject}}</td>
			<td style="color: green;">{{$value->message}}</td>
			@if($value->reply=="")
			<td style="color: red;">Not Replied</td>
			@else
			<td style="color: red;">{{$value->reply}}</td>
			@endif
			<td><a href="/view_message/{{$value->mid}}" class="btn btn-primary">View Details</a></td>
		</tr>
		@endforeach

	</table>
</form>
</div>
@endsection