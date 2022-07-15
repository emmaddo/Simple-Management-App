 <!-- Left Sidebar start-->
 <div class="side-menu-fixed">
        <div class="scrollbar side-menu-bg">
          <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li>
              <a href="Dashboard"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span> </a>
            </li>
            
            
            <!-- menu item Elements-->
            <li>
              <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#elements">
                <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">Registrations</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
              </a>
              <ul id="elements" class="collapse" data-bs-parent="#sidebarnav">
                <li><a href="RegAdmin">Register Admin</a></li>
                <li><a href="RegCustomer">Register Customer</a></li>
                <li><a href="ViewRegAdmin">View Admins</a></li>
                <li><a href="ViewRegCustomer">View Customers</a></li>
                <li><a href="RegExpenses">Make Expenses</a></li>
               
              </ul>
            </li>
            <!-- menu item calendar-->
            <li>
              <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#calendar-menu">
                <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">Products</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
              </a>
              <ul id="calendar-menu" class="collapse" data-bs-parent="#sidebarnav">
                <li> <a href="RegProducts">View/Add Products </a> </li>
                <li> <a href="calendar-list.html">List Calendar</a> </li>
              </ul>
            </li>
            <!-- menu item todo-->
            

            <li>
              <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#font-icon">
                <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Sales Report</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
              </a>
              <ul id="font-icon" class="collapse" data-bs-parent="#sidebarnav">
                <li> <a href="completedsales">Completed Sales</a> </li>
                <li> <a href="pendingsales">Pending Sales</a> </li>
                
              </ul>
            </li>

            <li>
              <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#chart">
                <div class="pull-left"><i class="ti-pie-chart"></i><span class="right-nav-text">Account/Reports</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
              </a>
              <ul id="chart" class="collapse" data-bs-parent="#sidebarnav">
                <li> <a href="salesreport">Sales Report</a> </li>
                <li> <a href="pendingreport">Pending Sales Report</a> </li>
                <li> <a href="expensesreport">Expenses Report</a> </li>
              </ul>
            </li>

            <!-- menu font icon-->
           
          
          
          </ul>
        </div>
      </div>
      <!-- Left Sidebar End-->