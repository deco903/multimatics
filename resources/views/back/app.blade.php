<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{url('dashboard')}}">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="{{request()->is('training1') ? 'active' :''}}"><a href="{{url('training1')}}">Training 1</a></li>
        <li class="{{request()->is('training2') ? 'active' :''}}"><a href="{{url('training2')}}">Trainig2</a></li>
        <li class="{{request()->is('training3') ? 'active' :''}}"><a href="{{url('training3')}}">training3</a></li>
</ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/logout')}}"><span></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

@yield('isi')



<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
