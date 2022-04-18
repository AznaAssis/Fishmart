@extends("ADMIN.header");
@section('body')
   <form>
   	<table class="table">
   		<tr>
   			<th>Product image</th>
   			<th>Product Name</th>
   			<th>Price per kg/gm</th>
   			<th>Quantity</th>
            <th>Grand Total</th>
   			<th>Track Delivery</th>
            <th>Proceed Button</th>
   		</tr>
   		@foreach($data as $value)
   		<tr>
   			<td><img src="{{asset('upload/image/'.$value->image2)}}" style="height:130px;width:130px;"></td>
   			<td>{{$value->p_name}}</td>
   			<td>{{$value->price}}</td>
   			<td>{{$value->weight_needed1}}{{$value->weight_needed2}}</td>
            <td></td>
            <?php $order_status=$value->order_status;?>
   			@if($value->order_status==0)
   			<td>Order Confirmed</td>
            
            <td><a href="/admin_action_dispatched/{{$value->sid}}" class="btn btn-danger">Send for Dispatch</a></td>
   			@elseif($value->order_status==1)
   			<td>Dispatched</td>
            <td><a href="/admin_action_delivered/{{$value->sid}}" class="btn btn-success">Confirm Delivery</a></td>
   			@else
            <td>Delivered</td>
            @endif
            
   		</tr>
   		@endforeach
   	</table>
   </form>
</div>
@endsection