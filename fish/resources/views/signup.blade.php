
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div style="float:right;width:70%">
        <div class="row">
          <!-- left column -->
          
          <div class="col-md-6">
            <!-- general form elements -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">SIGNUP</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" action="/signup_insrt">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="first name">Enter Your First Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="Enter First Name" value="{{old('fname')}}">
                    @error('fname')
                    <p style="color: red;font-size: 15px;font-family: serif;">{{$errors->first("fname","**REQUIRED FIRST NAME")}}</p>
                    @enderror
                  </div>
                   <div class="form-group">
                    <label for="last name">Enter Your Last Name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" value="{{old('lname')}}">
                    @error("lname")
                   <p style="color: red;font-size: 15px;font-family: serif;">{{$errors->first("lname","**REQUIRED LAST NAME")}}</p>
                   @enderror
                  </div>
                  <div class="form-group">
                    <label for="mobile number">Enter Your Mobile Number</label>
                    <input type="text" class="form-control" name="mob_no" placeholder="Enter Mobile Number" value="{{old('mob_no')}}">
                    @error("mob_no")
                    <p style="color: red;font-size: 15px;font-family: serif;">{{$errors->first("mob_no","**REQUIRED MOBILE NUMBER")}}</p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email id">Enter Your Email ID</label>
                    <input type="email" class="form-control" name="email_id" placeholder="Enter Email" value="{{old('email_id')}}">
                    @error("email_id")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("email_id","**REQUIRED EMAIL ID")}}
                  </p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="house name">House Name/No</label>
                    <input type="text" class="form-control" name="h_name" placeholder="Enter House Name/No" value="{{old('h_name')}}">
                    @error("h_name")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("h_name","**REQUIRED HOUSE NAME/NO.")}}
                  </p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="">Enter Your Land Mark</label>
                    <input type="text" class="form-control" name="l_mark" placeholder="Enter Land Mark" value="{{old('l_mark')}}">
                    @error("l_mark")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("l_mark","**REQUIRED LAND MARK")}}
                  </p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="city">Enter Your City</label>
                    <input type="text" class="form-control" name="city" placeholder="Enter City" value="{{old('city')}}">
                    @error("city")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("city","**REQUIRED CITY")}}
                  </p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="state">Enter Your State</label>
                    <input type="text" class="form-control" name="state" placeholder="Enter State" value="{{old('state')}}">
                    @error("state")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("state","**REQUIRED STATE")}}
                  </p>
                    @enderror
                  </div> 
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                    @error("pwd")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("pwd","**REQUIRED PASSWORD")}}
                  </p>
                    @enderror
                  </div>
                   <div class="form-group">
                    <label for="confirm password">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    @error("password_confirmation")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                    {{$errors->first("password_confirmation","**CONFIRM PASSWORD")}}
                  </p>
                    @enderror
                  </div>

                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
             </div>
             <div style="float: left;width:30%;">
               <img src="images\signup_fish.jpg" style="width:300%;height:300%;">
             </div>
            </div>
          </section>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
