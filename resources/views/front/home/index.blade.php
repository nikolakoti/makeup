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
            <div class="carousel-item active" alt="profesionalno sminkanje za sve prilike novi sad kozmetika koja nije testirana na zivotinjama cruelty free makeup" style="background-image: url({{url('/skins/front/images/carousel/profesionalno_sminkanje_novi_sad.jpg')}})">
                <div class="carousel-caption">
                    <h1 class="display-4" style="margin-bottom:40px;margin-left:0px;text-align:left;color: white;text-shadow: 2px 2px 4px #000000;"></h1>
                    <!--<p class="lead" style="text-align:right;">Zakažite svoj termin <u><a style="color:black;" href="{{route('front.contact')}}">ovde.</a></u></p>-->
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" alt="profesionalno sminkanje za sve prilike novi sad kozmetika koja nije testirana na zivotinjama cruelty free makeup" style="background-image: url({{url('/skins/front/images/carousel/cruelty_free_makeup_sminkanje_novi_sad.jpg')}})">
                <div class="carousel-caption">
                    <h1 class="display-4" style="margin-bottom:20px;margin-left:0px;text-align:left;color: white;text-shadow: 2px 2px 4px #000000;"></h1>
                    <!--<p class="lead">Zakažite svoj termin <u><a style="color:black" href="{{route('front.contact')}}">ovde.</a></u></p>-->
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" alt="profesionalno sminkanje za sve prilike novi sad kozmetika koja nije testirana na zivotinjama cruelty free makeup" style="background-image: url({{url('/skins/front/images/carousel/nefertiti.jpg')}})">
                <div class="carousel-caption">
                    <h1 class="display-4" style="color:white;margin-right:0px;text-align:right;margin-bottom:10%;"><strong>Profesionalno<br> šminkanje<br> za <br>sve<br> prilike</strong></h1>
                    <p class="lead" style="color:white;text-align:right;">Zakažite svoj termin <u><a href="{{route('front.contact')}}">ovde.</a></u></p>
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
<section class="ftco-section-2">
    <div class="photograhy">
        <div class="row no-gutters">
            <div class="text text-center">
                <h3><br><i>"Šminka se nije pomerila celu noć. Ako je ne skinem večeras, <strong>jel može da izdrži do sledećeg vikenda?</strong> Imam svadbu :)"</i><br><br></h3>
            </div>
							
            <div class="col-md-4">
                <div class="blog-entry-logo ftco-animate">
                    <a class="author-image text img p-md-5" style="height:300px; background-image: url({{url('/skins/front/images/recenzija1.jpg')}});"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-entry-logo ftco-animate">
                    <a class="author-image text img p-md-5" style="height:300px; background-image: url({{url('/skins/front/images/recenzija2.jpg')}});"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-entry-logo ftco-animate">
                    <a class="author-image text img p-md-5" style="height:300px; background-image: url({{url('/skins/front/images/recenzija3.jpg')}});"></a>
                </div>
            </div> 

            
        </div>
    </div>
</section>

<!--Logo section-->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="text text-center">
                        <h1>Koristim samo brendove koji <strong>nisu testirani na životinjama</strong> i želim da širim svest o tome.</h1>
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
                <h3><br>Neke od mojih radova pogledajte u <strong><a href="{{route('front.gallery')}}">galeriji</a></strong>, a možete i na <i><a href="https://www.instagram.com/whiterabbitmakeupns/" target="_blank">Instagram</a></i> ili <i><a href="https://www.facebook.com/whiterabbitmakeup/" target="_blank">Facebook</i></a> profilu :) <br><br></h3>
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

