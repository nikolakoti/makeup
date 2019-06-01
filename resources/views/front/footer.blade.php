<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <h2 class="logo">
                    <a href="{{route('front.home')}}"> 
                        <img class="img-responsive" src="{{url('/skins/front/images/logo/logo.jpg')}}" alt="logo"/> 
                    </a>
                </h2>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <h5><i>~ Šminkanje je umetnost, a vi ste platno ~</i></h5>
                <ul>
                    <li><a href="{{route('front.gallery')}}">Galerija</a></li>
                    <li><a href="{{route('front.about')}}">O meni</a></li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <h5>Kontakt</h5>
                <ul>
                    <li><a href="mailto:whiterabbitmakeupartist@gmail.com">whiterabbitmakeupartist@gmail.com</a></li>
                    <li><a href="tel:0692354303">069 2354303</a></li>
                </ul>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="social-networks">
                    <a href="https://www.instagram.com/whiterabbitmakeupns/" target="_blank" class="twitter"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/whiterabbitmakeup/?modal=admin_todo_tour" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>                     
                </div>
                <a href="{{route('front.contact')}}">
                    <button type="button" class="btn btn-default">Zakaži</button>
                </a>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2019 Copyright</p>
    </div>
</footer>