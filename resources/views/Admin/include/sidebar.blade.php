 <!-- Left Sidebar start-->
 <div class="side-menu-fixed">
        <div class="scrollbar side-menu-bg">
          <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li>
              <a href="{{url('Admin/Dashboard')}}"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span> </a>
            </li>
            
            
            <!-- menu item Elements-->
            <li>
              <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#elements">
                <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">Registrations</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
              </a>
              <ul id="elements" class="collapse" data-bs-parent="#sidebarnav">
              
                <li><a href="{{url('Admin/RegAdmin')}}">Register Admin</a></li>
                <li><a href="{{url('Admin/RegCustomer')}}">Register Customer</a></li>
                <li><a href="{{url('Admin/ViewRegAdmin')}}">View Admins</a></li>
                <li><a href="{{url('Admin/ViewRegCustomer')}}">View Customers</a></li>
                <li><a href="{{url('Admin/RegExpenses')}}">Make Expenses</a></li>
               
              </ul>
            </li>
            <!-- menu item calendar-->
            <li>
              <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#calendar-menu">
                <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">Products</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
              </a>
              <ul id="calendar-menu" class="collapse" data-bs-parent="#sidebarnav">
                <li> <a href="{{url('Admin/RegProducts')}}">View/Add Products </a> </li>
                
              </ul>
            </li>
            <!-- menu item todo-->
            

            <li>
              <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#font-icon">
                <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Sales Report</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
              </a>
              <ul id="font-icon" class="collapse" data-bs-parent="#sidebarnav">
                <li> <a href="#">Completed Sales</a> </li>
                <li> <a href="#">Pending Sales</a> </li>
                
              </ul>
            </li>

            <li>
              <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#chart">
                <div class="pull-left"><i class="ti-pie-chart"></i><span class="right-nav-text">Account/Reports</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
              </a>
              <ul id="chart" class="collapse" data-bs-parent="#sidebarnav">
                <li> <a href="#">Sales Report</a> </li>
                <li> <a href="#">Pending Sales Report</a> </li>
                <li> <a href="#">Expenses Report</a> </li>
              </ul>
            </li>

            <!-- menu font icon-->
           
          
          
          </ul>
        </div>
      </div>
      <!-- Left Sidebar End-->