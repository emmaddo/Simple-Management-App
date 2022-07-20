<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Maprolen" />
<meta name="description" content="Maprolen" />
<meta name="author" content="ermsapp@gmail.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Login::Maprolen</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('../images/favicon.ico')}}" />

<!-- Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->

<link rel="stylesheet" type="text/css" href="{{asset('../css/style.css')}}" />

</head>

<body>

  <div class="wrapper">

    <!--=================================
    preloader -->
            <div id="pre-loader">
      <img src="{{asset('../images/pre-loader/loader-01.svg')}}" alt="">
    </div>
    <!--=================================
    preloader -->
    
    
    <!--=================================
    login-->
    <section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url(../images/login-bg.jpg);" >
      <div class="container">
        <div class="row justify-content-center g-0 vertical-align">
          <div class="col-lg-4 col-md-6 login-fancy-bg bg" style="background-image: url(../images/login-inner-bg.jpg);">
            <div class="login-fancy">
              <h2 class="text-white mb-20">Maprolen</h2>
              <p class="mb-20 text-white">Welcome to Maprolen Water and Nylon Factory</p>
             <!-- <ul class="list-unstyled  pos-bot pb-30">
                <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
                <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
              </ul>-->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 bg-white">
            <div class="login-fancy pb-40 clearfix">
              <h3 class="mb-30">Sign In To Admin</h3>
              <hr>
          @if(isset(Auth::user()->email))
<script>window.location="Dashboard";</script>
  @endif

          @if(Session::get('success'))
            <div class="alert alert-success">

            {{Session::get('success')}}
            </div>
          @endif

          @if(session::get('fail'))
            <div class="alert alert-danger">

            {{session::get('fail')}}
            </div>
          @endif
              <form action="checklogin" method="post">
                @csrf
              <div class="section-field mb-20">
                <label class="mb-10" for="name">Email* </label>
                <input id="name" name="email" class="web form-control" type="email" placeholder="Enter Email" required>
                <span style="color:red">@error('email'){{$message}} @enderror</span> 
              </div>
              <div class="section-field mb-20">
                <label class="mb-10" for="Password">Password* </label>
                <input id="Password" class="Password form-control" type="password" placeholder="Enter Password" name="password" required>
                <span style="color:red">@error('password'){{$message}} @enderror</span>
              </div>
              <div class="section-field">
                <div class="remember-checkbox mb-30">
                  <input type="checkbox" class="form-control" name="" />
                  <label for="two"> Remember me</label>
                  <a href="#" class="float-end">Forgot Password?</a>
                </div>
              </div>

              
                   <button type="submit" class="button">Login</button><i class="fa fa-check"></i>
                  
             <!-- <a href="#" class="button">
                <span>Log in</span>
                <i class="fa fa-check"></i>
              </a>-->
            </form>
              <p class="mt-20 mb-0">Don't have an account? <a href="#"> Create one here</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    login-->
  </div>

  <!--=================================
   jquery -->

  <!-- jquery -->
  <script src="{{asset('../js/jquery-3.6.0.min.js')}}"></script>

  <!-- plugins-jquery -->
  <script src="{{asset('../js/plugins-jquery.js')}}"></script>

  <!-- plugin_path -->
  <script>var plugin_path = 'js/index.html';</script>

  <!-- chart -->
  <script src="{{asset('../js/chart-init.js')}}"></script>

  <!-- calendar -->
  <script src="{{asset('../js/calendar.init.js')}}"></script>

  <!-- charts sparkline -->
  <script src="{{asset('../js/sparkline.init.js')}}"></script>
  <!-- charts morris -->
  <script src="{{asset('../js/morris.init.js')}}"></script>

  <!-- datepicker -->
  <script src="{{asset('../js/datepicker.js')}}"></script>

  <!-- sweetalert2 -->
  <script src="{{asset('../js/sweetalert2.js')}}"></script>

  <!-- toastr -->
  <script src="{{asset('../js/toastr.js')}}"></script>

  <!-- validation -->
  <script src="{{asset('../js/validation.js')}}"></script>

  <!-- lobilist -->
  <script src="{{asset('../js/lobilist.js')}}"></script>
  <!-- custom -->
  <script src="{{asset('../js/custom.js')}}"></script>

</body>

</html>
