@extends("USER.header")
@section('body')
<form>
	<table class="table" style="color: red;">
		@foreach($data as $value)
		<tr>
		<h1><b><th>Subject</th></b></h1>
		<b><td>{{$value->subject}}</td></b>
	</tr>
	<tr>
		<b><th>Message</th></b>
		<b><td>{{$value->message}}</td></b>
	</tr>
	<tr>
		<b><th>Reply Message</th></b>
		@if($value->reply=="")
		<b><i><td style="color: green;">Not yet replied</td></i></b>
		@else
		<b><td style="font-size: 20px;">{{$value->reply}}</td></b>
		@endif
	</tr>
	@endforeach
	</table>
</form>
@endsection