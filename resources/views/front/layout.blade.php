<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    <head>
    
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142572437-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-142572437-2');
        </script>

        <title>White rabbit makeup | Profesionalno šminkanje Novi Sad</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Profesionalno šminkanje, Novi Sad. Sve vrste šminkanja, šminkanje za sve prilike, poznati svetski brendovi šminke koja nije testirana na životinjama. Cruelty free makeup."/>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!--<link href="http://allfont.net/allfont.css?fonts=playfair-display" rel="stylesheet" type="text/css" />-->
        <!--<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">-->
        <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <link rel="shortcut icon" href="{{url('/skins/front/images/logo/logo_icon.jpg')}}" type="image/x-icon"/>  <!-- LOGO BROWSER TAB -->
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
        
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
        <link href="{{url('/skins/front/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/testimonial.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        
        <link href="{{url('/skins/front/css/footer/Footer-with-button-logo.css')}}" rel="stylesheet" type="text/css"/>
        

        <style>
            .mycolor
            {
            color:rgba(0,0,0,0.7);
            }
        </style>
        @stack('header_css')
		
		<!-- Facebook Pixel Code -->
	<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '739202509848689');
  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=739202509848689&ev=PageView&noscript=1"
	/></noscript>
		<!-- End Facebook Pixel Code -->
		
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
<!--        <script src="{{url('/skins/front/js/jquery.timepicker.min.js')}}"></script>-->
        <script src="{{url('/skins/front/js/scrollax.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/main.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script>
            $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[1000,2],
        itemsTablet:[767,1],
        pagination: false,
        navigation:true,
        navigationText:["",""],
        autoPlay:false
    });
});
    </script>

        @stack('footer_javascript')
    </body>
</html>