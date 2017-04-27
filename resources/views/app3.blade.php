<!DOCTYPE html>
<html lang="en">
<head> 
  @yield('header')  
  <style type="text/css">
    #share-buttons img {
      width: 30px;      
      border: 0;
      box-shadow: 0;
      display: inline;
    }
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">  
  <meta property="fb:app_id" content="100006797383542"/>
  <meta property="fb:admins" content="100006797383542"/>
  <link rel="icon" href="../../favicon.ico">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
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
                  <a href="/password" target="blank"><img style="width:300px; height:250px; cursor: pointer;" src="../images/iklan.png"></a>
                </center>
              </div>
              <div style="border-bottom:1px solid #ccc; padding-top:10px; padding-bottom:10px;">    
                <center>              
                  <a href="/password" target="blank"><img style="width:300px; height:250px; cursor: pointer;" src="../images/iklan.png"></a>
                </center>
              </div>
              <div style="border-bottom:1px solid #ccc; padding-top:10px; padding-bottom:10px;">    
                <center>              
                  <a href="/password" target="blank"><img style="width:300px; height:250px; cursor: pointer;" src="../images/iklan.png"></a>
                </center>
              </div>              
            </div>  
          </div>
        </div>
      </div>
    </body>    
    <script src="{{ asset('js/script.js') }}"></script>  
    </html>