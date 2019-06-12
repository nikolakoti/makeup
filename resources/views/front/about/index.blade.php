@extends('front.layout')

@section('content')

<section class="ftco-section bg-light ftco-bread">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-9 ftco-animate">
                <h1 class="mb-3 bread">O meni</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section-no-padding bg-light">
    <div class="hero-wrap">
        <div class="overlay"></div>
        <div class="d-flex">
            <div class="author-image text img p-md-5 ftco-animate" style="background-image: url({{url('/skins/front/images/author.jpg')}});">
            </div>
            <div class="author-info text p-4 mt-5 mb-5 ftco-animate mycolor">
                <div class="desc">
                    <p class="mb-4">Zovem se <strong>Milica Kaljević</strong> i živim u Novom Sadu.</p>
                    <p class="mb-4">Na svom umetničkom putu, dugom 21 godinu, od srednje škole za dizajn do Akademije umetnosti, konačni i pravi izraz pronalazim u lepoti lica i šminkanju. Uživajući u beskrajnoj igri sa bojama, anatomijom i iluzijom u isticanju lepog koristeći sve prednosti koje nam šminka pruža.
                    <p><strong>Dobro došli u White rabbit makeup,</strong></p>
                    <p>jedino mesto koje brine kako o lepoti tako i o životinjama, koristeći isključivo proizvode koji nisu testirani na njima.</p>
                    <p>S ljubavlju, vaša Milica. </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

