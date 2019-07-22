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
            <div class="carousel-item active" style="background-image: url({{url('/skins/front/images/carousel/cruelty_free_makeup_sminkanje_novi_sad.jpg')}})">
                <div class="carousel-caption d-none d-md-block">
                    <!--<h2 class="display-4"></h2>-->
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url({{url('/skins/front/images/carousel/profesionalno_sminkanje_poznati_brendovi_novi_sad.jpg')}})">
                <div class="carousel-caption d-none d-md-block">
                    <!--<h2 class="display-4">Second Slide</h2>
                    <p class="lead">This is a description for the second slide.</p>-->
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url({{url('/skins/front/images/carousel/sminkanje_za_sve_prilike_mature_svadbe_novi_sad.jpg')}})">
                <div class="carousel-caption d-none d-md-block">
                    <!--<h2 class="display-4">Third Slide</h2>
                    <p class="lead">This is a description for the third slide.</p>-->
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
                <a href="{{url('/skins/front/images/sminkanje_novi_sad_kozmetika_cruelty_free.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/sminkanje_novi_sad_kozmetika_cruelty_free.jpg')}});">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{url('/skins/front/images/model_sminkanje_novi_sad.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/model_sminkanje_novi_sad.jpg')}});">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{url('/skins/front/images/profesionalno_sminkanje_novi_sad.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/profesionalno_sminkanje_novi_sad.jpg')}});">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{url('/skins/front/images/sminkanje_za_sve_prilike_novi_sad.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/sminkanje_za_sve_prilike_novi_sad.jpg')}});">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{url('/skins/front/images/profesionalno_sminkanje_mature_model_novi_sad.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/profesionalno_sminkanje_mature_model_novi_sad.jpg')}});">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{url('/skins/front/images/lepota_model_sminkanje_cruelty_free_novi_sad.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/lepota_model_sminkanje_cruelty_free_novi_sad.jpg')}});">
                    <div class="overlay"></div>
                    <div class="text text-center">
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

