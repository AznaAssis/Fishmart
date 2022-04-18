@extends("USER.header");
@section('body')

<div class="wrapper">
  <!-- Navbar -->
  
    <!-- Main content -->
    <section class="content">
      
        <div class="row">
          <!-- left column -->
          
          <div class="col-md-6">
            <!-- general form elements -->

            <div class="card card-primary">
              <div class="card-header" style="background-color: blue;">
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($data as $value)
              <form  method="post" action="/edit_address">
                @csrf
                <div class="form-group">
                    <label for="house name"><b>House Name/No</b></label>
                    <input type="text" class="form-control" name="h_name" placeholder="Enter House Name/No" value="{{$value->h_name}}">
                    @error("h_name")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("h_name","**REQUIRED HOUSE NAME/NO.")}}
                  </p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for=""><b>Enter Your Land Mark</b></label>
                    <input type="text" class="form-control" name="l_mark" placeholder="Enter Land Mark" value="{{$value->l_mark}}">
                    @error("l_mark")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("l_mark","**REQUIRED LAND MARK")}}
                  </p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="city"><b>Enter Your City</b></label>
                    <input type="text" class="form-control" name="city" placeholder="Enter City" value="{{$value->city}}">
                    @error("city")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("city","**REQUIRED CITY")}}
                  </p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="state"><b>Enter Your State</b></label>
                    <input type="text" class="form-control" name="state" placeholder="Enter State" value="{{$value->state}}">
                    @error("state")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("state","**REQUIRED STATE")}}
                  </p>
                    @enderror
                  </div>
                  
                <div class="card-body">
                  <div class="form-group">
                    <label for="mobile number"><b>Enter Your Mobile Number</b></label>
                    <input type="text" class="form-control" name="mob_no" placeholder="Enter Mobile Number" value="{{$value->mob_no}}">
                    @error("mob_no")
                    <p style="color: red;font-size: 15px;font-family: serif;">{{$errors->first("mob_no","**REQUIRED MOBILE NUMBER")}}</p>
                    @enderror
                  </div>
                  
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
              @endforeach
            </div>
            <!-- /.card -->
          </div>
        </div>
            
          </section>
       </div>
<!-- ./wrapper -->

<!-- jQuery -->
@endsection