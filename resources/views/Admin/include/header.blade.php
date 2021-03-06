 <!--=================================
    header start-->

    <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <!-- logo -->
      <div class="text-start navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('../images/logo-dark.png')}}" alt="" ></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-icon-dark.png" alt=""></a>
      </div>
      <!-- Top bar left -->
      <ul class="nav navbar-nav me-auto">
        <li class="nav-item">
          <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
        </li>
        <li class="nav-item">
          <div class="search">
            <a class="search-btn not_click" href="javascript:void(0);"></a>
            <div class="search-box not-click">
              <input type="text" class="not-click form-control" placeholder="Search" value="" name="search">
              <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
            </div>
          </div>
        </li>
      </ul>
      <!-- top bar right -->
      <ul class="nav navbar-nav ms-auto">
        <li class="nav-item fullscreen">
          <a id="btnFullscreen" href="#" class="nav-link" ><i class="ti-fullscreen"></i></a>
        </li>
        
        
        <li class="nav-item dropdown mr-30">
          <a class="nav-link nav-pill user-avatar" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="{{asset('../images/profile-avatar.jpg')}}" alt="avatar">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header">
              <h5 class="mt-0 mb-0">
                
@if(isset(Auth::user()->email))
{{ Auth::user()->name }}
@else
<script>window.location="login";</script>
@endif

              
            
            </h5>
              <span>
              @if(isset(Auth::user()->email))
{{ Auth::user()->email }}
@else
<script>window.location="login";</script>
@endif
              
              </span>
            </div>
            <div class="dropdown-divider"></div>
           <!-- <a class="dropdown-item" href="#"><i class="text-secondary ti-reload"></i>Activity</a>
            <a class="dropdown-item" href="#"><i class="text-success ti-email"></i>Messages</a>
            <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>Profile</a>
            <a class="dropdown-item" href="#"><i class="text-dark ti-layers-alt"></i>Projects <span class="badge bg-info">6</span> </a>-->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>Profile</a>
            <a class="dropdown-item" href="{{url('../logout')}}"><i class="text-danger ti-unlock"></i>Logout</a>
          </div>
        </li>
      </ul>
    </nav>
    <!--=================================
    header End-->