<!DOCTYPE html>
<html lang="en">
<head>
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Pure Mix</title>
	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}} ">
	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="{{ asset('css/animate.min.css')}} ">
	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href=" {{asset('css/style.css')}} ">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">
      <div class="navbar">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <ul class="header-links pull-right logged_user">
                     @guest
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                           <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                           </li>
                        @endif
                     @else
                        <li class="nav-item dropdown">
                           <div class="dropdown">
                              <button onclick="myFunction()" class="dropbtn" style="color: #333">
                                 {{ Auth::user()->name }} <i class="fa fa-caret-down" aria-hidden="true"></i>
                              </button>
                              <div id="myDropdown" class="dropdown-content">
                                 <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                       <i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                 </form>
                              </div>
                             </div>
                        </li>
                     @endguest
                  </ul>
               </div>
            </div>
            <div class="row">
              <div class="brand">
                <a href="index.html">Pure Mix</a>
              </div>
              <div class="navicon">
                <div class="menu-container">
                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                      <ul id="nav-menu">
                        <li><a href=" {{url('/')}} ">Home</a></li>
                        <li><a href=" {{url('/about')}}">About</a></li>
                        <li><a href=" {{url('/blog')}}">Blog</a></li>
                        <li><a href=" {{url('/art')}}">Portfolio</a></li>
                        <li><a href=" {{url('/contact')}}">Contact</a></li>
                      </ul>
                      
                    </div>
                  </div>

                </div>
              </div>
            </div>
         </div>
      </div>

   </nav>
</div>

