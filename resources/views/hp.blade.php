@include('cdn')
<div class="visible-xs visible-sm">        
        <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
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
                    </li>
            <li class="{{ Request::segment(1) === 'legendary' ? 'active' : null }}">
                        <a href="{{ url('legendary' )}}" ></i>Legendary</a>
                    </li>
            <li class="{{ Request::segment(1) === 'shuffle' ? 'active' : null }}">
                        <a href="{{ url('shuffle' )}}" ></i>Shuffle</a>
                    </li>                    
          </ul>          
          <div class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left">           
  <div class="input-group">
  <input type="text" class="form-control" placeholder="Search for...">
  <span class="input-group-btn">         
  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>       
  </span>      
  </div><!-- /input-group -->
</form>                  
  <li role="presentation">
    <a href="/imageUploadForm">                   
    <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Upload</a></li>
    <li class="dropdown">                       
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{{ Auth::user()->name }}}<span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="#">My Posts<span class="glyphicon glyphicon-level-up pull-right"></span></a></li>
    <li><a href="#">Profile Setting<span class="glyphicon glyphicon-cog pull-right"></span></a></li>
    <li class="divider"></li>                         
    <li class="dropdown-header"><div style="text-align: center;">69CUK&nbsp;</div></li>
    <li><a href="#">Rules<span class="glyphicon glyphicon-check pull-right"></span></a></li>
    <li><a href="#">Top Users<span class="glyphicon glyphicon-star pull-right"></span></a></li>
    <li role="separator" class="divider"></li>
    <li><a href="/logout">Sign Out<span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
    </ul>
  </li>                
  <li role="presentation"><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>                 
</div>
        </div><!--/.nav-collapse -->
        </div>
    </nav>
    </nav>
</div>