@extends('ADMIN.header')
@section('body')
@foreach($data as $value)
<form method="post" action="/update_product/{{$value->pid}}">
	@csrf
 
 
	<div class="card-body">
        <div class="row">
            <div class="col-sm-6">
    <center>	  <table>
  <tr>
    <td>
      <img src="{{asset('upload/image/'.$value->image2)}}" style="height:200px;width:200px;">
    </td>
    </tr>
    <tr>
        <td style="color: green;font-size: 20px;background-color: #bdb0af;">{{$value->p_name}}</td>
      </tr>
      <tr>
        <td style="background-color: #bdb0af;color:red;">{{$value->price}}&nbsp;Rupees</td>
        </tr>
        <tr>
        <td style="background-color: #bdb0af;color:red;">{{$value->avail_stock1}}{{$value->avail_stock2}}</td>
        </tr>
        </table> 
        </center>
 
        @endforeach
     <div class="form-group">
                        <label>Enter Price per Kg </label>
                        <input type="text" name="price" class="form-control" placeholder="Enter Price" value="{{old('price')}}">
                        @error("price")
                        <p style="color: red;font-size: 15px;font-family: serif;">
                          {{$errors->first("price","**REQUIRED PRICE PER KG")}}
                        </p>
                          @enderror
     </div>
      <div class="form-group">
     <div class="form-group">
                        <label>Available Stock</label>
                        <input type="text" name="avail_stock1" class="form-control" placeholder="weight" value="{{old('avail_stock1')}}">
                        <input type="text" name="avail_stock2" class="form-control" placeholder="kg/gm" value="{{old('avail_stock2')}}">
                        @error("avail_stock1")
                        <p style="color: red;font-size: 15px;font-family: serif;">
                          {{$errors->first("avail_stock1","**REQUIRED AVAILABLE STOCK")}}
                        </p>
                          @enderror
                          @error("avail_stock2")
                        <p style="color: red;font-size: 15px;font-family: serif;">
                          {{$errors->first("avail_stock2","**REQUIRED AVAILABLE STOCK")}}
                        </p>
                          @enderror
     </div>
	 <div class="card-footer">
          <input type="submit" name="submit" value="Update Details" class="btn btn-success" >
      </div>
</div>
</div>
</div>

</form>
</div>
@endsection