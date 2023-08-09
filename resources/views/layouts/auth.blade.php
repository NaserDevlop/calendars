<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Petromin Calendar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap/_media.css">
    <link rel="stylesheet" href="css/ore.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
     <link rel="stylesheet" href="fonts/Source_Sans_Pro/SourceSansPro-Light.ttf">
      <!-- our project just needs Font Awesome Solid + Brands -->
  <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="css/fontawesome/css/brands.css" rel="stylesheet">
  <link href="css/fontawesome/css/solid.css" rel="stylesheet">
    <!-- Scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">                                                                                  </script>
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<style>
    .navbar-light .navbar-brand {
    /* color: rgba(0,0,0,.9); */
    color: #fff;
}
.navbar {
    --mdb-navbar-box-shadow: 0 4px 12px 0 rgba(0,0,0,0.07),0 2px 4px rgba(0,0,0,0.05);
    /* --mdb-navbar-padding-top: 0.5625rem; */
    /* --mdb-navbar-brand-img-margin-right: 0.25rem; */
    box-shadow: var(--mdb-navbar-box-shadow);
    padding-top: var(--mdb-navbar-padding-top);
    background: #D02128;
    color: #fff;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
    color: #fff;
}
.navbar-light .navbar-nav .nav-link {
    color: #fff;
}
body {
    background: #d02128;
    height: 100vh;
    overflow: hidden;
}
</style>

<style>
  .navbar {
    --mdb-navbar-box-shadow: 0 4px 12px 0 rgba(0,0,0,0.07),0 2px 4px rgba(0,0,0,0.05);
    /* --mdb-navbar-padding-top: 0.5625rem; */
    /* --mdb-navbar-brand-img-margin-right: 0.25rem; */
    box-shadow: var(--mdb-navbar-box-shadow);
    padding-top: var(--mdb-navbar-padding-top);
    background: #D02128;
    color: #fff;
}
.navbar-light .navbar-brand {
    /* color: rgba(0,0,0,.9); */
    color: #fff;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
    color: #fff;
}
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light   shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-home"> </i> Home 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">   <i class="fas fa-sign-in"></i>  Log in</a>    </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"> <i class="fas fa-user-plus"></i>  {{ __('Register') }}</a>
                                </li>
                                
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user"></i> {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <i class="fas fa-sign-out"></i>   {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

      <!-- Section: Design Block -->
     <section class="background-radial-gradient overflow-hidden">
        <style>
          .background-radial-gradient {
            /* background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
                hsl(218, 41%, 35%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%),
              radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%); */
                background-color: #DD042B;
          }

          /* #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
          }

          #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
          } */
          #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient( #fff , #ffffffd6);
            overflow: hidden;
          }

          #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#fff, #ffffffd6);
            overflow: hidden;
          }

          .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
          }
        </style>
@yield('content')
        </section>
 </body>

<script src="test.js"></script>
<script>
$(document).ready(function(){
          $(".alert").slideDown(300).delay(5000).slideUp(300);
    });
 </script>
</html>
