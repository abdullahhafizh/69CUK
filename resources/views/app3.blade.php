<!DOCTYPE html>
<html lang="en">
<head> 
	@yield('header')	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">	
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
  				<div class="col-sm-7 col-md-8">
  					@yield('content')
  				</div>  			
  				<div class="col-sm-5 col-md-4" style="border-left: groove;">
  					<center>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  						<h1>IKLAN</h1>
  					</center>
  				</div>  
  			</div>
  		</div>
  	</div>
  </body>
  <script src="{{ asset('js/script.js') }}"></script>  
  </html>