@extends('ADMIN.header');
@section('body')
  <form method="post" action="/insrt_content" enctype="multipart/form-data">
  	@csrf
  	<div class="card-body">
        <div class="row">
            <div class="col-sm-6">
  			      <label>About Us</label>
  				      <div class="form-group">
  				         <textarea name="about_us" placeholder="Enter Details" class="form-control" rows="3" value="{{old('about_us')}}"></textarea>
                   @error("about_us")
                  <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("about_us","**REQUIRED ABOUT US")}}
                  </p>
                  @enderror	
  				     </div>
               <div class="form-group">
               <label>Image</label>
               <input type="file" name="image4" class="form-control" value="{{old('image4')}}">
                @error("image4")
                  <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("image4","**REQUIRED IMAGE")}}
                  </p>
                  @enderror 
               </div>

                <div class="form-group">
               <label>Image of Team1</label>
               <input type="file" name="image5" class="form-control" value="{{old('image5')}}">
                @error("image5")
                  <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("image5","**REQUIRED IMAGE")}}
                  </p>
                  @enderror 
               </div>
                    <label>Team Detail1</label>
                <div class="form-group">
                   <textarea name="team_detail1" placeholder="Enter Details" class="form-control" rows="3" value="{{old('team_detail1')}}"></textarea>
                   @error("team_detail1")
                  <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("team_detail1","**REQUIRED DETAIL")}}
                  </p>
                  @enderror 
               </div>

               <div class="form-group">
               <label>Image of Team2</label>
               <input type="file" name="image6" class="form-control" value="{{old('image6')}}">
                @error("image6")
                  <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("image6","**REQUIRED IMAGE")}}
                  </p>
                  @enderror 
               </div>
                <label>Team Detail2</label>
                <div class="form-group">
                   <textarea name="team_detail2" placeholder="Enter Details" class="form-control" rows="3" value="{{old('team_detail2')}}"></textarea>
                   @error("team_detail2")
                  <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("team_detail2","**REQUIRED DETAILS")}}
                  </p>
                  @enderror 
               </div>

               <div class="form-group">
               <label>Image of Team3</label>
               <input type="file" name="image7" class="form-control" value="{{old('image7')}}">
                @error("image7")
                  <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("image7","**REQUIRED IMAGE")}}
                  </p>
                  @enderror 
               </div>
               <label>Team Detail3</label>
                <div class="form-group">
                   <textarea name="team_detail3" placeholder="Enter Details" class="form-control" rows="3" value="{{old('team_detail3')}}"></textarea>
                   @error("team_detail3")
                  <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("team_detail3","**REQUIRED DETAILS")}}
                  </p>
                  @enderror 
               </div>
               <div>
                 <input type="submit" name="submit" value="Add" class="btn btn-success">
               </div>
               
               
               </div>
             </div>
           </div>
         
  			
  </form>
</div>
@endsection