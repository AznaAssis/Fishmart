@extends('USER.header')    
@section('body')
<form>
	<table class="table">
		<tr>
			<th>Image</th>
			<th>Product Name</th>
			<th>Price per kg</th>
			<th>Quantity</th>
			<th>Grand Total</th>
			<th>Status of order</th>
		</tr>
		@foreach($data as $value)
		<tr style="color: red;">
			<td><img src="{{asset('/upload/image/'.$value->image2)}}" style="height: 100px;width: 100px;border-radius: 50%;"></td>
			<td>{{$value->p_name}}</td>
			<td>{{$value->price}}</td>
			<td>{{$value->weight_needed1}}{{$value->weight_needed2}}</td>
			<td>{{$value->grand_amt}}</td>
			@if($value->order_status==0)
			<td>Order Confirmed</td>
			@elseif($value->order_status==1)
			<td>Dispatched</td>
			@else
			<td>Delivered</td>
			@endif
		</tr>
		@endforeach
		
	</table>

</form>


@endsection