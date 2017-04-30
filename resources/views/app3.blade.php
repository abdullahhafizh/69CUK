<!DOCTYPE html>
<html lang="en">
<head> 
  @yield('header')  
  <style type="text/css">
    .blur{
      color: #aaa;}        
      #share-buttons img {
        width: 30px;      
        border: 0;
        box-shadow: 0;
        display: inline;      
      }
      img {
        background-color: transparent;
        background: transparent;
      }
      .ads {      
        position: fixed;
      }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">  
    <meta property="fb:app_id" content="811275922366061"/>
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
      @include('akin.nav')      
      <div class="main">
        <div class="container">
          <div class="row">                               
            <div class="col-sm-7 col-md-8" style="border-right: groove;">
              <div style="height: 14px;"></div>
              @yield('content')
              <div style="padding-bottom: 10px;">
                <table width="100%" border="0">
                  <tbody>
                    <tr>
                      <td width="50%" align="left" style="padding-top: 10px; padding-bottom: 10px;">
                        <center>              
                          @include('akin.ad')
                        </center>
                      </td>
                      <td width="50%" align="right" style="padding-top: 10px; padding-bottom: 10px;"  >
                        <center> 
                          @include('akin.ad')             
                        </center>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>        
            <div class="col-sm-5 col-md-4">
              <div class="ads">            
                <div style="border-bottom:1px solid #ccc; padding-top:10px; padding-bottom:10px;">
                  <center>
                    @include('akin.ad')
                  </center>
                </div>
                <div style="border-bottom:1px solid #ccc; padding-top:10px; padding-bottom:1px;">
                  <div><a href="https://twitter.com/abdullahafizh" class="twitter-follow-button" data-show-screen-name="false" data-show-count="true"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>
                  <div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/106912665980794449409" data-rel="author"></div>                  
                  <div><center><small>
                    <a href="/terms" class="blur">Terms</a> <a class="blur">-</a> <a href="/privacy" class="blur">Privacy</a></small>
                  </center>
                </div>
              </div>                
              <div style="border-bottom:1px solid #ccc; padding-top:10px; padding-bottom:10px;">
                <center>             
                  @include('akin.ad') 
                </center>
              </div>                
              <div style="height: auto;"></div>
            </div>  
          </div>
        </div>
      </div>
    </div>
    <script src="https://apis.google.com/js/platform.js" async defer>
      {lang: 'id'}
    </script>
    <script src="{{ asset('js/script.js') }}"></script>  
  </body>        
  </html>