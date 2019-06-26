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
            <div class="carousel-item active" style="background-image: url({{url('/skins/front/images/carousel/car1.jpg')}})">
                <div class="carousel-caption d-none d-md-block">
                    <!--<h2 class="display-4"></h2>-->
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url({{url('/skins/front/images/carousel/car2.jpg')}})">
                <div class="carousel-caption d-none d-md-block">
                    <!--<h2 class="display-4">Second Slide</h2>
                    <p class="lead">This is a description for the second slide.</p>-->
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url({{url('/skins/front/images/carousel/car3.jpg')}})">
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
                <a href="{{url('/skins/front/images/image_1.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/image_1.jpg')}});">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{url('/skins/front/images/image_2.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/image_2.jpg')}});">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{url('/skins/front/images/image_3.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/image_3.jpg')}});">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{url('/skins/front/images/image_4.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/image_4.jpg')}});">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{url('/skins/front/images/image_5.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/image_5.jpg')}});">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{url('/skins/front/images/image_6.jpg')}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{url('/skins/front/images/image_6.jpg')}});">
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
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/aden.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/bh.png')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/kryolan1.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/melkior.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/milani.png')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry-logo ftco-animate">
                            <a class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/logo/note.jpg')}});"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

