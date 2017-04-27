<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login 69CUK For Adult Only</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body background="https://newevolutiondesigns.com/images/freebies/city-wallpaper-11.jpg">
        <div id="app">                
            <ol class="breadcrumb" style="background-color: rgba(91, 192, 222, 0.5);">        
                <li class="float-left"><a href="/"><button type="button" class="btn btn-default navbar-btn">Back to Home</button></a></li>
                <li class="float-right">            
                    <a id="loginbtn" style="display: none;"><button type="button" class="btn btn-success navbar-btn" onclick="hideDiv()">Login</button></a>
                    <a id="register"><button type="button" class="btn btn-primary navbar-btn" onclick="showDiv()">Register</button></a></li>
                </ol>
                @if (Auth::guest())                                        
                <!-- Right Side Of Navbar -->
                
                <!-- Authentication Links -->                        
                
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </div>    
        @endif        
        <p><br></p>
        @yield('content')      
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>    
    </body>
    </html>
    