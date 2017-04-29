@extends('layouts.app')
@section('content')   
<style type="text/css">
    .underline:hover{
        text-decoration: underline;      
        cursor: pointer; 
    }
    small:hover{
        cursor: default;
    }
</style>
<ol class="breadcrumb" style="background-color: rgba(91, 192, 222, 0.5);">        
    <li class="float-left">
        <a href="/"><button type="button" class="btn btn-default navbar-btn">Back to Home</button></a>
    </li>
    <li class="float-right">            
        <a href="/register">
            <button type="button" class="btn btn-primary navbar-btn">Register</button>
        </a>
    </li>
</ol>
<br>
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
                                    <strong>{{$errors->first('email')}}</strong>
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
                                Don't have an account?
                                    <a class="" href="{{ route('password.request') }}">
                                        <font color="#1da1f2">Sign up »</font>
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>                                   
    </div>
</div>
@endsection