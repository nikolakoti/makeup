@extends('front.layout')

@section('content')
<!--CAROUSEL -->
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" alt="profesionalno sminkanje za sve prilike novi sad kozmetika koja nije testirana na zivotinjama cruelty free makeup" style="background-image: url({{url('/skins/front/images/carousel/slika1.jpg')}});">
                <div class="carousel-caption">
                    <h1 class="display-4" style="font-family:Source Sans Pro, sans-serif;color:white;font-size:50px;font-weight:600;">Dobro došli<br></h1>
                    <h5 class="display-4" style="font-family:Harriet Display;color:#dcdcdc;font-style:italic;font-size:30px;">~ Ovo je ~<br></h5>
                    <h1 class="display-4" style="font-family:Montserrat, Arial, sans-serif;color: white;font-style:normal;letter-spacing:8px;font-weight:bold;"><b> White rabbit makeup</b></h1>
                    <!--<h3 style="margin-left:0px;text-align:left;color: white;text-shadow: 2px 2px 4px #000000;"><br> Jer za <strong>šminkanje</strong> koristim samo proizvode <br>koji <strong>nisu testirani</strong><br> na životinjama (<strong>cruelty free</strong>)</h3>-->
                    <!--<p class="lead">Zakažite svoj termin <u><a style="color:black;" href="{{route('front.contact')}}">ovde.</a></u></p>-->
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" alt="profesionalno sminkanje za sve prilike novi sad kozmetika koja nije testirana na zivotinjama cruelty free makeup" style="background-image: url({{url('/skins/front/images/carousel/slika2.jpg')}})">
                <div class="carousel-caption">
                    <h1 class="display-4" style="margin-bottom:20px;margin-left:0px;text-align:left;color: white;text-shadow: 2px 2px 4px #000000;"></h1>
                    <!--<p class="lead">Zakažite svoj termin <u><a style="color:black" href="{{route('front.contact')}}">ovde.</a></u></p>-->
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" alt="profesionalno sminkanje za sve prilike novi sad kozmetika koja nije testirana na zivotinjama cruelty free makeup" style="background-image: url({{url('/skins/front/images/carousel/slika3.jpg')}})">
                <div class="carousel-caption">
                    <!--<h1 class="display-4" style="color:white;margin-right:0px;text-align:right;margin-bottom:10%;"><strong>Profesionalno<br> šminkanje<br> za <br>sve<br> prilike</strong></h1>-->
                    <!--<p class="lead" style="color:white;text-align:right;">Zakažite svoj termin <u><a href="{{route('front.contact')}}">ovde.</a></u></p>-->
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<!--Testimonials-->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel" style="background:#3d3d3d;">
                <div class="testimonial">
                    <p class="description">
                    Prijatna, opuštena atmosfera i uz to sjajan rezultat, za svaku preporuku, prezadovoljna. Milica šminka isključivo cruelty free šminkom sto je svakako veliki plus za nas ljubitelje životinja.
                    </p>
                    <div class="pic">
                        <img src='/skins/front/images/milica_p.jpg' alt="sminkanje_novi_sad">
                    </div>
                    <div class="testimonial-prof">
                        <h4>Milica P.</h4>
                        <!--<small>Web Developer</small>-->
                    </div>
                </div>
 
                <div class="testimonial">
                    <p class="description">
                     Za Milicu sam dobila preporuku. Čula sam da je umetnik po struci i da voli šminkanje. Oduševila me je kada mi je dala preporuku za makeup izgled u odnosu na dogadjaj i odevnu kombinaciju.    
                    </p>
                    <div class="pic">
                        <img src='/skins/front/images/ivana_n.jpg' alt="profesionalno_sminkanje">
                    </div>
                    <div class="testimonial-prof">
                        <h4>Ivana N.</h4>
                        <!--<small>Web Designer</small>-->
                    </div>
                </div>

                <div class="testimonial">
                    <p class="description">
                        U momentu kada mi je šminkerka otkazala termin slučajno sam na guglu našla White rabbit makeup. Nisam poznavala Milicu i bila sam skeptična kako ću izgledati jer sam to veče imala godišnjicu mature. Šminka je bila perfektna i trajala je celu noć ! 
                    </p>
                    <div class="pic">
                        <img src='/skins/front/images/tamara_p.jpg' alt="sminkanje_za_sve_prilike">
                    </div>
                    <div class="testimonial-prof">
                        <h4>Tamara P.</h4>
                        <!--<small>Web Designer</small>-->
                    </div>
                </div>
                <div class="testimonial">
                    <p class="description">
                        
                    </p>
                    <div class="pic">
                        <img src='/skins/front/images/tijana.jpg' alt="sminka_za_svadbe_novi_sad">
                    </div>
                    <div class="testimonial-prof">
                        <h4>Tijana T.</h4>
                        <!--<small>Web Designer</small>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Logo section-->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="text text-center">
                        <h2>Koristim samo kozmetičke brendove koji <strong>nisu testirani na životinjama</strong> i želim da širim svest o tome.</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/kat_von_d_cruelty_free_kozmetika_sminka.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/bh_cosmetics_sminka.png')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/kryolan_sminka_kozmetika.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/melkior_professional_sminka_cruelty_free.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/milani_kozmetika_cruelty_free.png')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/juvias_place.jpg')}});"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section-2">
    <div class="photograhy">
        <div class="row no-gutters">
            <div class="text text-center">
                <h3>Neke od mojih radova pogledajte u <strong><a href="{{route('front.gallery')}}">galeriji</a></strong> na sajtu, na <i><a href="https://www.instagram.com/whiterabbitmakeupns/" target="_blank">Instagram</a></i> ili <i><a href="https://www.facebook.com/whiterabbitmakeup/" target="_blank">Facebook</i></a> profilu :) <br><br></h3>
            </div>
            <div class="col-md-4 ftco-animate">
				<a href="{{url('/skins/front/images/cut_crease_makeup.jpg')}}" alt="profesionalno sminkanje novi sad kozmetika cruelty free" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/cut_crease_makeup.jpg')}});">
					<div class="overlay"></div>
						<div class="text text-center">
                            <!--<h2 style="color:white;font-weight:100;">Šminka<br>za svaki dan</h2>-->
						</div>
				</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="{{url('/skins/front/images/sminka_turban_smokey_eye.jpg')}}" alt="profesionalno sminkanje za sve prilike novi sad" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/sminka_turban_smokey_eye.jpg')}});">
					<div class="overlay"></div>
						<div class="text text-center">
                            <!--<h2 style="color:white;font-weight:100;">Ekstravagantna<br>šminka</h2>-->
						</div>
				</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="{{url('/skins/front/images/sminka_za_sve_prilike_sminka_za_svadbe.jpg')}}" alt="makeup novi sad kozmetika svetskih brendova" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/sminka_za_sve_prilike_sminka_za_svadbe.jpg')}});">
					<div class="overlay"></div>
						<div class="text text-center">
                            <!--<h2 style="color:white;font-weight:100;">Šminka<br>za poslovne prilike</h2>-->
					    </div>
				</a>
			</div>
        </div>
    </div>
</section>


@endsection

