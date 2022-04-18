@extends('ADMIN.header')
@section('body')
<form method="post" action="/insrt_product" enctype="multipart/form-data">
	@csrf
	<div class="card-body">
        <div class="row">
            <div class="col-sm-6">
    <div class="form-group">
                  <label>Category</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="category">
                    <option selected="selected" disabled="disabled" value="default">---select---</option>
                    @foreach($data as $value)
                    <option value="{{$value->cid}}"<?php if($value->cid==old('category')) {
                       ?>selected="selected"<?php } ?>>{{$value->category}}</option>
                    @endforeach
                  </select>
                 @error("category")
                        <p style="color: red;font-size: 15px;font-family: serif;">
                          {{$errors->first("category","**REQUIRED CATEGORY")}}
                        </p>
                          @enderror
    </div>          
	 <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="p_name" class="form-control" placeholder="Enter Product Name" value="{{old('p_name')}}">
                        @error("p_name")
                        <p style="color: red;font-size: 15px;font-family: serif;">
                          {{$errors->first("p_name","**REQUIRED PRODUCT NAME")}}
                        </p>
                          @enderror
     </div>
     <div class="form-group">
                        <label>Price per Kg</label>
                        <input type="text" name="price" class="form-control" placeholder="Enter Price" value="{{old('price')}}">
                        @error("price")
                        <p style="color: red;font-size: 15px;font-family: serif;">
                          {{$errors->first("price","**REQUIRED PRICE PER KG")}}
                        </p>
                          @enderror
     </div>
      <div class="form-group">
                        <label>Total Stock</label>
                        <input type="text" name="tot_stock1" class="form-control" placeholder="weight" value="{{old('tot_stock1')}}">
                        <input type="text" name="tot_stock2" class="form-control" placeholder="kg/gm" value="{{old('tot_stock2')}}">
                        @error("tot_stock1")
                        <p style="color: red;font-size: 15px;font-family: serif;">
                          {{$errors->first("tot_stock1","**REQUIRED TOTAL STOCK")}}
                        </p>
                          @enderror
                          @error("tot_stock2")
                        <p style="color: red;font-size: 15px;font-family: serif;">
                          {{$errors->first("tot_stock2","**REQUIRED TOTAL STOCK")}}
                        </p>
                          @enderror
     </div>
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
    <div class="form-group">
    	<label>Choose Image</label>
	    <input type="file" name="image2" class="form-control" value="{{old('image2')}}">
      @error("image2")
        <p style="color: red;font-size: 15px;font-family: serif;">
          {{$errors->first("image2","**REQUIRED IMAGE")}}
        </p>
      @enderror
    </div>
	 <div class="card-footer">
          <input type="submit" name="submit" value="Add" class="btn btn-success" >
      </div>
</div>
</div>
</div>

</form>
</div>
@endsection