<style type="text/css">
  body {
    padding-top: 50px;
  }
</style>
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
@if (Auth::check())
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="-webkit-box-shadow: 0 8px 6px -6px #999;
-moz-box-shadow: 0 8px 6px -6px #999;
box-shadow: 0 8px 6px -6px #999;font-family:'Merriweather', serif; height: 1px;">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a id="69" class="navbar-brand" href="/" style="background:transparent; text-shadow:#fff 0 0 2px; font-family:'Merriweather', serif;">69</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-left">
      <li class="{{ Request::segment(1) === 'legendary' ? 'active' : null }}">
        <a href="{{ url('legendary' )}}" ></i>Legendary</a>
      </li>
      <li class="{{ Request::segment(1) === 'shuffle' ? 'active' : null }}">
        <a href="{{ url('shuffle' )}}" ></i>Shuffle</a>
      </li>      
    </ul>
    <form method="post" action="{{ url('search' )}}" class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search for..." style="width: 232px;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </span>        
      </div><!-- /input-group -->
    </form>
    <div class="nav navbar-nav navbar-right">
      <li role="presentation">
        <a href="/upload">
          <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Upload</a></li>
          <li role="presentation" style="background: #444;">
            <a href="/list"><span class="glyphicon glyphicon-user"></span> {{{ Auth::user()->name }}}</a>
          </li>
          <li role="presentation">
            <a href="/logout" title="Sign Out"><button type="button" class="btn btn-sm alert-danger" aria-expanded="false" aria-controls="navbar"><span id="logokeluar" class="glyphicon glyphicon-log-out pull-right"></span></button></a>
          </li>
        </div>
      </div>
    </div>
  </nav>
  @else
  <!-- Fixed navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" style="-webkit-box-shadow: 0 8px 6px -6px #999;
  -moz-box-shadow: 0 8px 6px -6px #999;
  box-shadow: 0 8px 6px -6px #999;font-family:'Merriweather', serif;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="69" class="navbar-brand" href="/" style="background:transparent; text-shadow:#fff 0 0 2px; font-family:'Merriweather', serif;">69</a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
      </li>
      <li class="{{ Request::segment(1) === 'legendary' ? 'active' : null }}">
        <a href="{{ url('legendary' )}}" ></i>Legendary</a>
      </li>
      <li class="{{ Request::segment(1) === 'shuffle' ? 'active' : null }}">
        <a href="{{ url('shuffle' )}}" ></i>Shuffle</a>
      </li>          
    </ul>
    <div class="nav navbar-nav navbar-right">
      <form method="post" action="{{ url('search' )}}" class="navbar-form navbar-left">
        <div class="input-group" style=" width: 100%;">
          <input id="search" type="text" name="q" class="form-control" placeholder="Search for..." style="width: 180px;">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <span class="input-group-btn">
            <button id="searchbtn" class="btn btn-default" type="submit" onclick="click()"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
          </span>
        </div><!-- /input-group -->
      </form>
      <li role="presentation">
        <a href="/upload">
          <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Upload</a></li>
          <ul class="nav navbar-nav navbar-right">
            <li class="btn-warning"><a href="/entry"><font color="white">Login</font></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  @endif
  <script type="text/javascript">    
    function click() {
     document.getElementById('search').
   }
 </script>