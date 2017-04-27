<!DOCTYPE html>
<html lang="en">
<head> 
  @yield('header')  
  <style type="text/css"> 
  .footer {
      position: absolute;
      bottom: 0;
      width: 750px;
      /* Set the fixed height of the footer here */
      height: 60px;
      background-color: #f5f5f5;
    }

    .container .text-muted {
      margin: 20px 0;
    }
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <meta property="fb:admins" content="100006797383542"/>
  <link rel="icon" href="../../favicon.ico">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->  
  </head>
  <body>
    @include('nav')
    <div class="main">
      <div class="container">
        <div class="row">                               
          <div class="col-sm-7 col-md-8" style="border-right: groove;">
            @yield('content')
          </div>        
          <div class="col-sm-5 col-md-4"> 
            <div style="border-bottom:1px solid #ccc; padding-top:10px; padding-bottom:10px;">    
              <center>              
                <img style="width:300px; height:250px; cursor: pointer;" src="../images/iklan.png">
              </center>
            </div>
            <div style="border-bottom:1px solid #ccc; padding-top:10px; padding-bottom:10px;">    
              <center>              
                <img style="width:300px; height:250px; cursor: pointer;" src="../images/iklan.png">
              </center>
            </div>
            <div style="border-bottom:1px solid #ccc; padding-top:10px; padding-bottom:10px;">    
              <center>              
                <img style="width:300px; height:250px; cursor: pointer;" src="../images/iklan.png">
              </center>
            </div>              
          </div>  
        </div>
      </div>
    </div>
  </body>
  <footer class="navbar-fixed-bottom">
  <div class="container-fluid">
    <small class="blur">
      <span class="text-muted pull-left" style="cursor: default;">Created by <a href="https://github.com/Hi-Fiez" target="_blank">Hi-Fiez</a> & <a href="https://github.com/andynl" target="_blank">andynl</a></span>
      <span class="text-muted pull-right">Designed by <a href="https://facebook.com/abdlahafizh">Abdullah Hafizh</a></span>    </small>
    </div>
  </footer>
  <script src="{{ asset('js/script.js') }}"></script>  
  </html>