@extends('base')

@section('title',"Page de contact de ".$agence)

@section('description',"Contactez nous directement sur cette page...")

@section('body')
<section data-bs-version="5.1" class="header1 cid-sLWsGuv2ut" id="header01-1n">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 900" width="1600" height="900" class="lottie__svg"
        preserveAspectRatio="none">
        <defs>
            <clipPath id="__lottie_element_56">
                <rect width="1600" height="900" x="0" y="0"></rect>
            </clipPath>
        </defs>
        <g clip-path="url(#__lottie_element_56)">
            <g transform="matrix(1,0,0,1,1389.843017578125,-225.20799255371094)" opacity="1" style="display: block;">
                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                    <path fill="rgb(255,237,168)" fill-opacity="1"
                        d=" M-419.624755859375,415.6952209472656 C17.504684448242188,354.5908203125 503.072998046875,568.8040161132812 708.1630249023438,382.1440124511719 C913.2529907226562,195.4739990234375 407.1830139160156,25.333999633789062 407.1830139160156,-114.36599731445312 C407.1830139160156,-283.6960144042969 431.1730041503906,-345.0660095214844 316.9930114746094,-426.3559875488281 C146.18299865722656,-547.9760131835938 69.49299621582031,-405.5559997558594 -319.84698486328125,-361.5459899902344 C-641.4569702148438,-325.1860046386719 -1008.0747680664062,-305.5247802734375 -870.084716796875,-3.934781312942505 C-732.0947265625,297.65521240234375 -740.6259765625,460.5013732910156 -419.624755859375,415.6952209472656z">
                    </path>
                </g>
            </g>
        </g>
    </svg>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-5 m-auto">
                <div class="image-wrapper md-pb">
                    <img class="w-100 lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                        loading="lazy" data-src="assets/images/mbr-1476x984.jpg">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1"><strong>{{$agence}}</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        {{$agence->description}}</p>
                    <div class="mbr-section-btn mt-3">
                        <a target="_blank" class="btn btn-lg btn-success display-4"
                            href="https://wa.me/{{$agence->user->telephoneWhatsapp}}"><span
                                class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn"></span>Contacter sur
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<section data-bs-version="5.1" class="contacts2 cid-sLWtI0dtcJ" id="contacts02-1p">
    <div class="container">
        <div class="mbr-section-head pb-4">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">Contacts
            </h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-7">Prenez contact dès
                aujourd'hui pour tout besoin !</h4>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"
                                style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                        </div>
                        <h4 class="card-title mbr-fonts-style mb-2 display-5">
                            Email
                        </h4>
                        <p class="mbr-text mbr-fonts-style mb-2 display-4">
                            Nous répondrons le plutôt possible</p>
                        <h5 class="link mbr-fonts-style display-7"><a href="mailto:{{$agence->user->email}}"
                                class="text-white">Nous envoyer un mail</a></h5>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-mobile-2 mobi-mbri"
                                style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                        </div>
                        <h4 class="card-title mbr-fonts-style align-center mb-2 display-5">
                            Téléphone perso.</h4>
                        <p class="mbr-text mbr-fonts-style mb-2 display-4">
                            Mon - Fri 09:00 - 18:00</p>
                        <h5 class="link mbr-black mbr-fonts-style display-7">
                            <a href="tel:{{$agence->user->telephonePersonnel}}" class="text-white">Appeler {{$agence->user->telephonePersonnel}}</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="map1 cid-sLWttgdJjK" id="contacts01-1o">
    <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 1600 40" style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
        <style type="text/css">
            .st0
        </style>
        <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
	s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
    </svg>
    <div class="container">
        <div class="google-map"><iframe frameborder="0" style="border:0"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" allowfullscreen=""
                loading="lazy" class="lazyload"
                data-src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q={{$agence->adresse}}"></iframe>
        </div>
    </div>
</section>
@endsection