<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.pn')}}g">

    <title>Admin Press Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Core CSS -->

    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('dataTables/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dataTables/dataTables.bootstrap4.min.css') }} " rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('sweetalert/sweetalert.css')}}" type="text/css">
    <link href="{{asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/footable/css/footable.core.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  


    {{-- date picker --}}
    <link href="{{asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- You can change the theme colors from here -->

    <link href="{{asset('css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->

</head>
<body>
    <div class="preloader">

        <svg class="circular" viewBox="25 25 50 50">

            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>

    </div>

    <!-- ============================================================== -->

    <!-- Main wrapper - style you can find in pages.scss -->

    <!-- ============================================================== -->

    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../assets/images/background/login-register.jpg);">

        <div class="login-box card">

            <div class="card-body">

                <form class="form-horizontal form-material" id="loginform" action="index.html">

                    <a href="javascript:void(0)" class="text-center db"><img src="{{asset('images/logo-icon.png')}}" alt="Home" /><br/><img src="{{asset('images/logo-text.png')}}" alt="Home" /></a>

                    <div class="form-group m-t-40">

                        <div class="col-xs-12">

                            <input class="form-control" type="text" required="" placeholder="Username">

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-xs-12">

                            <input class="form-control" type="password" required="" placeholder="Password">

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-md-12">

                            <div class="checkbox checkbox-primary pull-left p-t-0">

                                <input id="checkbox-signup" type="checkbox">

                                <label for="checkbox-signup"> Remember me </label>

                            </div>

                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>

                    </div>

                    <div class="form-group text-center m-t-20">

                        <div class="col-xs-12">

                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">

                            <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>

                        </div>

                    </div>

                    <div class="form-group m-b-0">

                        <div class="col-sm-12 text-center">

                            <p>Don't have an account? <a href="pages-register2.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>

                        </div>

                    </div>

                </form>

                <form class="form-horizontal" id="recoverform" action="index.html">

                    <div class="form-group ">

                        <div class="col-xs-12">

                            <h3>Recover Password</h3>

                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>

                        </div>

                    </div>

                    <div class="form-group ">

                        <div class="col-xs-12">

                            <input class="form-control" type="text" required="" placeholder="Email">

                        </div>

                    </div>

                    <div class="form-group text-center m-t-20">

                        <div class="col-xs-12">

                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </section>
</body>
<script src="{{asset('plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->

    <script src="{{asset('plugins/bootstrap/js/popper.min.js')}}"></script>

    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->

    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>

    <!--Wave Effects -->

    <script src="{{asset('js/waves.js')}}"></script>

    <!--Menu sidebar -->

    <script src="{{asset('js/sidebarmenu.js')}}"></script>

    <!--stickey kit -->

    <!--Custom JavaScript -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{ asset('dataTables/jquery.validate.js') }} "></script>
    <script src="{{ asset('dataTables/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('dataTables/dataTables.bootstrap4.min.js')}} "></script>
    <script src="{{asset('plugins/footable/js/footable.all.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/footable-init.js')}}"></script>
    <script src="{{asset('plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('sweetalert/sweetalert.min.js')}}" type="text/javascript" charset="utf-8" async defer></script>
    <script src="{{ asset('js/jquery.sharrre.min.js') }}"></script>
</html>