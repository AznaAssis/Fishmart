@extends("ADMIN.header");
@section('body')
   <form>
   	<table class="table">
   		<tr>
   			<th>Product image</th>
   			<th>Product Name</th>
   			<th>Price per kg/gm</th>
   			<th>Quantity</th>
   			<th>Status</th>
   		</tr>
   		@foreach($data as $value)
   		<tr>
   			<td><img src="{{asset('upload/image/'.$value->image2)}}" style="height:100px;width:100px;"></td>
   			<td>{{$value->p_name}}</td>
   			<td>{{$value->price}}</td>
   			<td>{{$value->weight_needed1}}{{$value->weight_needed2}}</td>
   			@if($value->status==1)
   			<td>Order Confirmed</td>
   			@elseif($value->status==2)
   			<td>Dispatched</td>
   			@else
            <td>Delivered</td>
            @endif
   		</tr>
   		@endforeach
   	</table>
   </form>
</div>
@endsection