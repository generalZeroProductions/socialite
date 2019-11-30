<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    .box{
        width:600px;
        margin:0 auto;
        border:1px solid #ccc;
    }
     </style>
</head>
<body>
    <br />
    <div class="container box"> 
    <h3 align="center"> Succesfully Logged in</h3>
    <br />
    
     @if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block">
    <strong>{{ Auth::user()->email }}</strong>
      <br />
      <a href= "{{url('main/logout') }}"> Logout </a>
    </div>
    @else <script>window.location="/main";</script>
    @endif
    </div>
</body>
</html>