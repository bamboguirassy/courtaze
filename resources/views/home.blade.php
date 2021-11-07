@extends('base')

@section('title',(isset($agence)?$agence->nom:config('app.name').' - Votre plateforme de catalogage de biens immobiliers'))

@section('description',"Bienvenue sur ".(isset($agence)?$agence->nom:config('app.name')).", votre plateforme pour
trouver une location, un endroit de
séjour, un terrain ou une maison à acheter...")

@section('body')
<section data-bs-version="5.1" class="header1 cid-sBTN7vbAnD" id="header01-0">
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
                        loading="lazy" data-src="{{ asset('assets/images/key-5284793-960-720-512x512.png') }}">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1">
                        <strong>{{(isset($agence)?$agence->nom:config('app.name'))}}</strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        @isset($agence)
                        {{$agence->description}}
                        @else
                        Trouver un logement est un véritable casse-tête. C’est pourquoi nous avons pensé à
                        <strong>{{config('app.name')}}</strong>.
                        @endisset
                        <br>
                    </p>
                    <div class="mbr-section-btn mt-3 mb-2">
                        @auth
                        @if(auth()->user()->type!='Client')
                        <form action="{{ route('offre.init.new',compact('agence')) }}" style="display: inline-block;">
                            <div class="mb-3">
                                <select class="form-control" name="categorie_bien_id" id="categorie_bien_id">
                                    @foreach ($categories as $categorieBien)
                                    <option value="{{$categorieBien->id}}">{{$categorieBien->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-lg btn-primary display-4" type="submit"><span
                                    class="mdi-maps-local-offer mbr-iconfont mbr-iconfont-btn"></span>Publier une
                                offre
                            </button>
                        </form>
                        @endif
                        @endauth
                        @guest
                        <a class="btn btn-lg btn-success display-4"
                            href="{{ route('login') }}?ret={{Request::url()}}"><span
                                class="fa fa-sign-in mbr-iconfont mbr-iconfont-btn"></span>Se connecter</a>
                        <a class="btn btn-lg btn-primary display-4"
                            href="{{ route('pre.register') }}?type=Agence"><span
                                class="fa fa-plus mbr-iconfont mbr-iconfont-btn"></span>Créer une agence</a>
                        <a class="btn btn-lg btn-info display-4" href="{{ route('pre.register') }}"><span
                                class="icon54-v1-login-form2 mbr-iconfont mbr-iconfont-btn"></span>Ouvrir un compte</a>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="list3 cid-sNMOCmB5gI" id="list03-4s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-10 m-auto">
                <div class="content">
                    <div class="mbr-section-head align-left mb-2">
                        <h4 class="mbr-section-subtitle mb-2 mbr-fonts-style display-7">
                            <strong>Nous voulons rendre plus facile la recherche de biens pour les clients avec un large éventail de choix. Nous n'avons oublié aucun acteur !</strong>
                            </h4>
                    </div>
                    <div id="bootstrap-accordion_16" class="panel-group accordionStyles accordion" role="tablist"
                        aria-multiselectable="true">
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                    data-bs-toggle="collapse" data-core="" href="#collapse1_16" aria-expanded="false"
                                    aria-controls="collapse1">

                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-7">Vous êtes
                                        une agence ?</h6>
                                    <span class="sign mbr-iconfont mobi-mbri-plus"></span>
                                </a>
                            </div>
                            <div id="collapse1_16" class="panel-collapse noScroll collapse" role="tabpanel"
                                aria-labelledby="headingOne" data-parent="#bootstrap-accordion_16"
                                data-bs-parent="#accordion">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">Si vous êtes une agence, ouvrez
                                        votre agence en ligne et obtenez un site professionnel pour exposer vos services
                                        et biens. Obtenez un sous-nom de domaine et profitez pleinement de votre site.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                    data-bs-toggle="collapse" data-core="" href="#collapse2_16" aria-expanded="false"
                                    aria-controls="collapse2">

                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-7">Vous êtes
                                        courtier ?</h6>
                                    <span class="sign mbr-iconfont mobi-mbri-plus"></span>
                                </a>
                            </div>
                            <div id="collapse2_16" class="panel-collapse noScroll collapse" role="tabpanel"
                                aria-labelledby="headingOne" data-parent="#bootstrap-accordion_16"
                                data-bs-parent="#accordion">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">
                                        Vous êtes courtier et vous disposez d'un ensemble de biens à vendre ou à louer,
                                        il suffit de créer un compte et de diffuser et suivre vos annonces.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                    data-bs-toggle="collapse" data-core="" href="#collapse3_16" aria-expanded="false"
                                    aria-controls="collapse3">
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-7">Vous êtes
                                        propriétaire ?</h6>
                                    <span class="sign mbr-iconfont mobi-mbri-plus"></span>
                                </a>
                            </div>
                            <div id="collapse3_16" class="panel-collapse noScroll collapse" role="tabpanel"
                                aria-labelledby="headingOne" data-parent="#bootstrap-accordion_16"
                                data-bs-parent="#accordion">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4"></p>
                                    <p>
                                        Vous êtes propriétaire de bien et vous souhaitez diffuser vos propriétés sans
                                        passer par des intermédiaires ? Ouvrez un compte dès maintenant et publier vos
                                        biens pour que les clients puissent les retrouver.</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                    data-bs-toggle="collapse" data-core="" href="#collapse4_16" aria-expanded="false"
                                    aria-controls="collapse4">
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-7">Vous êtes
                                        client ?</h6>
                                    <span class="sign mbr-iconfont mobi-mbri-plus"></span>
                                </a>
                            </div>
                            <div id="collapse4_16" class="panel-collapse noScroll collapse" role="tabpanel"
                                aria-labelledby="headingOne" data-parent="#bootstrap-accordion_16"
                                data-bs-parent="#accordion">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">
                                        Si vous êtes clients et que vous voulez épingler les offres qui vous intéressent
                                        aussi, vous pouvez vous inscrire.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<x-separator />

<x-categories :categoris="$categories" :agence="$agence" />

<x-separator />

<section class="form cid-sLVhzdzOtv" id="formbuilder-8">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mbr-form">
                <!--Formbuilder Form-->
                <form action="{{ route('offre.filter',compact('agence')) }}" method="POST"
                    class="mbr-form form-with-styler" data-form-title="rechercheBienForm"><input type="hidden"
                        name="email" data-form-email="true"
                        value="jJKLTKPdhV+o5MSgmvfPdmzK0lgNac5sIdCVX/oDZz9XskIimUQuhzppdOYLWmREfpsH5axUifu82Kbx2XKucJbTfCTCILh5s49w5VbKTwYx7j/b8nEbnLPj3obcXtZq.guuDrcjcpgnaHzRSW0w8Fa1+QoMgLV6m9E84MywDgoRPWWq55lNtbsm21DwQlWpdE6GCNQjCdMrXGWvcftz6baOwQHSf0bFtcu/2gc72QQ2i2AzrQik8h2IXCFO5Mjfi">
                    @csrf
                    @method('post')
                    <x-display-validation-errors :errors="$errors->all()" />
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Retrouvez rapidement ce que vous recherchez...
                            </h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="categorie_id">
                            <label for="categorie_id-formbuilder-8"
                                class="form-control-label mbr-fonts-style display-7">Catégorie</label>
                            <select name="categorie_bien_id" data-form-field="categorie_id"
                                class="form-control display-7" id="categorie_id-formbuilder-8">
                                <option value="">Toutes les catégories</option>
                                @foreach ($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-for="proposition" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="proposition-formbuilder-8"
                                class="form-control-label mbr-fonts-style display-7">Proposition</label>
                            <select name="proposition" data-form-field="proposition" class="form-control display-7"
                                id="proposition-formbuilder-8">
                                <option value="">Tout</option>
                                <option value="Location">Location</option>
                                <option value="Vente">Vente</option>
                                <option value="Nuitée">Nuitée</option>
                            </select>
                        </div>
                        <div data-for="ville" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="ville-formbuilder-8"
                                class="form-control-label mbr-fonts-style display-7">Ville</label>
                            <input gm-places-autocomplete ng-model="placeAutoComplete" type="text" name="ville"
                                data-form-field="ville" class="form-control display-7" value=""
                                id="ville-formbuilder-8">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="prix" style="">
                            <label for="prix-formbuilder-c"
                                class="form-control-label mbr-fonts-style display-7">
                                <strong>Budget</strong>
                            </label>
                            <input type="number" name="prix" min="0" step="1" data-form-field="prix"
                                class="form-control display-7" value="" id="prix-formbuilder-c">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-auto">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary display-7">
                                    Chercher
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
            <div class="col-12 col-lg-6">
                {!! Adsense::ads('responsive') !!}
            </div>
        </div>
    </div>
</section>

<x-separator />

<section data-bs-version="5.1" class="features3 cid-sLVFDQGTOP" id="features03-i">
    <div class="container">
        <div class="row">
            @forelse ($offres as $offre)
            @if ($loop->index==3 || $loop->index==7 || $loop->index==10)
            <div class="сol-12 col-sm-12 col-md-6 col-lg-4 md-pb mb-2">
                {!! Adsense::ads('responsive') !!}
            </div>
            @endif
            <div class="сol-12 col-sm-12 col-md-6 col-lg-4 md-pb mb-2">
                <x-offre-item :offre="$offre" :agence="$agence" />
            </div>
            @empty
            <div class="alert alert-info" role="alert">
                <strong>Il n'y aucune aucune offre pour le moment !</strong>
            </div>

            @endforelse
        </div>
    </div>
</section>

<x-separator />

<section data-bs-version="5.1" class="extFeatures cid-sLVGOAXOM0" id="extSocialButtons3-l">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h3 class="mbr-section-subtitle align-left align-center mbr-light pb-5 mbr-fonts-style display-5">
                    Suivez nous sur les réseaux sociaux</h3>
            </div>
            <div class="card cardcolor p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <a href="https://web.facebook.com/bambogroupsn"><span class="mbr-iconfont ico1 socicon-facebook socicon"
                                style="color: rgb(34, 165, 229); fill: rgb(34, 165, 229);"></span></a>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title align-left mbr-fonts-style display-5"><a href="https://facebook.com/bambogroupsn"
                                class="text-info">Facebook</a></h3>
                        <h4 class="mbr-text align-left mbr-fonts-style display-4">
                            Page</h4>
                    </div>
                    <div class="card-img">
                        <a href="https://facebook.com/bambogroupsn"><span class="mbr-iconfont ico2 mobi-mbri-right mobi-mbri"></span></a>
                    </div>
                </div>
            </div>
            <div class="card cardcolor p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <a href="https://www.linkedin.com/company/bambogroupsn"><span class="mbr-iconfont ico1 socicon-vimeo socicon"
                                style="color: rgb(85, 180, 212); fill: rgb(85, 180, 212);"></span></a>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title align-left mbr-fonts-style display-5"><a href="https://www.linkedin.com/company/bambogroupsn"
                                class="text-info">LinkedIn</a></h3>
                        <h4 class="mbr-text align-left mbr-fonts-style display-4">
                            Relations</h4>
                    </div>
                    <div class="card-img">
                        <a href="https://www.linkedin.com/company/bambogroupsn"><span class="mbr-iconfont ico2 mobi-mbri-right mobi-mbri"></span></a>
                    </div>
                </div>
            </div>
            <div class="card cardcolor p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <a href="https://twitter.com/bambogroupsn"><span class="mbr-iconfont ico1 socicon-twitter socicon"
                                style="color: rgb(20, 157, 204); fill: rgb(20, 157, 204);"></span></a>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title align-left mbr-fonts-style display-5"><a href="https://twitter.com/bambogroupsn"
                                class="text-info">Twitter</a></h3>
                        <h4 class="mbr-text align-left mbr-fonts-style display-4">
                            NEWS FEED</h4>
                    </div>
                    <div class="card-img">
                        <a href="https://twitter.com/bambogroupsn"><span class="mbr-iconfont ico2 mobi-mbri-right mobi-mbri"></span></a>
                    </div>
                </div>
            </div>
            <div class="card cardcolor p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <a href="https://www.instagram.com/bambogroupsn/"><span class="mbr-iconfont ico1 socicon-instagram socicon"
                                style="color: rgb(255, 127, 159); fill: rgb(255, 127, 159);"></span></a>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title align-left mbr-fonts-style display-5"><a href="https://www.instagram.com/bambogroupsn/"
                                class="text-info">Instagram</a></h3>
                        <h4 class="mbr-text align-left mbr-fonts-style display-4">
                            PHOTO</h4>
                    </div>
                    <div class="card-img">
                        <a href="https://www.instagram.com/bambogroupsn/"><span class="mbr-iconfont ico2 mobi-mbri-right mobi-mbri"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="row">
    <div class="col-12">
        {!! Adsense::ads('responsive') !!}
    </div>
</div> --}}
<section ng-controller="MapMarker" data-bs-version="5.1" class="map1 cid-sNHz1kVgub" id="contacts01-4r">
    {{-- <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 1600 40" style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
        <style type="text/css">
            .st0
        </style>
        <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
	s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
    </svg> --}}
    <div class="container">
        <div id="map" class="google-map"><iframe frameborder="0" style="border:0"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" allowfullscreen=""
                loading="lazy" class="lazyload"
                data-src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=null"></iframe>
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