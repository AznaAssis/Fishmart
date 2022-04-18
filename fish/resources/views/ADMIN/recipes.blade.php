@extends('ADMIN.header');
@section('body')
<form method="post" action="/insrt_recipes" enctype="multipart/form-data">
	@csrf
  <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
            	<div class="form-group">
                        <label>Recipe Name</label>
                        <input type="text" name="r_name" class="form-control" placeholder="Enter Recipe Name" value="{{old('r_name')}}">
                        @error("r_name")
                        <p style="color: red;font-size: 15px;font-family: serif;">
                          {{$errors->first("r_name","**REQUIRED RECIPE NAME")}}
                        </p>
                          @enderror
                </div>
                <div class="form-group">
                        <label>Ingredients</label>
                        <textarea class="form-control" rows="3" name="ingredients" value="{{old('ingredients')}}" placeholder="Enter Ingredients"></textarea>
                  @error("ingredients")
                	<p style="color: red;font-size: 15px;font-family: serif;">
                		{{$errors->first("ingredients","**REQUIRED INGREDIENTS")}}
                	</p>
                	@enderror
                </div>
                <div class="form-group">
                    <label>Method</label>
                    <textarea class="form-control" rows="3" name="method" value="{{old('method')}}" placeholder="Enter Method"></textarea>
                    @error("method")
                      <p style="color: red;font-size: 15px;font-family: serif;">
                          {{$errors->first("method","**REQUIRED METHOD")}}
                      </p>
                    @enderror 
                </div>
                <div class="form-group">
                	<label>Image</label>
                	<input type="file" name="image3" class="form-control" value="{{old('image3')}}">
                	@error("image3")
                      <p style="color: red;font-size: 15px;font-family: serif;">
                         {{$errors->first("image3","**REQUIRED IMAGE")}}
                      </p>
                	@enderror
                </div>
                <div>
                	<input type="submit" name="submit" value="Add" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection