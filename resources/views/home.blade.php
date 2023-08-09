@extends('layouts.naser')
@section('content')

<input type="checkbox" id="check">
    <label for="check" class="label-2">
     <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-arrow-left" id="cancel"></i>
    
    </label> 
     <div class="sidebar">
      <header > Petromin Calendar</header>
        <ul>

  <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                                <li  >
                                <a href="{{ route('login') }}"  >   <i class="fas fa-sign-in"></i>  Log in</a>    </li>
                            @endif

                            @if (Route::has('register'))
                                <li  >
                                    <a   href="{{ route('register') }}"> <i class="fas fa-user-plus"></i>  {{ __('Register') }}</a>
                                </li>
                                
                            @endif
                        @else
                            <li c >
                                <a    href="#"   >
                                <i class="fas fa-user"></i> {{ Auth::user()->name }}
                                </a>
 
                            </li>
                        @endguest


      <li><a href="#"><i class="fas fa-qrcode"></i> Dashboard</a></li>
      <!-- <li><a href="#"><i class="fas fa-link"></i>Shortcuts </a></li> -->
      <li><a href="#"><i class="fas fa-stream"></i>Overview</a></li> 
      <li><a href="#"><i class="fas fa-calendar-week"></i>Events</a></li> 
      <!-- <li><a href="#"><i class="fas fa-question-circle"></i>About</a></li>  -->
      <!-- <li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>  -->
      <li> <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out"></i>Sign out</a>
                                                     
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                           @csrf
                                           </form> 
                                                    </li> 
      <li><a href="#"><i class="fas fa-envelope"></i>Contact</a></li> 
      
         
        </ul>
        </div>

        
    <!-- Section: Design Block -->
    
     <!-- Section: Design Block -->
     <section class="background-radial-gradient  ">
        
        <style>
          .background-radial-gradient {
        
                background-color: #DD042B;
          }

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
     
     <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
          <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
              <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                Welcome to <br>
                <span style="color: #F49712">Petromin Corporation</span>
              </h1>
              <p class="mb-4 opacity-70" style="color:#fff">
                Petromin Corporation is a leading multi-national organization in the Kingdom of Saudi Arabia. We stand as a strong transformative force, enabling the movement of people, products and services through sustainable and innovative mobility solutions serving individuals and businesses alike – We help you move!
              </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
              <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
              <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

              <div class="card bg-glass">
                <div class="card-body px-4 py-5 px-md-5">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <!-- Section: Design Block -->
  <!-- Section: Design Block -->
  @endsection
