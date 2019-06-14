@extends('front.layout')

@section('content')
<style>
    body {
    background-image: url({{url('/skins/front/images/back_contact.jpg')}});
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    }
</style>
<section class="ftco-section bg-light ftco-bread">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-9 ftco-animate">
                <h1 class="mb-3 bread">Kontakt</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section-contact contact-section">
    <div class="container">
        <div class="row block-9 pt-4">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 offset-lg-3 offset-md-2">
                <div class="bg-light p-5 mycolor">
                    <p><span><i class="material-icons">location_on</i></span>&emsp;<a>Bulevar Oslobođenja 66b/64, Novi Sad</a>&emsp;</p>
                    <p><span><i class="material-icons">phone_android</i></span>&emsp;<a href="tel:0692354303" style="color:rgb(0,0,0,0.7)">069 2354303</a></p>
                    <p><span><i class="material-icons">email</i></span>&emsp;<a href="mailto:kontakt@whiterabbitmakeup.com" style="color:rgb(0,0,0,0.7)">kontakt@whiterabbitmakeup.com</a></p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 order-md-last offset-lg-3 offset-md-2">

                <form action="#" class="bg-light p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ime">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Vaša mejl adresa">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Broj telefona">
                    </div>							
                    <div class="form-group">
                        <input type="input" class="form-control datepicker" placeholder="Željeni termin (datum)">																	
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Poruka (predložite satnicu kada Vam odgovara termin za šminkanje)"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Pošalji poruku" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

