@extends('ADMIN.header');
@section('body')
@foreach($data as $value)
<form action="/insrt_message/{{$value->mid}}" method="post">
	@csrf
	<table class="table">
		<tr>
			<th>Name</th>
			<td style="color: green;">{{$value->fname}}&nbsp;{{$value->lname}}</td>
		</tr>
		<tr>
			<th>Subject</th>
			<td style="color: red;">{{$value->subject}}</td>
		</tr>
		<tr>
			<th>Message</th>
			<td style="color: red;">{{$value->message}}</td>
		</tr>
		<tr>
			<th>Reply</th>
			<div class="form-group">
			<td><textarea name="reply" value="{{old('reply')}}" class="form-control" placeholder="Reply"></textarea>
			@error("reply")
             <p style="color: red;font-size: 15px;font-family: serif;">
             {{$errors->first("reply","**REPLY TO CUSTOMER")}}
             </p>
			@enderror
			</td>
			</div>
		</tr>
        <tr>
        	<th><input type="submit" name="submit" value="Reply" class="btn btn-danger"></th>
        </tr>
		
	</table>
</form>
@endforeach
@endsection