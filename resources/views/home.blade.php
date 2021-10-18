@extends('base')

@section('title',"Accueil - ".config('app.name'))

@section('description',"Bienvenue sur ".config('app.name').", votre plateforme pour trouver une location, un endroit de
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
                        loading="lazy"
                        data-src="assets/images/vente-achat-location-hypotheque-maison-108855-1795-626x521.jpg">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1"><strong>Courtaze</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">Trouver du logement au Sénégal est un véritable
                        casse-tête. C’est pourquoi nous proposons beaucoup plus qu’une simple plateforme de
                        recherche.<br></p>
                    <div class="mbr-section-btn mt-3 mb-2">
                        @auth
                        @if(auth()->user()->type!='Client')
                        <form action="{{ route('offre.init.new') }}" method="post" style="display: inline;">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <select class="form-control" name="categorie_bien_id" id="categorie_bien_id">
                                    @foreach ($categorieBiens as $categorieBien)
                                    <option value="{{$categorieBien->id}}}">{{$categorieBien->nom}}</option>
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
                        <a class="btn btn-lg btn-success display-4" href="{{ route('login.page') }}"><span
                                class="fa fa-sign-in mbr-iconfont mbr-iconfont-btn"></span>Se connecter</a>
                        <a class="btn btn-lg btn-info display-4" href="{{ route('pre.register.page') }}"><span
                                class="icon54-v1-login-form2 mbr-iconfont mbr-iconfont-btn"></span>S'inscrire</a>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<x-categories />

<x-separator />

<section class="form cid-sLVhzdzOtv" id="formbuilder-8">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <!--Formbuilder Form-->
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler"
                    data-form-title="rechercheBienForm"><input type="hidden" name="email" data-form-email="true"
                        value="jJKLTKPdhV+o5MSgmvfPdmzK0lgNac5sIdCVX/oDZz9XskIimUQuhzppdOYLWmREfpsH5axUifu82Kbx2XKucJbTfCTCILh5s49w5VbKTwYx7j/b8nEbnLPj3obcXtZq.guuDrcjcpgnaHzRSW0w8Fa1+QoMgLV6m9E84MywDgoRPWWq55lNtbsm21DwQlWpdE6GCNQjCdMrXGWvcftz6baOwQHSf0bFtcu/2gc72QQ2i2AzrQik8h2IXCFO5Mjfi">
                    <div class="form-row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12"></div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...!
                            some problem!</div>
                    </div>
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Retrouvez rapidement ce que vous recherchez...
                            </h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="categorie_id">
                            <label for="categorie_id-formbuilder-8"
                                class="form-control-label mbr-fonts-style display-7">Catégorie</label>
                            <select name="categorie_id" data-form-field="categorie_id" class="form-control display-7"
                                id="categorie_id-formbuilder-8">
                                <option value="Toute">Toute</option>
                                <option value="Appartement">Appartement</option>
                                <option value="Villa">Villa</option>
                                <option value="Terrain">Terrain</option>
                                <option value="Immeuble">Immeuble</option>
                            </select>
                        </div>
                        <div data-for="ville" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="ville-formbuilder-8"
                                class="form-control-label mbr-fonts-style display-7">Ville</label>
                            <input type="text" name="ville" data-form-field="ville" class="form-control display-7"
                                value="" id="ville-formbuilder-8">
                        </div>
                        <div data-for="type" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="type-formbuilder-8"
                                class="form-control-label mbr-fonts-style display-7">Type</label>
                            <select name="type" data-form-field="type" class="form-control display-7"
                                id="type-formbuilder-8">
                                <option value="Tout">Tout</option>
                                <option value="Location">Location</option>
                                <option value="Vente">Vente</option>
                                <option value="Nuitée">Nuitée</option>
                            </select>
                        </div>
                        <div data-for="nombreChambre" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="nombreChambre-formbuilder-8"
                                class="form-control-label mbr-fonts-style display-7">Nombre chambres</label>
                            <input type="number" name="nombreChambre" data-form-field="nombreChambre"
                                class="form-control display-7" max="10" min="0" step="1" value=""
                                id="nombreChambre-formbuilder-8">
                        </div>
                        <div data-for="nombreToiletteInterieure" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="nombreToiletteInterieure-formbuilder-8"
                                class="form-control-label mbr-fonts-style display-7">Nombre de chambres avec
                                toilette intérieure</label>
                            <input type="number" name="nombreToiletteInterieure" max="100" min="0" step="1"
                                data-form-field="nombreToiletteInterieure" class="form-control display-7" value=""
                                id="nombreToiletteInterieure-formbuilder-8">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <div class="form-control-label">
                                <label for="Avec garage" class="mbr-fonts-style display-7">Options</label>
                            </div>
                            <div data-for="Cuisine" class="form-check form-check-inline">
                                <input type="checkbox" value="Yes" name="Cuisine" data-form-field="Cuisine"
                                    class="form-check-input display-7" id="Cuisine-formbuilder-8">
                                <label for="Cuisine-formbuilder-8" class="form-check-label display-7">Cuisine</label>
                            </div>
                            <div data-for="Toilette publique" class="form-check form-check-inline">
                                <input type="checkbox" value="Yes" name="Toilette publique"
                                    data-form-field="Toilette publique" class="form-check-input display-7"
                                    id="Toilette publique-formbuilder-8">
                                <label for="Toilette publique-formbuilder-8" class="form-check-label display-7">Toilette
                                    publique</label>
                            </div>
                            <div data-for="Garage" class="form-check form-check-inline">
                                <input type="checkbox" value="Yes" name="Garage" data-form-field="Garage"
                                    class="form-check-input display-7" id="Garage-formbuilder-8">
                                <label for="Garage-formbuilder-8" class="form-check-label display-7">Garage</label>
                            </div>
                            <div data-for="Meublé" class="form-check form-check-inline">
                                <input type="checkbox" value="Yes" name="Meublé" data-form-field="Meublé"
                                    class="form-check-input display-7" id="Meublé-formbuilder-8">
                                <label for="Meublé-formbuilder-8" class="form-check-label display-7">Meublé</label>
                            </div>
                            <div data-for="Toilette intérieure" class="form-check form-check-inline">
                                <input type="checkbox" value="Yes" name="Toilette intérieure"
                                    data-form-field="Toilette intérieure" class="form-check-input display-7"
                                    id="Toilette intérieure-formbuilder-8">
                                <label for="Toilette intérieure-formbuilder-8"
                                    class="form-check-label display-7">Toilette intérieure</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-auto"><button type="submit" class="btn btn-primary display-7"><span
                                    class="fa fa-filter mbr-iconfont mbr-iconfont-btn"></span>Filtrer</button></div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>

<x-separator />

<section data-bs-version="5.1" class="features3 cid-sLVFDQGTOP" id="features03-i">
    <div class="container">
        <div class="row">
            @foreach ($offres as $offre)
            <div class="сol-12 col-sm-12 col-md-6 col-lg-4 md-pb mb-2">
                <x-offre-item :offre="$offre" />
            </div>
            @endforeach
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
                        <a href="#"><span class="mbr-iconfont ico1 socicon-facebook socicon"
                                style="color: rgb(34, 165, 229); fill: rgb(34, 165, 229);"></span></a>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title align-left mbr-fonts-style display-5"><a href="#"
                                class="text-info">Facebook</a></h3>
                        <h4 class="mbr-text align-left mbr-fonts-style display-4">
                            Page</h4>
                    </div>
                    <div class="card-img">
                        <a href="#"><span class="mbr-iconfont ico2 mobi-mbri-right mobi-mbri"></span></a>
                    </div>
                </div>
            </div>
            <div class="card cardcolor p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <a href="#"><span class="mbr-iconfont ico1 socicon-vimeo socicon"
                                style="color: rgb(85, 180, 212); fill: rgb(85, 180, 212);"></span></a>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title align-left mbr-fonts-style display-5"><a href="#"
                                class="text-info">LinkedIn</a></h3>
                        <h4 class="mbr-text align-left mbr-fonts-style display-4">
                            Relations</h4>
                    </div>
                    <div class="card-img">
                        <a href="#"><span class="mbr-iconfont ico2 mobi-mbri-right mobi-mbri"></span></a>
                    </div>
                </div>
            </div>
            <div class="card cardcolor p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <a href="#"><span class="mbr-iconfont ico1 socicon-twitter socicon"
                                style="color: rgb(20, 157, 204); fill: rgb(20, 157, 204);"></span></a>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title align-left mbr-fonts-style display-5"><a href="#"
                                class="text-info">Twitter</a></h3>
                        <h4 class="mbr-text align-left mbr-fonts-style display-4">
                            NEWS FEED</h4>
                    </div>
                    <div class="card-img">
                        <a href="#"><span class="mbr-iconfont ico2 mobi-mbri-right mobi-mbri"></span></a>
                    </div>
                </div>
            </div>
            <div class="card cardcolor p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <a href="#"><span class="mbr-iconfont ico1 socicon-instagram socicon"
                                style="color: rgb(255, 127, 159); fill: rgb(255, 127, 159);"></span></a>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title align-left mbr-fonts-style display-5"><a href="#"
                                class="text-info">Instagram</a></h3>
                        <h4 class="mbr-text align-left mbr-fonts-style display-4">
                            PHOTO</h4>
                    </div>
                    <div class="card-img">
                        <a href="#"><span class="mbr-iconfont ico2 mobi-mbri-right mobi-mbri"></span></a>
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