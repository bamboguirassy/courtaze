@extends('base')

@section('title',"Détails - ".$agence->nom)

@section('description',"Information sur l'agence ".$agence->nom)

@section('body')
<section data-bs-version="5.1" class="header1 cid-sLWp58dFLI" id="header01-1i">
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
            <div class="col-12 col-md-12 col-lg-4 m-auto">
                <div class="image-wrapper md-pb">
                    <img class="w-100 lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                        loading="lazy"
                        data-src="{{ isset($agence->logo)?asset('uploads/agence/logos/'.$agence->logo):'https://via.placeholder.com/150' }}">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1">
                        <strong>{{ $agence->nom }}</strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        {{ $agence->description }}</p>
                    @auth
                    @if (auth()->user()->id==$agence->user_id || auth()->user()->type=='Admin')
                    <div class="mbr-section-btn mt-3">
                        <a class="btn btn-lg btn-warning display-4" href="{{ route('agence.edit',compact('agence')) }}">
                            <span class="mobi-mbri mobi-mbri-edit mbr-iconfont mbr-iconfont-btn"></span>
                            Modifier</a>
                    </div>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<section data-bs-version="5.1" class="info1 restaurantm4_info1 cid-sLWqmzOgPA" id="info1-1j">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xs-12 text-block col-sm-5">
                <h2 class="mbr-section-title mbr-fonts-style align-left display-2"><strong>
                        {{ $agence->nom }}</strong></h2>
                <h3 class="mbr-section-subtitle mbr-fonts-style pb-3 align-left display-5">
                    <em>Domaine: {{$agence->domain}}.katalog.tech</em>
                </h3>
                <div class="mbr-section-text mbr-fonts-style align-left display-7">Adresse : {{ $agence->adresse }}
                </div>
                <div class="underline align-left">
                    <div class="line"></div>
                </div>
                <div class="mbr-section-text mbr-fonts-style align-left display-7"><span>Tél WhatsApp :&nbsp; {{
                        $agence->user->telephoneWhatsapp }}</span></div>
                <div class="underline align-left">
                    <div class="line"></div>
                </div>
                <div class="mbr-section-text mbr-fonts-style align-left display-7">
                    <span>Tél perso: {{ $agence->user->telephonePersonnel }} <br>
                        {{ $agence->user->email }}
                    </span>
                </div>
                <div class="social-media pt-4 align-left">
                    <ul class="list-inline">
                        @foreach ($agence->socialLinks as $socialLink)
                        <li class="list-inline-item">
                            <a target="_blank" class="icon-transition" href="{{ $socialLink->lien }}">
                                <span class="mbr-iconfont {{$socialLink->reseauSocial->icon}} socicon"></span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-7 img-block align-center">
                <div class="mbr-figure">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                        title="" loading="lazy" class="lazyload" data-src="assets/images/mbr-1476x984.jpg">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection