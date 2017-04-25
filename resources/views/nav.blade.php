<style type="text/css">
  body {
    padding-top: 70px;
  }
</style>
@if (Auth::check())
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="-webkit-box-shadow: 0 8px 6px -6px #999;
-moz-box-shadow: 0 8px 6px -6px #999;
box-shadow: 0 8px 6px -6px #999;">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/" title="Home">69CUK</a>
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
        <input type="text" name="q" class="form-control" placeholder="Search for...">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </span>
      </div><!-- /input-group -->
    </form>
    <div class="nav navbar-nav navbar-right">
      <li role="presentation">
        <a href="/upload">
          <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Upload</a></li>
          <li role="presentation" id="akun" class="active">
            <a href="#"><span class="glyphicon glyphicon-user"></span> {{{ Auth::user()->name }}}</a>
          </li>
          <li onmouseover="muncul()" onmouseleave="hilang()" id="keluar" role="presentation"><a href="/logout">Sign Out&nbsp;&nbsp;<span id="logokeluar" style="display: none;" class="glyphicon glyphicon-log-out pull-right"></span></a></li>
        </div>
      </div>
    </div>
  </nav>
  <script type="text/javascript">
   function muncul() {
     document.getElementById('logokeluar').style.display = "inline";
     document.getElementById('akun').className = "";
     document.getElementById('keluar').className = "active";
   };
   function hilang() {
     document.getElementById('logokeluar').style.display = "none";
     document.getElementById('akun').className = "active";
     document.getElementById('keluar').className = "";
   };
 </script>
 @else
 <!-- Fixed navbar -->
 <nav class="navbar navbar-inverse navbar-fixed-top" style="-webkit-box-shadow: 0 8px 6px -6px #999;
 -moz-box-shadow: 0 8px 6px -6px #999;
 box-shadow: 0 8px 6px -6px #999;">
 <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">69CUK</a>
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
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search for...">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </span>
      </div><!-- /input-group -->
    </form>
    <li role="presentation">
      <a href="/upload">
        <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Upload</a></li>
        <ul class="nav navbar-nav navbar-right btn-warning">
          <li><a href="/entry">Login</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
@endif
