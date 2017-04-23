@if (Auth::guest())
<meta http-equiv="refresh" content="0; url=/entry" />
@else
<!DOCTYPE html>
<html lang="en">
<head>
  <title>
   Upload 69CUK For Adult Only
 </title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="icon" href="../../favicon.ico">

 <!--Import Bootstrap-->
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->  
    </head>
    <body>
      @include('navbar')
      <div class="container">
        <div class="row">
          <legend><h1><b>Upload</b></h1></legend>
          <div class="col-md-12">
            <p></p>
            <form class="form-horizontal" method="post" action="{{url('upload/save')}}" enctype="multipart/form-data">

              <div class="form-group">
                <label class="control-label col-sm-1" for="judul">Title</label>
                <div class="col-sm-10">        
                  <input id="judul" type="text" class="validate" name="judul" style="width: 100%;">          
                </div>        
              </div>

              <div class="form-group">
                <label class="control-label col-sm-1" for="isi">Content</label>
                <div class="col-sm-10">
                  <textarea id="isi" type="text" class="textarea" name="isi" style="width: 100%;"></textarea>        
                </div>        
              </div>

              <div class="form-group">
                <label class="control-label col-sm-1" for="isi">Image</label>
                <div class="col-sm-3">                
                  <p></p>
                  <input type="file" name="sampul">
                </div>      
              </div>    
              <hr>
              <div class="col-sm-2 pull-right">      
                <button type="submit" class="btn btn-inverse" style="width: 100%;">Save</button>    
              </div>    

              <input type="hidden" name="_token" value="{{csrf_token()}}">    
              
            </form>
            <div class="col-sm-2"></div>
          </div>    
        </div>
      </div>
      @endif