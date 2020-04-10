@extends('front.layout')

@section('content')

<header>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" alt="devojka nasminkana srebrno plavom senkom za oci sa svecanom ogrlicom i mindjusama zabacuje kosu unazad" style="background-image: url({{url('/skins/front/images/carousel/devojka-nasminkana-srebrno-plavom-senkom-za-oci-sa-svecanom-ogrlicom-i-mindjusama-zabacuje-kosu-unazad.jpg')}});">
                <div class="carousel-caption">
                <h1 class="display-4" >Profesionalno <br>šminkanje</h1>    
                <h2 class="display-4" >White rabbit makeup</h2>                   
                </div>
            </div>
        </div>    
    </div>
</header>

<!--Testimonials-->
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
                        
                    </div>
                </div>
                <div class="testimonial">
                    <p class="description">
                        Milica je moj šminker zauvek definitivno! Zato što ne otaljava posao, već se potpuno posveti. Zato što zajedno dogovaramo vrstu šminke za moje potrebe. I zato što je umetnik, pa zna šta su boje, kontrasti i senka :) 
                    </p>
                    <div class="pic">
                        <img src='/skins/front/images/tijana.jpg' alt="sminka_za_svadbe_novi_sad">
                    </div>
                    <div class="testimonial-prof">
                        <h4>Tijana T.</h4>
                        
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
                        <h3>Koristim samo kozmetičke brendove koji <strong>nisu testirani na životinjama</strong> i želim da širim svest o tome.</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/kat_von_d_cruelty_free_kozmetika_sminka.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/bh_cosmetics_sminka.jpg')}});"></a>
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
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/milani_kozmetika_cruelty_free.jpg')}});"></a>
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
                <h3>Neke od mojih radova pogledajte u <strong><u><a href="{{route('front.gallery')}}" style="color:black;">galeriji</a></u></strong> na sajtu, na <strong><u><a href="https://www.instagram.com/whiterabbitmakeupns/" target="_blank" style="color:black;">Instagram</a></u></strong> ili <strong><u><a href="https://www.facebook.com/whiterabbitmakeup/" target="_blank" style="color:black;">Facebook</u></a></strong> profilu<br><br></h3>
            </div>
            <div class="col-md-4 ftco-animate">
				<a href="{{url('/skins/front/images/cut_crease_makeup.jpg')}}" alt="profesionalno sminkanje novi sad kozmetika cruelty free" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="margin-bottom:0;background-image: url({{url('/skins/front/images/cut_crease_makeup.jpg')}});">
</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="{{url('/skins/front/images/devojka-nasminkana-braon-sminkom-glam-makeup.jpg')}}" alt="devojka nasminkana braon sminkom glam makeup" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="margin-bottom:0;background-image: url({{url('/skins/front/images/devojka-nasminkana-braon-sminkom-glam-makeup.jpg')}});">
</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="{{url('/skins/front/images/sminka_za_sve_prilike_sminka_za_svadbe.jpg')}}" alt="makeup novi sad kozmetika svetskih brendova" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="margin-bottom:0;background-image: url({{url('/skins/front/images/sminka_za_sve_prilike_sminka_za_svadbe.jpg')}});">
</a>
			</div>
        </div>
    </div>
</section>



@endsection

