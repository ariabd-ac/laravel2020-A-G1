@section('title', 'Dashboard')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="{{asset('mutli/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
  <link href="{{asset('multi/css/style.css')}}" rel="stylesheet" media="screen">
  <link href="{{asset('multi/color/default.css')}}" rel="stylesheet" media="screen">
  <link rel="shortcut icon" href="https://www.kemdikbud.go.id/main/files/large/83790f2b43f00be"/> 
  
</head>
<body>
    <!-- Navigation -->
  {{-- <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="index.html">Alstar</a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Service</a></li>
          <li><a href="#portfolio">Works</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav> --}}

  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

            @if (Route::has('login'))
          <!-- Slide 1 -->
          <div class="item active">
            <div class="carousel-background"><img src="{{asset('multi/img/intro/1.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">SIMS</h2>
                <p class="animated fadeInUp">Sistem Informasi Manajement Sekolah</p>
                <p style="color:red; font-size:20px;">Projek Team : </p>
                <p>Ari Agung</p>
                  @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class=""><i class="fa fa-envelope-open"></i> Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><i class="fa fa-plus-square-o"></i>Register</a>
                        @endif
                    @endauth
              </div>
            </div>
          </div>
           @endif
          
          <!-- Slide 2 -->
          

      </div>
    </div>
    </div>
  </section>

  
    
  <script src="{{asset('multi/js/jquery.js')}}"></script>
  <script src="{{asset('multi/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('multi/js/wow.min.js')}}"></script>
  <script src="{{asset('multi/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('multi/js/jquery.nav.js')}}"></script>
  <script src="{{asset('multi/js/modernizr.custom.js')}}"></script>
  <script src="{{asset('multi/js/grid.js')}}"></script>
  <script src="{{asset('multi/js/stellar.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('multi/contactform/contactform.js')}}"></script>

  <!-- Template Custom Javascript File -->
  <script src="{{asset('multi/js/custom.js')}}"></script>
</body>
</html>