@extends('USER.header')    
@section('body')
<form method="post" action="/edit_login">
	@csrf
	
		<table class="table">
			<tr>
				<th>
					Email ID
				</th>
				<td>
					@foreach($data as $value)
					<input type="text" name="email_id1" value="{{$value->email_id}}" disabled="disabled">
					<input type="text" name="email_id" value="{{$value->email_id}}" hidden="hidden"> -->
					<input type="text" name="pwd" value="{{$value->pwd}}" hidden="hidden">
					@endforeach
				</td>
			</tr>
			<tr>
				<th>
					Current Password
				</th>
				<td>
					<input type="text" name="current_pwd">
				
				@error("current_pwd")
				<p style="color: red;font-size: 15px;font-family: serif;">
				{{$errors->first("current_pwd","**ENTER YOUR CURRENT PASSWORD")}}
			</p>
				@enderror
				</td>
			</tr>
			<tr>
				<th>
					New Passsword
				</th>
				<td>
					<input type="text" name="new_pwd">
				
				@error("new_pwd")
				<p style="color: red;font-size: 15px;font-family: serif;">
				{{$errors->first("new_pwd","**ENTER YOUR NEW PASSWORD")}}
			</p>
				@enderror
				</td>
			</tr>
			<tr>
				<th>
					Confirm password
				</th>
				<td>
					<input type="text" name="confirm_pwd">
					@error("confirm_pwd")
				<p style="color: red;font-size: 15px;font-family: serif;">
				{{$errors->first("confirm_pwd","**ENTER YOUR CONFIRM PASSWORD")}}
			</p>
				@enderror
				</td>
			</tr>
			<tr>
				<th><input type="submit" name="submit" value="Cange Password" class="btn btn-danger"></th>
			</tr>
		</table>
		
	</form>
	
@endsection