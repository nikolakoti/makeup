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
            <div class="carousel-item active" alt="profesionalno sminkanje za sve prilike novi sad kozmetika koja nije testirana na zivotinjama cruelty free makeup" style="background-image: url({{url('/skins/front/images/carousel/cruelty_free_makeup_sminkanje_novi_sad.jpg')}})">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4" style="margin-bottom:80px;margin-left:0px;text-align:left;color: white;text-shadow: 2px 2px 4px #000000;">White<br>rabbit<br>makeup<br><br><b><i>Prepoznatljivi<br>po tvojoj<br>lepoti !</b></i></h1>
                    <!--<p class="lead" style="text-align:right;">Zakažite svoj termin <u><a style="color:black;" href="{{route('front.contact')}}">ovde.</a></u></p>-->
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" alt="profesionalno sminkanje za sve prilike novi sad kozmetika koja nije testirana na zivotinjama cruelty free makeup" style="background-image: url({{url('/skins/front/images/carousel/profesionalno_sminkanje_poznati_brendovi_novi_sad.jpg')}})">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4" style="margin-bottom:200px;margin-left:0px;text-align:left;color: white;text-shadow: 2px 2px 4px #000000;">Najkvalitetniji<br>svetski <br>brendovi<br> šminke</h1>
                    <!--<p class="lead">Zakažite svoj termin <u><a style="color:black" href="{{route('front.contact')}}">ovde.</a></u></p>-->
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" alt="profesionalno sminkanje za sve prilike novi sad kozmetika koja nije testirana na zivotinjama cruelty free makeup" style="background-image: url({{url('/skins/front/images/carousel/sminkanje_za_sve_prilike_mature_svadbe_novi_sad.jpg')}})">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4" style="color:white;margin-right:0px;text-align:right;margin-bottom:10%;">Profesionalno<br> šminkanje<br> za <br>sve<br> prilike</h1>
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
        <div class="col-md-4 ftco-animate">
							<a href="{{url('/skins/front/images/profesionalno_sminkanje_za_modeling_novi_sad.jpg')}}" alt="profesionalno sminkanje novi sad kozmetika cruelty free" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/profesionalno_sminkanje_za_modeling_novi_sad.jpg')}});">
									<div class="overlay"></div>
									<div class="text text-center">
                                        <h2 style="color:white;font-weight:100;">Šminka<br>za svaki dan</h2>
									</div>
								</a>
							</div>
							<div class="col-md-4 ftco-animate">
								<a href="{{url('/skins/front/images/ekstravagantna_sminka.jpg')}}" alt="profesionalno sminkanje za sve prilike novi sad" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/ekstravagantna_sminka.jpg')}});">
									<div class="overlay"></div>
									<div class="text text-center">
                                        <h2 style="color:white;font-weight:100;">Ekstravagantna<br>šminka</h2>
									</div>
								</a>
							</div>
							<div class="col-md-4 ftco-animate">
								<a href="{{url('/skins/front/images/profesionalno_sminkanje_novi_sad.jpg')}}" alt="makeup novi sad kozmetika svetskih brendova" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/profesionalno_sminkanje_novi_sad.jpg')}});">
									<div class="overlay"></div>
									<div class="text text-center">
                                        <h2 style="color:white;font-weight:100;">Šminka<br>za poslovne prilike</h2>
									</div>
								</a>
							</div>
							<div class="col-md-4 ftco-animate">
								<a href="{{url('/skins/front/images/sminkanje_novi_sad_cruelty_free_makeup.jpg')}}" alt="šminkanje za svadbe šminkanje za mature" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/sminkanje_novi_sad_cruelty_free_makeup.jpg')}});">
									<div class="overlay"></div>
									<div class="text text-center">
                                        <h2 style="color:white;font-weight:100;">Šminka <br>za devojačke večeri<br>i svadbe</h2>
									</div>
								</a>
							</div>
							<div class="col-md-4 ftco-animate">
								<a href="{{url('/skins/front/images/sminka_za_sve_prilike_sminka_za_svadbe.jpg')}}" alt="šminka za sve prilike šminka za svecanosti" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/sminka_za_sve_prilike_sminka_za_svadbe.jpg')}});">
									<div class="overlay"></div>
									<div class="text text-center">
                                        <h2 style="color:white;font-weight:100;">Šminka za izlaske<br>i rođendane</h2>
									</div>
								</a>
							</div>
							<div class="col-md-4 ftco-animate">
								<a href="{{url('/skins/front/images/profesionalno_sminkanje_mature_model_novi_sad.jpg')}}" alt="profesionalno sminkanje povoljne cene novi sad" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/profesionalno_sminkanje_mature_model_novi_sad.jpg')}});">
									<div class="overlay"></div>
									<div class="text text-center">
                                        <h2 style="color:white;font-weight:100;">Šminka za mature<br> i apsolventske večeri</h2>
									</div>
								</a>
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
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/note_beauty_sminka.jpg')}});"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

