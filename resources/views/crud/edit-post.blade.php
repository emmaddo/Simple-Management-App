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
  <h4>EDIT RECORD</h4>
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
          
            <form action="/update-records" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$editpost->id}}">
                   <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$editpost->name}}" >
                  
                  </div>


                   <div class="form-group">
                    <label for="">Color</label>
                    <input type="text" class="form-control" name="favoritecolor" placeholder="Enter Favorite Color" value="{{$editpost->favoritecolor}}" >
                    
                  </div>

                   <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$editpost->email}}">
                    
                  </div>

                   <div class="form-group">
                    <button type="submit" clase="btn btn-primary btn-block">EDIT</button>
                   </div>
            </form>
        </div>
    </div>
  </div>  
</body>
</html>