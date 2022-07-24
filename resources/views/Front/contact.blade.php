<!doctype html>
<html lang="en">


<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Contact::Maprolen</title>
    
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
                        <h3>Contact Us</h3>
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
    <!--====== MAP PART ENDS ======-->
    
    <!--====== CONACT PART START ======-->
    
    <section id="contact-part" class="pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="contact-form pt-45">
                        <h6>Leave Reply</h6>
                        <form id="contact-form" action="#" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <label>Nick name :</label>
                                        <input name="name" type="text" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <label>Email Address :</label>
                                        <input type="email" name="email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <label>Write a message :</label>
                                        <textarea name="message" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="singel-form">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-info pt-45">
                        <h6>Contact Info</h6>
                        <p>We are always available to attend to you.</p>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="cont pl-15">
                                    <p>9, Olasehinde Street, Ijapo Estate, Akure, Ondo State.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="cont pl-15">
                                    <p>info@maprolen.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont pl-15">
                                    <p>+23480 33002735</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== ABOUT PART ENDS ======-->
   
   
    
    <!--====== DELIVERY PART ENDS ======-->
   
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
