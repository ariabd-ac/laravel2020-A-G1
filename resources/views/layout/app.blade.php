
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

    <title>@yield('title')</title>
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
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>   --}}


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
<link rel="shortcut icon" href="https://www.kemdikbud.go.id/main/files/large/83790f2b43f00be"/> 

</head>



<body class="fix-header card-no-border">

    <!-- ============================================================== -->

    <!-- Preloader - style you can find in spinners.css -->

    <!-- ============================================================== -->

    @include('layout.preloader')

    <!-- ============================================================== -->

    <!-- Main wrapper - style you can find in pages.scss -->

    <!-- ============================================================== -->

    <div id="main-wrapper">

        <!-- ============================================================== -->

        <!-- Topbar header - style you can find in pages.scss -->

        <!-- ============================================================== -->

        @include('layout.header')

        <!-- ============================================================== -->

        <!-- End Topbar header -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->

        <!-- ============================================================== -->

        @include('layout.sidebar')

        <!-- ============================================================== -->

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Page wrapper  -->

        <!-- ============================================================== -->

        <div class="page-wrapper">

            <!-- ============================================================== -->

            <!-- Bread crumb and right sidebar toggle -->

            <!-- ============================================================== -->

            <div class="row page-titles">

                <div class="col-md-5 align-self-center">

                    <h3 class="text-themecolor">Sims</h3>

                </div>

            </div>

            <!-- ============================================================== -->

            <!-- End Bread crumb and right sidebar toggle -->

            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- Container fluid  -->

            <!-- ============================================================== -->

            <div class="container-fluid">

                <!-- ============================================================== -->

                <!-- Start Page Content -->

                <!-- ============================================================== -->

                @yield('content')

                <!-- ============================================================== -->

                <!-- End PAge Content -->

                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- Right sidebar -->

                <!-- ============================================================== -->

                <!-- .right-sidebar -->

                @include('layout.rightbar')

                <!-- ============================================================== -->

                <!-- End Right sidebar -->

                <!-- ============================================================== -->

            </div>

            <!-- ============================================================== -->

            <!-- End Container fluid  -->

            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- footer -->

            <!-- ============================================================== -->

            @include('layout.footer')

            <!-- ============================================================== -->

            <!-- End footer -->

            <!-- ============================================================== -->

        </div>

        <!-- ============================================================== -->

        <!-- End Page wrapper  -->

        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->

    <!-- End Wrapper -->

    <!-- ============================================================== -->

    <!-- ============================================================== -->

    <!-- All Jquery -->

    <!-- ============================================================== -->

    {{-- <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}

    <!-- Bootstrap tether Core JavaScript -->

    <script src="{{asset('plugins/bootstrap/js/popper.min.js')}}"></script>

    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    {{-- <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script> --}}

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

    <!-- ============================================================== -->

    <!-- Style switcher -->

    <!-- ============================================================== -->


   <script>
        $('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });

    $('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });

    $('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });



    $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });

    jQuery('.mydatepicker, #datepicker').datepicker();

    jQuery('#datepicker-autoclose').datepicker({

        autoclose: true,

        todayHighlight: true

    });

    jQuery('#date-range').datepicker({

        toggleActive: true

    });

    jQuery('#datepicker-inline').datepicker({

        todayHighlight: true

    });

    // Daterang
    </script>


    <script src="{{asset('plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
@yield('modals')
</body>



</html>

