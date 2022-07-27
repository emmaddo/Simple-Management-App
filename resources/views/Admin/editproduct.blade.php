<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 5 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Edit Product</title>

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
            Edit Product

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
        <div class="col-xl-12 mb-30">

        <div class="card card-statistics mb-30">
              <div class="card-body">
                <h5 class="card-title">Edit Products</h5>
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
                <form method="POST" action="/Admin/updateproduct/{{$editproduct->id}}" enctype="multipart/form-data">
                   @csrf
                   
                   <center><img src="{{ url('../storage/front/images/product/'.$editproduct->image_name) }}"
 style="height: 100px; width: 150px;"></center>
                  <div class="mb-3">
                    <label class="form-label" for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name" value="{{$editproduct->name}}" class="form-control" placeholder="Product Name">
 </div>
                  
                  <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">Product Price</label>
                    <input type="price" name="price" value="{{$editproduct->price}}" class="form-control" placeholder="Enter Price">
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">Product Description</label>
                    <input type="text" name="description" value="{{$editproduct->description}}" class="form-control" placeholder="Enter Product Description">
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">Product Image</label>
                    <input type="file" name="image_name" class="form-control" placeholder="Select Image" >
                    <span style="color:red">@error('image_name'){{$message}} @enderror</span> 
                  </div>
                  
                  
                  <button type="submit" class="btn btn-primary">Edit Product</button>
                </form>
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
