<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Edulogy</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{url('public')}}/client/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{url('public')}}/client/images/apple-touch-icon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
    
    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="{{url('public')}}/client/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/client/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('public')}}/client/css/carousel.css">
    <link rel="stylesheet" href="{{url('public')}}/client/css/animate.css">
    <link rel="stylesheet" href="{{url('public')}}/style.css">

    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="{{url('public')}}/client/images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <!-- header -->
        @include('client.template.section.header')
        <!-- header -->

        <!-- content -->
        @yield('content')
        <!-- content -->

        <!-- footer -->
        @include('client.template.section.footer')
        <!-- footer -->
    </div>
    <!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="{{url('public')}}/client/js/jquery.min.js"></script>
    <script src="{{url('public')}}/client/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/client/js/animate.js"></script>
    <script src="{{url('public')}}/client/js/custom.js"></script>

</body>
</html>