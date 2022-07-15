<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Maprolen" />
<meta name="description" content="Maprolen Water Company" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Welcome::Dashboard</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="css/style.css" />


</head>

<body>

  <div class="wrapper">

    <!--=================================
    preloader -->
    <div id="pre-loader">
      <img src="images/pre-loader/loader-01.svg" alt="">
    </div>
    <!--=================================
    preloader -->

   <!-- header starts here -->
@include('Admin/include.header');
   
   <!-- header ends here -->

    <!--=================================
    Main content -->

    <div class="container-fluid">

     <!-- Sidebar starts here -->
     @include('Admin/include.sidebar');
	 <!-- sidebar ends here -->

      <!--=================================
      wrapper -->
      <div class="content-wrapper">
        <div class="page-title">
          <div class="row">
            <div class="col-sm-6">
              <h4 class="mb-0"> 
@if(isset(Auth::user()->email))
Welcome {{ Auth::user()->email }}
@else
    <script>window.location="login";</script>
@endif

              </h4>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                <li class="breadcrumb-item"><a href="index.html" class="default-color">Home</a></li>
                
              </ol>
            </div>
          </div>
        </div>
        <!-- widgets -->
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-md-6 mb-20">
            <div class="card card-statistics h-100">
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-start">
                    <span class="text-danger">
                      <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="float-end text-end">
                    <p class="card-text text-dark">Customers</p>
                    <h4>{{ $customerCount }}</h4>
                  </div>
                </div>
                <p class="text-muted pt-3 mb-0 mt-2 border-top">
                  <i class="fa fa-exclamation-circle me-1" aria-hidden="true"></i> 81% lower growth
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 mb-20">
            <div class="card card-statistics h-100">
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-start">
                    <span class="text-warning">
                      <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="float-end text-end">
                    <p class="card-text text-dark">Orders</p>
                    <h4>656</h4>
                  </div>
                </div>
                <p class="text-muted pt-3 mb-0 mt-2 border-top">
                  <i class="fa fa-bookmark-o me-1" aria-hidden="true"></i> Total sales
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 mb-20">
            <div class="card card-statistics h-100">
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-start">
                    <span class="text-success">
                      <i class="fa fa-dollar highlight-icon" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="float-end text-end">
                    <p class="card-text text-dark">Revenue</p>
                    <h4>$65656</h4>
                  </div>
                </div>
                <p class="text-muted pt-3 mb-0 mt-2 border-top">
                  <i class="fa fa-calendar me-1" aria-hidden="true"></i> Sales Per Week
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 mb-20">
            <div class="card card-statistics h-100">
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-start">
                    <span class="text-primary">
                      <i class="fa fa-twitter highlight-icon" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="float-end text-end">
                    <p class="card-text text-dark">Followers</p>
                    <h4>62,500+</h4>
                  </div>
                </div>
                <p class="text-muted pt-3 mb-0 mt-2 border-top">
                  <i class="fa fa-repeat me-1" aria-hidden="true"></i> Just Updated
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Orders Status widgets-->
        <div class="row">
          <div class="col-xl-4 mb-20">
            <div class="card card-statistics h-100">
              <!-- action group -->
              <div class="btn-group info-drop">
                <button type="button" class="dropdown-toggle-split text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                  <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View all</a>
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title">Market summary</h5>
                <h4>$50,500 </h4>
                <div class="row mt-20">
                  <div class="col-4">
                    <h6>Apple</h6>
                    <b class="text-info">+ 82.24 % </b>
                  </div>
                  <div class="col-4">
                    <h6>Instagram</h6>
                    <b class="text-danger">- 12.06 % </b>
                  </div>
                  <div class="col-4">
                    <h6>Google</h6>
                    <b class="text-warning">+ 24.86 % </b>
                  </div>
                </div>
              </div>
              <div id="sparkline2" class="scrollbar-x text-center"></div>
            </div>
          </div>
          <div class="col-xl-8 mb-20">
            <div class="card h-100">
              <div class="btn-group info-drop">
                <button type="button" class="dropdown-toggle-split text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                  <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View all</a>
                </div>
              </div>
              
        <div class="row">
          <div class="col-xl-4 mb-20">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Customer Feedback  </h5>
                <div class="row mb-30">
                  <div class="col-md-6">
                    <div class="clearfix">
                      <p class="mb-10 float-start">Positive</p>
                      <i class="mb-10 text-success float-end fa fa-arrow-up"> </i>
                    </div>
                    <div class="progress progress-small">
                      <div class="skill2-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="mt-10 text-success">8501</h4>
                  </div>
                  <div class="col-md-6">
                    <div class="clearfix">
                      <p class="mb-10 float-start">Negative</p>
                      <i class="mb-10 text-danger float-end fa fa-arrow-down"> </i>
                    </div>
                    <div class="progress progress-small">
                      <div class="skill2-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="mt-10 text-danger">3251</h4>
                  </div>
                </div>
                <div class="chart-wrapper" style="width: 100%; margin: 0 auto;">
                  <div id="canvas-holder">
                    <canvas id="canvas3" width="550"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-7">
                    <div class="active-user">
                      <div class="row">
                        <div class="col-md-4">
                          <h5>Right now </h5>
                          <span class="text-danger">9</span>
                        </div>
                        <div class="col-md-8">
                          <h5>Active users on site</h5>
                          <div class="clearfix">
                            <p class="mb-10 float-start">Desktop </p>
                            <p class="mb-10 float-end">Mobile</p>
                          </div>
                          <div class="progress progress-small">
                            <div class="skill2-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="skill2-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive mb-10">
                      <table class="table center-aligned-table">
                        <thead>
                          <tr class="text-dark">
                            <th>No </th>
                            <th>Contrary </th>
                            <th>2016</th>
                            <th>2017</th>
                            <th>Change</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><i class="fa fa-circle text-success"></i></td>
                            <td>USA</td>
                            <td>2,009 </td>
                            <td>5,230</td>
                            <td>8.01% <i class="fa fa-level-up text-success"></i></td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-circle text-info"></i></td>
                            <td>India</td>
                            <td>2,609</td>
                            <td>2,430</td>
                            <td>7.01% <i class="fa fa-level-down text-warning"></i></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div id="sparkline2" class="scrollbar-x text-center"></div>
                  </div>
        </div>
        
          
          </div>
        </div>
        

        <!-- footer starts here -->
@include('Admin/include.footer');
        <!-- footer ends here -->
      </div>
      <!--=================================
      wrapper -->
    </div>
    <!--=================================
    Main content -->
  </div>

  <!--=================================
   jquery -->

  <!-- jquery -->
  <script src="js/jquery-3.6.0.min.js"></script>

  <!-- plugins-jquery -->
  <script src="js/plugins-jquery.js"></script>

  <!-- plugin_path -->
  <script>var plugin_path = 'js/index.html';</script>

  <!-- chart -->
  <script src="js/chart-init.js"></script>

  <!-- calendar -->
  <script src="js/calendar.init.js"></script>

  <!-- charts sparkline -->
  <script src="js/sparkline.init.js"></script>

  <!-- charts morris -->
  <script src="js/morris.init.js"></script>

  <!-- datepicker -->
  <script src="js/datepicker.js"></script>

  <!-- sweetalert2 -->
  <script src="js/sweetalert2.js"></script>

  <!-- toastr -->
  <script src="js/toastr.js"></script>

  <!-- validation -->
  <script src="js/validation.js"></script>

  <!-- lobilist -->
  <script src="js/lobilist.js"></script>

  <!-- custom -->
  <script src="js/custom.js"></script>

</body>

</html>
