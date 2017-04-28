@extends('layouts.app')
<style type="text/css">
    .underline:hover{
        text-decoration: underline;      
        cursor: pointer; 
    }
    small:hover{
        cursor: default;
    }
</style>
@section('content')   
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-6 control-label">E-Mail Address</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>Enter a valid email address</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-6 control-label">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button id="login" type="submit" class="btn btn-info" aria-disabled="true">
                                    Login
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>                     
        <div class="col-md-6" id="welcomeDiv" style="display:none;">    
            <div class="panel panel-info card">        
                <div class="panel-heading"><h3 class="card-header">Register</h3></div>
                <div class="panel-body card-block">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label card-sub">Username</label>

                            <div class="col-md-11" style="margin: 0 auto;">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-11" style="margin: 0 auto;">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>


                                @if ($errors->has('email2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email2') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>      

                            <div class="col-md-11" style="margin: 0 auto;">
                                <div class="input-group">
                                    <input id="pwd0" type="password" class="form-control" name="password" required>
                                    <span class="input-group-btn">
                                        <a style="cursor: pointer; color: white;" class="btn btn-info" onclick="toggle_password('pwd0');" id="showhide"><i class="fa fa-eye" aria-hidden="true"></i></a></span>
                                    </div>      

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-11" style="margin: 0 auto;">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-info">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer"><center><small>
                    By signing up, you agree to the <a href="/terms"><font class="underline" color="#1b95e0">Terms of Service</font></a> and <a href="/privacy"><font class="underline" color="#1b95e0">Privacy Policy</font></a>,<br><a href="/privacy#cookie"><font class="underline" color="#1b95e0">including Cookie</font></a> Use.</small>
                    </center>
                </div>
            </div>
        </div>        

    </div>
</div>
</div>
<script type="text/javascript">
    function showDiv() {
     document.getElementById('welcomeDiv').style.display = "block";
     document.getElementById('register').style.display = "none";
     document.getElementById('login').className = "btn btn-info disabled";
     document.getElementById('loginbtn').style.display = "block";
 }
 function hideDiv() {
   document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('register').style.display = "block";
   document.getElementById('login').className = "btn btn-info";
   document.getElementById('loginbtn').style.display = "none";
}
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