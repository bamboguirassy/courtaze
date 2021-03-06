@extends('base')

@section('title',$offre)

@section('description',$offre->description)

@section('twitter-sharing')
<meta name="twitter:image:src"
    content="{{count($offre->images)?asset('uploads/offre/images/'.$offre->images[0]->nom):asset('assets/images/key-5284793-960-720-512x512.png')}}">
<meta property="og:image"
    content="{{count($offre->images)?asset('uploads/offre/images/'.$offre->images[0]->nom):asset('assets/images/key-5284793-960-720-512x512.png')}}">
@endsection
@section("body")
<section data-bs-version="5.1" class="header1 cid-sM0jdhQLxE" id="header01-24">
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
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                        <strong>{{ $offre }}</strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        {{$offre->description}}
                        <hr>
                        <span style="font-size: 12px;">Publi?? par <b>{{$offre->user->name}}</b>, le
                            {{date_format($offre->created_at,'d/m/Y')}}</span> &nbsp; - <span>{{ $offre->visitsCount }}
                            <span class="fa fa-eye" aria-hidden="true"></span></span>
                    </p>
                    <div class="mbr-section-btn mt-3">
                        @auth
                        @if($offre->user_id==auth()->user()->id)
                        <a class="btn btn-lg btn-warning display-4" href="{{ route('offre.edit',['offre'=>$offre]) }}">
                            <span class="mobi-mbri mobi-mbri-edit mbr-iconfont mbr-iconfont-btn"></span>Modifier
                        </a>
                        <form style="display: inline-block;"
                            action="{{ route('offre.change.visibility',compact('agence','offre')) }}" method="post">
                            @csrf
                            @method('put')
                            @if($offre->visible)
                            <button class="btn btn-lg btn-danger-outline display-4 mr-1">
                                <span class="fa fa-eye-slash mbr-iconfont mbr-iconfont-btn"></span>Cacher aux clients
                            </button>
                            @endif
                            @if(!$offre->visible)
                            <button class="btn btn-lg btn-primary-outline display-4">
                                <span class="fa fa-eye mbr-iconfont mbr-iconfont-btn"></span>Montrer aux clients
                            </button>
                        </form>
                        <form style="display: inline-block;"
                            action="{{ route('offre.destroy',compact('agence','offre')) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-lg btn-danger display-4 mt-1">
                                <span class="mobi-mbri mobi-mbri-trash mbr-iconfont mbr-iconfont-btn"></span>Supprimer
                            </button>
                            @endif
                        </form>
                        <form id="geoForm" action="{{ route('offre.geolocaliser',compact('agence','offre')) }}"
                            method="post" style="display: inline-block;">
                            @csrf
                            @method('post')
                            <input hidden="hidden" required="required" class="form-control" type="number" step="any"
                                name="longitude" id="longitude">
                            <input hidden="hidden" required="required" class="form-control" type="number" step="any"
                                name="latitude" id="latitude">
                            @if(!$offre->geolocalise)
                            <button id="geoButton" type="button" class="btn btn-lg btn-black display-4">
                                <span class="fa fa-map-marker mbr-iconfont mbr-iconfont-btn"></span>G??olocaliser
                            </button>
                            @else
                            <button id="geoButton" type="button" class="btn btn-lg btn-secondary display-4">
                                <span class="fa fa-map-marker mbr-iconfont mbr-iconfont-btn"></span>Relocaliser
                            </button>
                            @endif
                        </form>
                        @endif
                        @if (auth()->user()->type=="Client")
                        @if(!$offre->pinned)
                        <form style="display: inline-block;" action="{{ route('offre.pin',compact('agence','offre')) }}"
                            method="post">
                            @csrf
                            @method('post')
                            <button class="btn btn-lg btn-secondary display-4">
                                <span class="mobi-mbri mobi-mbri-pin mbr-iconfont mbr-iconfont-btn"></span>Epingler
                            </button>
                        </form>
                        @else
                        <form style="display: inline-block;"
                            action="{{ route('offre.unpin',compact('agence','offre')) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-lg btn-secondary-outline display-4" href="#"><span
                                    class="mdi-content-remove-circle mbr-iconfont mbr-iconfont-btn"></span>D??s??pingler
                            </button>
                        </form>
                        @endif
                        @endif
                        @endauth
                        <a class="btn btn-lg btn-success display-4" target="_blank"
                            href="https://wa.me/{{ $offre->user->telephoneWhatsapp }}?text={{Request::url()}}">
                            <span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn"></span>Prendre contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content6 cid-sM0jBR23BF" id="content06-25">
    {{-- <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 1600 40" style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
        <style type="text/css">
            .st0
        </style>
        <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
	s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
    </svg> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-5 image-wrapper mt-3">
                <img class="w-100 md-pb lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                    loading="lazy"
                    data-src="{{ asset('uploads/offre/images/'.(count($offre->images)>0?$offre->images[0]->nom:'')) }}">
            </div>
            <div class="col-12 col-md-12 col-lg">
                <div class="text-wrapper align-left">
                    <ul class="mbr-text mbr-fonts-style display-5">
                        <li><strong>{{ $offre }}</strong></li>
                        <li> <span class="fa fa-check"></span> Prix: {{ $offre->prix }} {{$offre->user->currency}}</li>
                        @if ($offre->nombreEtage)
                        <li> <span class="fa fa-check"></span> {{ $offre->nombreEtage }} ??tage(s)</li>
                        @endif
                        @if ($offre->nombreAppartement)
                        <li> <span class="fa fa-check"></span> {{ $offre->nombreAppartement }} appartement(s)</li>
                        @endif
                        @if ($offre->nombreStudio)
                        <li> <span class="fa fa-check"></span> {{ $offre->nombreStudio }} studio(s)</li>
                        @endif
                        @if ($offre->nombreChambre)
                        <li> <span class="fa fa-check"></span> {{ $offre->nombreChambre }} chambre(s)</li>
                        @endif
                        @if ($offre->nombreChambreAvecToilette)
                        <li> <span class="fa fa-check"></span> {{ $offre->nombreChambreAvecToilette }} chambres avec
                            toilette int??rieure </li>
                        @endif
                        @if ($offre->superficie)
                        <li> <span class="fa fa-check"></span> Superficie: {{ $offre->superficie }} m??</li>
                        @endif
                        @if ($offre->longueur && $offre->largeur)
                        <li> <span class="fa fa-check"></span> {{ $offre->longueur }} m / {{ $offre->largeur }} m</li>
                        @endif
                        @if ($offre->isMeuble)
                        <li> <span class="fa fa-check"></span> D??ja meubl??(e)</li>
                        @endif
                        @if ($offre->hasGarage)
                        <li> <span class="fa fa-check"></span> Avec garage</li>
                        @endif
                        @if ($offre->hasCuisine)
                        <li> <span class="fa fa-check"></span> Avec cuisine</li>
                        @if($offre->nombreCuisine>0)
                        <li> <span class="fa fa-check"></span> {{$offre->nombreCuisine}} cuisine(s)</li>
                        @endif
                        @endif
                        @if ($offre->hasToilettePublique)
                        <li> <span class="fa fa-check"></span> Avec toilette visiteur</li>
                        @endif
                        @if ($offre->hasSalon)
                        <li> <span class="fa fa-check"></span> Avec salon</li>
                        @endif
                        @if ($offre->hasToiletteInterieure)
                        <li> <span class="fa fa-check"></span> Avec toilette int??rieure</li>
                        @endif
                        @if($offre->niveau)
                        <li>Niveau: {{ $offre->niveau }}</li>
                        @endif
                    </ul>
                    @auth
                    @if($offre->user_id==auth()->user()->id)
                    <div class="mbr-section-btn mt-3"><a class="btn btn-lg btn-white display-4" href="#"><span
                                class="mobi-mbri mobi-mbri-plus mbr-iconfont mbr-iconfont-btn"></span>Ajouter des
                            photos</a> <a class="btn btn-lg btn-white display-4" href="#"><span
                                class="mobi-mbri mobi-mbri-trash mbr-iconfont mbr-iconfont-btn"></span>Supprimer toutes
                            les photos</a></div>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="map1 cid-sNHz1kVgub" id="contacts01-4r">
    {{-- <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 1600 40" style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
        <style type="text/css">
            .st0
        </style>
        <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
	s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
    </svg> --}}
    <div class="container mt-3">
        <div class="google-map"><iframe frameborder="0" style="border:0"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" allowfullscreen=""
                loading="lazy" class="lazyload"
                data-src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q={{ $offre->ville }}"></iframe>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="gallery4 mbr-gallery cid-sM0rayBZvX" id="gallery4-27">
    <div class="container">
        <div class="row mbr-gallery mt-4">
            @foreach ($offre->images as $image)
            @if ($loop->index==3)
            <div class="col-12 col-md-6 col-lg-6 item gallery-image">
                {!! Adsense::ads('responsive') !!}
            </div>
            @endif
            <div class="col-12 col-md-6 col-lg-6 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#sMbCSG6bg5-modal"
                    data-bs-target="#sMbCSG6bg5-modal">
                    <img class="w-100 lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                        data-slide-to="{{$loop->index}}" data-bs-slide-to="{{ $loop->index }}"
                        data-target="#lb-sMbCSG6bg5" data-bs-target="#lb-sMbCSG6bg5" loading="lazy"
                        data-src="{{ asset('uploads/offre/images/'.$image->nom) }}">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
            </div>
            @endforeach
            @if (count($offre->images)<3) <div class="col-12 col-md-6 col-lg-6 item gallery-image">
                {!! Adsense::ads('responsive') !!}
        </div>
        @endif
    </div>

    <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="sMbCSG6bg5-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="carousel slide" id="lb-sMbCSG6bg5" data-interval="5000" data-bs-interval="5000">
                        <div class="carousel-inner">
                            @foreach ($offre->images as $image)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <img class="d-block w-100 lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="" loading="lazy" data-src="{{ asset('uploads/offre/images/'.$image->nom) }}">
                            </div>
                            @endforeach
                        </div>
                        <ol class="carousel-indicators">
                            @foreach ($offre->images as $image)
                            <li data-slide-to="{{ $loop->index }}" data-bs-slide-to="{{ $loop->index }}" class="active"
                                data-target="#lb-sMbCSG6bg5" data-bs-target="#lb-sMbCSG6bg5"></li>
                            @endforeach
                        </ol>
                        <a role="button" href="" class="close" data-dismiss="modal" data-bs-dismiss="modal"
                            aria-label="Close">
                        </a>
                        <a class="carousel-control-prev carousel-control" role="button" data-slide="prev"
                            data-bs-slide="prev" href="#lb-sMbCSG6bg5">
                            <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                            <span class="sr-only visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next carousel-control" role="button" data-slide="next"
                            data-bs-slide="next" href="#lb-sMbCSG6bg5">
                            <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                            <span class="sr-only visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section data-bs-version="5.1" class="social-buttons2 luxurym4_social-buttons2 cid-sM17msauDb" id="social-buttons2-2w">
    <div class="container">
        <div class="media-container-row">
            <div class="col-md-10 col-lg-8 align-center">
                <h2 class="mbr-section-title mbr-fonts-style pb-3 display-2">
                    Partager sur</h2>
                <div class="mbr-social-likes">
                    <span class="btn btn-social socicon-bg-facebook facebook mx-2" title="Share link on Facebook">
                        <i class="socicon socicon-facebook"></i>
                    </span>
                    <span class="btn btn-social twitter socicon-bg-twitter mx-2" title="Share link on Twitter">
                        <i class="socicon socicon-twitter"></i>
                    </span>

                    <span class="btn btn-social vkontakte socicon-bg-vkontakte mx-2" title="Share link on VKontakte">
                        <i class="socicon socicon-vkontakte"></i>
                    </span>

                    <span class="btn btn-social pinterest socicon-bg-pinterest mx-2" title="Share link on Pinterest">
                        <i class="socicon socicon-pinterest"></i>
                    </span>
                    <span class="btn btn-social mailru socicon-bg-mail mx-2" title="Share link on Mailru">
                        <i class="socicon socicon-mail"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection