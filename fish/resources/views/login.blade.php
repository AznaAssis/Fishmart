
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
                <h3 class="card-title">LOGIN </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="check_login">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email_id" placeholder="Enter email" value="{{old('email_id')}}">
                    @error("email_id")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                      {{$errors->first("email_id","**REQUIRED EMAIL id")}}
                    </p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" value="{{old('pwd')}}">
                    @error("pwd")
                    <p style="color: red;font-size: 15px;font-family: serif;">
                      {{$errors->first("pwd","**REQUIRED PASSWORD")}}
                    @enderror
                  </div>
                  
                <!-- /.card-body -->
                @if(session()->has('message'))
                <div class="alert alert-success" style="color: red;font-size:15px;font-family: serif;">
                {{session()->get('message')}}
                </div>
               @endif

                <div class="card-footer">
                  <input type="submit" name="submit" value="Log In" class="btn btn-primary">
                </div>

                  <div class="form-group">
                    <a href="/signup">SignUp</a>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
             </div>
             <div style="float: left;width:30%;">
               <img src="images\login_fish.jpg" style="width:300%;height:300%;">
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
