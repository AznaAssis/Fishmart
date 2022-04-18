@extends('ADMIN.header')
@section('body')
<form method="post" action="/insrt_category" enctype="multipart/form-data">
	@csrf
	<div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                
	 <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control" placeholder="Enter Category" value="{{old('category')}}">
                        @error("category")
                        <p style="color: red;font-size: 15px;font-family: serif;">
                          {{$errors->first("category","**REQUIRED CATEGORY")}}
                        </p>
                          @enderror
     </div>
    <div class="form-group">
    	<label>Choose Image</label>
	    <input type="file" name="image1" class="form-control" value="{{old('image1')}}">
      @error("image1")
        <p style="color: red;font-size: 15px;font-family: serif;">
          {{$errors->first("image1","**REQUIRED IMAGE")}}
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