<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 5 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Completed Sales</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

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

    <!--=================================
   
@include('Admin/include.header');
    <!--=================================
    Main content -->
    <div class="container-fluid">
      <!-- Left Sidebar -->
      @include('Admin/include.sidebar');
      <!-- Left Sidebar End-->

      <!--=================================
      wrapper -->
      <div class="content-wrapper">
        <div class="page-title">
          <div class="row">
            <div class="col-sm-6">
              <h4 class="mb-0"> 
              Products

              </h4>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                <li class="breadcrumb-item"><a href="{{url('Admin/Dashboard')}}" class="default-color">Dashboard</a></li>
                
              </ol>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-xl-6 mb-30">

        <div class="card card-statistics mb-30">
              <div class="card-body">
                <h5 class="card-title">Add Product</h5>
                <form>
                  <div class="mb-3">
                    <label class="form-label" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
</div>


<div class="col-xl-6 mb-30">

<div class="card card-statistics h-100">
              <div class="card-body">
                <div class="d-block d-md-flex justify-content-between">
                  <div class="d-block">
                    <h5 class="card-title pb-0 border-0">All Products</h5>
                  </div>
                  <div class="d-block d-md-flex clearfix sm-mt-20">
                    <div class="clearfix">
                      <div class="box">
                        <select class="fancyselect sm-mb-20 mr-20">
                          <option value="1">Some option</option>
                          <option value="2">Another option</option>
                          <option value="3">A option</option>
                          <option value="4">Potato</option>
                        </select>
                      </div>
                    </div>
                    <div class="widget-search ms-0 clearfix">
                      <i class="fa fa-search"></i>
                      <input type="search" class="form-control" placeholder="Search....">
                    </div>
                  </div>
                </div>
                <div class="table-responsive mt-20">
                  <table class="table center-aligned-table">
                    <thead>
                      <tr class="text-dark">
                        <th>Image</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Category</th>
                        
                        <th>  </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <img class="img-fluid avatar-small" src="images/team/05.jpg" alt=""> </td>
                        <td>Felica Queen</td>
                        
                        <td>
                          <span class="text-warning">Graphic Designer </span>
                        </td>
                        <td>
                          <b><i class="pe-2 fa fa-circle text-warning"></i> Friends</b>
                        </td>
                        <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                      </tr>
                      
                      
                    </tbody>
                  </table>
                </div>
                <div class="sm-mt-20">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item "><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>   
</div>
          
        </div>

        <!--=================================
        footer -->
        @include('Admin/include.footer');
        <!--=================================
        footer -->
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
