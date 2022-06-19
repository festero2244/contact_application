<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>   
    <body>
       
        <div class="container">
        <div class="jumbotron">
                <h1>Welcome To Contact App</h1>
           </div> 
           <a href="{{ url('/') }}" class="btn btn-warning">Home</a>  
           <a href="{{ url('/about') }}" class="btn btn-warning">About</a>  
           <a href="{{ url('/service') }}" class="btn btn-warning">Service</a>  
           <a href="{{ url('/contact/create') }}" class="btn btn-warning">Contact</a> 
      </div>
               @yield('content')
    </br>
    <div class="card bg-light text-dark">
    <div class="card-body">Copyright 2022 webdisgnosis</div>
   </div>

    </body>

<html>