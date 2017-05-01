@extends('layouts.app')
@section('content')
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<style type="text/css">
  #exampleInputPassword1 {
    margin-bottom: 2px;
  }
</style>
<div class="container">
  <h1>Password Strength Meter</h1>
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <form>
        <div class="form-group">            
          <div class="input-group">
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="height: 35px;">
            <span class="input-group-btn">
              <a style="cursor: pointer; color: white;" class="btn btn-info" onclick="toggle_password('exampleInputPassword1');" id="showhide"><i class="fa fa-eye" aria-hidden="true"></i></a>
            </span>
          </div>
          <div class="progress">
            <div class="progress-bar">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="../src/BootstrapPasswordStrengthMeter.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#exampleInputPassword1').bootstrapPasswordStrengthMeter({
      minPasswordLength: 3
    });
  });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">;(function( $, window, document, undefined ){

  var BootstrapPasswordStrengthMeter = function( elem, options ){
    this.elem = elem;
    this.$elem = $(elem);
    this.options = options;
    self = this;
  };

  BootstrapPasswordStrengthMeter.prototype = {
    defaults: {
      minPasswordLength: 6,
      level0ClassName: 'bg-danger',
      level0Description: 'Riddikulus',
      level1ClassName: 'bg-warning',
      level1Description: 'Expelliarmus',
      level2ClassName: 'progress-bar-striped bg-info',
      level2Description: 'Imperio',
      level3ClassName: 'progress-bar-striped',
      level3Description: 'Crucio',
      level4ClassName: 'progress-bar-striped progress-bar-animated bg-success',
      level4Description: 'Avada Kedavra',
      parentContainerClass: '.form-group'
    },

    init: function() {
      this.config = $.extend({}, this.defaults, this.options);
      this.$elem.on("keyup", function() {
        self.processPassword();
      });
    },

    processPassword: function() {
      var currentPassword = this.$elem.val();
      var progressBar = this.$elem.closest(self.config.parentContainerClass).find('.progress-bar');
      var progressBarWidth = 0;
      var progressBarDescription = '';
      if (currentPassword.length >= self.config.minPasswordLength) {
        var zxcvbnObj = zxcvbn(currentPassword);
        progressBar.removeClass(this.config.level0ClassName)
        .removeClass(this.config.level1ClassName)
        .removeClass(this.config.level2ClassName)
        .removeClass(this.config.level3ClassName)
        .removeClass(this.config.level4ClassName);
        progressBar.data('score', zxcvbnObj.score);
        progressBar.attr('data-score', zxcvbnObj.score);
        switch (zxcvbnObj.score) {
          case 0:
          progressBarWidth = 25;
          progressBar.addClass(this.config.level0ClassName);
          progressBarDescription = this.config.level0Description;
          break;
          case 1:
          progressBarWidth = 25;
          progressBar.addClass(this.config.level1ClassName);
          progressBarDescription = this.config.level1Description;
          break;
          case 2:
          progressBarWidth = 50;
          progressBar.addClass(this.config.level2ClassName);
          progressBarDescription = this.config.level2Description;
          break;
          case 3:
          progressBarWidth = 75;
          progressBar.addClass(this.config.level3ClassName);
          progressBarDescription = this.config.level3Description;
          break;
          case 4:
          progressBarWidth = 100;
          progressBar.addClass(this.config.level4ClassName);
          progressBarDescription = this.config.level4Description;
          break;
        }
      } else {
        progressBarWidth = 0;
        progressBarDescription = '';
      }
      progressBar.css('width', progressBarWidth + '%');
      progressBar.text(progressBarDescription);
    }
  };

  BootstrapPasswordStrengthMeter.defaults = BootstrapPasswordStrengthMeter.prototype.defaults;

  $.fn.bootstrapPasswordStrengthMeter = function(options) {
    return this.each(function() {
      new BootstrapPasswordStrengthMeter(this, options).init();
    });
  };

})( jQuery, window , document );
</script>
<script type="text/javascript">
  function toggle_password(target){
    var d = document;
    var tag = d.getElementById(target);
    var tag2 = d.getElementById("showhide");

    if (tag2.innerHTML == '<i class="fa fa-eye" aria-hidden="true"></i>'){
      tag.setAttribute('type', 'text');   
      tag2.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';

    } else {
      tag.setAttribute('type', 'password');   
      tag2.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
    }
  }
</script>
@endsection