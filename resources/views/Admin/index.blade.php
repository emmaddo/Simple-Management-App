<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 Crud</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
  <div class="container" style="margin-top:50px">
  <h4>ADD NEW RECORD - LARAVEL CRUD</h4>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
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
            <form action="add" method="post">
              @csrf
                   <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
                  <span style="color:red">@error('name'){{$message}} @enderror</span> 
                  </div>


                  
                   <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    <span style="color:red">@error('email'){{$message}} @enderror</span> 
                  </div>


                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    <span style="color:red">@error('password'){{$message}} @enderror</span> 
                  </div>

                   <div class="form-group">
                    <button type="submit" clase="btn btn-primary btn-block">SAVE</button>
                   </div>
            </form>
        </div>
    </div>
  </div>  
</body>
</html>