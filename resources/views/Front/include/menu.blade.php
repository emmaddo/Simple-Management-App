 <header id="header-part">
        <!--===== HEADER TOP START =====-->
        <div class="header-top pt-15 pb-15 d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xl-3">
                        <div class="phone text-center text-lg-left">
                            <p>Phone : (+23480 33002735)</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-6">
                        <div class="opening text-center">
                            <p><i class="fa fa-map-marker"></i>9, Olasehinde Street, Ijapo Estate, Akure, Ondo State.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="address text-center text-lg-right">
                            <p>Opening Hours: 8AM - 8PM. MON - SAT</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> 
        <!--===== HEADER TOP ENDS =====-->
        
        <!--===== NAVBAR START =====-->
        <div class="navigation">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                           
                            <a class="navbar-brand" href="index.html">
                                <img src="front/images/logo.png" alt="Logo">
                            </a> <!-- Logo -->
                            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button> <!-- toggle Button -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a href="{{url('Home')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('AboutUs')}}">About Us</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="{{url('OurProducts')}}">Our Products</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="{{url('ContactUs')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-search">
                                <ul>

                                @if(isset(Auth::user()->email))
<!--Hello {{ Auth::user()->email }}-->
<font color="#ff0000"><a href="{{url('CustomerLogout')}}">Logout</a></font>


@endif

@if(Session::has('message-login'))
<div class="account-popup-area">
        <div class="account-popup-wrapper">
            <div class="account-popup-content">
                <div class="account-top">
                    <div class="account-title">
                        <h3>{{ Session::get('message-login') }}</h3>
                    </div>
                    <a href="javascript:void(0)" class="popup-close">
                        <span></span>
                        <span></span>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
<!--
@if(Session::has('message-login'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message-login') }}</p>
@endif
-->
@endif

@if(Session::has('message-logout'))
<div class="account-popup-area">
        <div class="account-popup-wrapper">
            <div class="account-popup-content">
                <div class="account-top">
                    <div class="account-title">
                        <h3>{{ Session::get('message-logout') }}</h3>
                    </div>
                    <a href="javascript:void(0)" class="popup-close">
                        <span></span>
                        <span></span>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

@endif

                                    <li><a href="#"><i class="fa fa-shopping-basket"></i><span>0</span></a></li>
                                    <li><a id="search" href="#"><i class="fa fa-search"></i></a>
                                        <div class="search-box">
                                            <input type="search" placeholder="Search...">
                                            <button type="button"><i class="fa fa-search"></i></button>
                                        </div> 
                                    </li>
                                </ul>
                            </div> <!-- cart search -->
                        </nav>  <!-- nav -->
                        
                    </div> 
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--===== NAVBAR ENDS =====-->
    </header>