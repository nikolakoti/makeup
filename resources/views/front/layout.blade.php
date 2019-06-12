<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    <head>
        <title>White rabbit make up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <link rel="shortcut icon" href="{{url('/skins/front/images/logo/logo.jpg')}}" type="image/x-icon"/>  <!-- LOGO BROWSER TAB -->
        <link href="{{url('/skins/front/css/open-iconic-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/animate.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/magnific-popup.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/aos.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/ionicons.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/bootstrap-datepicker.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/jquery.timepicker.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/flaticon.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/icomoon.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link href="{{url('/skins/front/css/footer/Footer-with-button-logo.css')}}" rel="stylesheet" type="text/css"/>
        <style>
            .mycolor
            {
            color:rgba(0,0,0,0.7);
            }
        </style>
    </head>
    <body>

        <div id="colorlib-page">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>

            @include('front.nav')

            <div id="colorlib-main">
                @yield('content')

                @include('front.footer')
            </div><!-- END COLORLIB-MAIN -->

        </div><!-- END COLORLIB-PAGE -->


        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
            </svg>
        </div>

        <script src="{{url('/skins/front/js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/jquery-migrate-3.0.1.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/popper.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/jquery.easing.1.3.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/jquery.stellar.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/aos.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/jquery.animateNumber.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="{{url('/skins/front/js/scrollax.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/main.js')}}" type="text/javascript"></script>
    </body>
</html>