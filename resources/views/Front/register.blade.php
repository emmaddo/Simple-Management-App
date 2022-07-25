<!doctype html>
<html lang="en">


<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Register::Maprolen</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('../front/images/favicon.png')}}" type="image/png">
    
    <!--====== Owl Carousel css ======-->
    <link rel="stylesheet" href="{{asset('../front/css/owl.carousel.min.css')}}">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('../front/css/magnific-popup.css')}}">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('../front/css/slick.css')}}">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{asset('../front/css/nice-select.css')}}">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{asset('../front/css/jquery.nice-number.min.css')}}">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('../front/css/font-awesome.min.css')}}">
    
    <!--====== Aanimate css ======-->
    <link rel="stylesheet" href="{{asset('../front/css/animate.css')}}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('../front/css/bootstrap.min.css')}}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('../front/css/default.css')}}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('../front/css/style.css')}}">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('../front/css/responsive.css')}}">
  
  
</head>

<body>
  
    <!--====== PREALOADER PART START ======-->
    
    <div class="preloader">
        <div class="thecube">
			<div class="cube c1"></div>
			<div class="cube c2"></div>
			<div class="cube c4"></div>
			<div class="cube c3"></div>
        </div>
    </div>
    
    <!--====== PREALOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->
    
    @include('Front/include.menu');
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url(front/images/page-banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content">
                        <h3>Register</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
     <!--====== MAP PART START ======-->
    <!--
    <div class="map-part pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="contact-map"></div>
                </div>
            </div>
        </div>
    </div>
    -->
   <div id="login-part" class="pt-85 pb-80">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10">
                    <div class="login-form text-center">
                        <div class="logo mb-50">
                            <a href="#"><img src="{{asset('../front/images/logo.png')}}" alt="Logo"></a>
                        </div>
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
           
          <form method="POST" action="/postCustomerRegister">
                   @csrf 
                            <div class="singel-form">
                                <input type="text" name="name" placeholder="Full Name ..." required>
                                <span style="color:red">@error('name'){{$message}} @enderror</span> 
                            </div>
                            <div class="singel-form">
                                <input type="text" name="phone" placeholder="Phone Number ..." required>
                                <span style="color:red">@error('phone'){{$message}} @enderror</span> 
                            </div>
                            <div class="singel-form">
                                <input type="email" name="email" placeholder="Enter your email...." required>
                                <span style="color:red">@error('email'){{$message}} @enderror</span> 
                            </div>
                            <div class="singel-form">
                                <input type="password" name="password" placeholder="Enter your Password...." required>
                                <span style="color:red">@error('password'){{$message}} @enderror</span> 
                            </div>
                           <!-- <div class="singel-form">
                               <p>or</p>
                                <ul class="social-loogin pt-15">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i>Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i>Google</a></li>
                                </ul>
                            </div>-->
                            <div class="singel-form pt-30">
                               <button type="submit">Register Now</button>
                            </div>
                            <div class="singel-form pt-25">
                               <ul class="remember">
                                   <li>
                                       <input type="checkbox" name="checkbox" id="checkbox">
                                        <label for="checkbox"><span></span>Remember Me</label>
                                   </li>
                                   <li>
                                       <p>Forgot <a href="#">password?</a></p>
                                   </li>
                               </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
    <!--====== FOOTER PART START ======-->
    
    @include('Front/include.footer');
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top">
        <img src="{{asset('../front/images/back-to-top.png')}}" alt="Icon">
    </a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
	
    
    <!--====== jquery js ======-->
    <script src="{{asset('../front/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('../front/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('../front/js/popper.min.js')}}"></script>
    <script src="{{asset('../front/js/bootstrap.min.js')}}"></script>
    
    <!--====== Owl Carousel js ======-->
    <script src="{{asset('../front/js/owl.carousel.min.js')}}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{asset('../front/js/jquery.magnific-popup.min.js')}}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{asset('../front/js/slick.min.js')}}"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{asset('../front/js/jquery.nice-number.min.js')}}"></script>
    
    <!--====== Nice Select js ======-->
    <script src="{{asset('../front/js/jquery.nice-select.min.js')}}"></script>
    
    <!--====== Validator js ======-->
    <script src="{{asset('../front/js/validator.min.js')}}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{asset('../front/js/ajax-contact.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('../front/js/main.js')}}"></script>

    <!--====== Google Map js ======-->
    <script src="front/https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{asset('../front/js/map-script.js')}}"></script>

</body>



</html>
