<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Contacts</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h4>List of all Contacts</h4>
    <table>
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Color</td>
    <td>Email</td>
</tr>

@foreach($posts as $post)
<tr>
    <td>{{$post->id}}</td>
    <td>{{$post->name}}</td>
    <td>{{$post->favoritecolor}}</td>
    <td>{{$post->email}}</td>
</tr>
@endforeach

    </table>
</div> 
</body>
</html>