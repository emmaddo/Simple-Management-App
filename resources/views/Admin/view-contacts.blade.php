<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Contacts</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }

        td{
            border: 1px solid;
            padding: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h4>List of all Contacts</h4>
    @if ($message = Session::get('message'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ Auth::user()->email }} {{ $message }}</strong>
</div>
@endif

@if(isset(Auth::user()->email))
<div class="alert alert-danger success-block">
Welcome {{ Auth::user()->email }}
    </div>
    <br>
    <a href="{{url('logout')}}">Logout</a>
    @else
    <script>window.location="login";</script>
@endif

    <br><br><a href="/crud">Add New Contact</a>
    <hr>
    @if(Session::get('deleted'))
            <div class="alert alert-success">

            {{Session::get('deleted')}}
            </div>
          @endif

          @if(session::get('notedeleted'))
            <div class="alert alert-danger">

            {{session::get('notedeleted')}}
            </div>
          @endif
    <table>
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Color</td>
    <td>Email</td>
    <td>Action</td>
</tr>

@foreach($posts as $post)
<tr>
    <td>{{$post->id}}</td>
    <td>{{$post->name}}</td>
    <td>{{$post->favoritecolor}}</td>
    <td>{{$post->email}}</td>
    <td><a href="/edit-post/{{$post->id}}" class="btn btn-primary">Edit</button></a>   <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</button></a></td>
</tr>
@endforeach

    </table>
</div> 
</body>
</html>