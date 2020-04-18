<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SMA Harapan Bangsa </title>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="{{asset('landing/css/mobile-menu.css')}}" rel="stylesheet">
    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">    
    <!-- Flat Icon -->
    <link href="{{asset('landing/fonts/flaticon/flaticon.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Style CSS -->
    <link href="{{asset('landing/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="main-wrapper">
<!-- Page Preloader -->
<!-- <div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div> -->

<div class="uc-mobile-menu-pusher">

<div class="content-wrapper">
<!-- Header Top -->

<!-- .navbar-top -->
<nav class="navbar m-menu navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="{{asset('landing/img/.png')}}" alt="">SIMS</a>
        </div>

@if (Route::has('login'))
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
               @auth
                <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                @else
                <li><a href="{{ route('login') }}">Login</a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
               @endauth
                 @endif
            </ul>

        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>
<!-- .nav -->

<div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
        <li data-target="#my-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{asset('landing/img/hero-slide-1.jpg')}}" alt="Hero Slide">

            <div class="carousel-caption">
                <h1>Lulusan terbaik</h1>

                <p>Alumni lulusan dari SMA ini dapat kuliah di Perguruan tinggi Negeri dan Luar Negeri</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('landing/img/hero-slide-2.jpg')}}" alt="...">

            <div class="carousel-caption">
                <h1>Lulus dapat kerja</h1>

                <p>Setelah lulus dari Sekolah inipun dapat langsung kerja yang di tempat inginkan
                </p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('landing/img/hero-slide-3.jpg')}}" alt="...">

            <div class="carousel-caption">
                <h1>Customer Care</h1>

                <p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. <br>Continually unleash unique
                    niches after go forward.</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #my-carousel-->



<section class="section-content-left-icon">
    <div class="container">
        <div class="row">
          <div class="section-title text-center">
            <h1>Prestasi SMA Harapan bangsa</h1>
        </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                    <div class="icon">
                        <i class="flaticon-tags"></i>
                    </div>
                    
                    <div class="content">
                    <h2>Juara 1 Karate</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-ranking"></i></div>
                
                <div class="content">
                    <h2>Juara 2 Silat</h2>
                    <p>Distinctively cultivate granular action items with standards compliant metrics. Holisticly promote empowered.</p>
                </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-monitoring"></i></div>

                <div class="content">
                     <h2>Juara 1 OSN</h2>
                    <p>Assertively facilitate go forward web services whereas intuitive e-markets. Completely parallel task world.</p>
                </div>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-blogging"></i></div>

                 <div class="content">
                     <h2>Juara 3 Web design</h2>
                    <p>Efficiently monetize technically sound e-markets rather than interoperable e-services.</p>
                 </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-social-media"></i></div>

                 <div class="content">
                     <h2>Juara 1 Pramuka</h2>
                    <p>Collaboratively seize best-of-breed manufactured products for inexpensive initiatives. Dynamically repurpose.</p>
                 </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-viral-marketing"></i></div>

                <div class="content">
                    <h2>Juara 3 Paduan Suara</h2>
                    <p>Enthusiastically promote standards compliant relationships vis-a-vis backend resources.</p>
                </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- .container -->
</section>
<!-- /.services-left-icon -->

<section class="featured-box">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="featured-content-wrapper">
            <div class="featured-img">
                <img class="img-responsive" src="{{asset('landing/img/img-featured-1.png')}}" alt="">
            </div>
            <div class="featured-content">
                <h1>Ingin masuk di SMA Harapan Bangsaa? Ayo segera daftar</h1>
                <p>
                    Dynamically enhance accurate methods of empowerment without interdependent applications. Appropriately e-enable synergistic platforms for visionary manufactured products. Dramatically develop state of the art relationships without enterprise-wide methodologies.
                </p>
                <a href="" class="btn btn-default btn-lg">Daftar sekarang skuyyy</a>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- /.featured-box -->

<section class="testimonial">
    <div class="container">
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonialSlider" data-slide-to="0" class="active"></li>
                <li data-target="#testimonialSlider" data-slide-to="1"></li>
                <li data-target="#testimonialSlider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <blockquote>
                    
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>

                        <ul class="user-details">
                            <li class="avatar"><img src="{{asset('landing/img/img-testimonial-1.jpg')}}" class="img-responsive" alt=""/></li>
                            <li class="name">Bambang Kodir</li>
                            <li class="company">Kepala Sekolah</li>
                        </ul>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>
                         <ul class="user-details">
                            <li class="avatar"><img src="{{asset('landing/img/img-testimonial-2.jpg')}}" class="img-responsive" alt=""/></li>
                            <li class="name">Robert Martin</li>
                            <li class="company">Guru Matematika</li>
                        </ul>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>
                         <ul class="user-details">
                            <li class="avatar"><img src="{{asset('landing/img/img-testimonial-3.jpg')}}" class="img-responsive" alt=""/></li>
                            <li class="name">Silvana Afdi</li>
                            <li class="company">Guru IPA</li>
                        </ul>

                    </blockquote>
                </div>
            </div>
        </div>
        <!-- #testimonialSlider -->
    </div>
</section>
<!-- /.testimonial -->


<!-- /.client-logo -->

<section class="case-studies">
    <div class="container">
        <div class="section-title text-center">
            <h1>Ekstrakulikuler SMA Harapan Bangsa</h1>
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy<br>with my whole heart. I am alone, and feel the charm of existence in this spot.</p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="{{asset('landing/img/img-case-sudies-1.png')}}" alt="case sudies.png">
                    <h2>Solving the problem</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="{{asset('landing/img/img-case-sudies-2.png')}}" alt="case sudies.png">
                    <h2>Analysis of the enterprise's activity</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="{{asset('landing/img/img-case-sudies-3.png')}}" alt="case sudies.png">
                    <h2>Methods of the recruitment</h2>
                </div>
            </div>
        </div><!-- /.row -->

        <div class="row">
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="{{asset('landing/img/img-case-sudies-4.png')}}" alt="case sudies.png">
                    <h2>SEO and Web development</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="{{asset('landing/img/img-case-sudies-5.png')}}" alt="case sudies.png">
                    <h2>Thinking only of profits</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="{{asset('landing/img/img-case-sudies-6.png')}}" alt="case sudies.png">
                    <h2>The main objectives of the marketer</h2>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.client-logo -->


<footer class="footer">

    

    <div class="copyright-section">
        <div class="container clearfix">
             <span class="copytext">Copyright &copy; 2020</span>
        </div><!-- .container -->

    </div><!-- .copyright-section -->
</footer>
<!-- .footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .uc-mobile-menu-pusher -->

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->


<!-- Script -->
<script src="{{asset('landing/js/jquery-2.1.4.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="{{asset('landing/js/smoothscroll.js')}}"></script>
<script src="{{asset('landing/js/mobile-menu.js')}}"></script>
<script src="{{asset('landing/js/scripts.js')}}"></script>
<div/>
    <a style="font-size:0; height:0; width:0; opacity:0; position:absolute" target="_blank" href="http://www.uicookies.com">Bootstrap Templates by uiCookies</a>        
  </div>
</body>
</html>