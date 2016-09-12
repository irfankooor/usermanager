<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  	<link href="{{asset('LTR/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
  	<link href="{{asset('LTR/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
  	<link href="{{asset('LTR/assets/css/core.css')}}" rel="stylesheet" type="text/css">
  	<link href="{{asset('LTR/assets/css/components.css')}}" rel="stylesheet" type="text/css">
  	<link href="{{asset('LTR/assets/css/colors.css')}}" rel="stylesheet" type="text/css">
  	<!-- /global stylesheets -->


</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse bg-teal navbar-component" style="position: relative; z-index: 29;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    	<li class="dropdown dropdown-user">
  											<a class="dropdown-toggle" data-toggle="dropdown">
  												<img src="{{asset('LTR/assets/images/poto.jpg')}}" alt="">
  												<span>{{ Auth::user()->name }}</span>
  												<i class="caret"></i>
  											</a>

  											<ul class="dropdown-menu dropdown-menu-right">
  												<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
  												<li><a href="#"><i class="icon-user-plus"></i> List user</a></li>
  												<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
  												<li><a href="#"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-warning pull-right">94</span></a></li>
  												<li class="divider"></li>
  												<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
  												<li><a href="{{url('/logout')}}"><i class="icon-switch2"></i> Logout</a></li>
  											</ul>
  										</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
