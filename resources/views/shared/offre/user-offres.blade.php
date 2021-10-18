@extends('base')

@section('title',"Mes offres")

@section("description","Liste des offres que j'ai publiées")

@section("body")
<section data-bs-version="5.1" class="header1 cid-sLWmy0mtOI" id="header01-1b">
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
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1"><strong>Mes publications</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Retrouvez ici l'ensemble des publications des biens que vous avez faites.</p>
                    <div class="mbr-section-btn mt-3">
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
                            <button class="btn btn-lg btn-secondary display-4">
                                <span class="icon54-v2-add-post-it mbr-iconfont mbr-iconfont-btn"></span>Publier une
                                nouvelle
                                offre</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<section class="form cid-sLWnFUpzCA" id="formbuilder-1e">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <!--Formbuilder Form-->
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler"
                    data-form-title="myPubFilterForm"><input type="hidden" name="email" data-form-email="true"
                        value="gzg+1110KBXwScvIKTu6WK5VWN4N3+kAhaQQALww2646s3mO0mRrV6Zw641L6qOmE3BAjDaSh3muaHz6oJbQKGjjWdqLuEx+dRh/1SMAJtLOg4D932aUQ5OzJZZp+Lzn.jFx2LJXbY4zUxKpPwE3mkJhBSpqj+2LF4UpD7bwnWjULrP4tBBOMM2FsRo5MuAKroQWLTYgyJ9HPv7XaNLGOoCyICLAceLDwB7p4zbfKa+lhvrh9/V4HnMCymKKXKXZk">
                    <div class="form-row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12"></div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Recherche rapide</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="categorie_id">
                            <label for="categorie_id-formbuilder-1e"
                                class="form-control-label mbr-fonts-style display-7">Catégorie</label>
                            <select name="categorie_id" data-form-field="categorie_id" class="form-control display-7"
                                id="categorie_id-formbuilder-1e">
                                <option value="Villa">Villa</option>
                                <option value="Terrain">Terrain</option>
                                <option value="Appartement">Appartement</option>
                            </select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="status">
                            <label for="status-formbuilder-1e"
                                class="form-control-label mbr-fonts-style display-7">Statut</label>
                            <select name="status" data-form-field="status" class="form-control display-7"
                                id="status-formbuilder-1e">
                                <option value="Tout">Tout</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
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

<section data-bs-version="5.1" class="features3 cid-sMbsY2dR3x" id="features03-4m">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mbr-font display-5">Liste des offres actives...</h3>
                <hr>
            </div>
            @foreach ($offreActives as $offre)
            <div class="сol-12 col-sm-12 col-md-6 col-lg-4 md-pb mb-2">
                <x-offre-item :offre="$offre" />
            </div>
            @endforeach
        </div>
    </div>
</section>
@if (count($offreInactives)>0)
<x-separator />

<section data-bs-version="5.1" class="features3 cid-sMbsY2dR3x" id="features03-4m">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mbr-font display-5">Liste des offres inactives.</h3>
                <hr>
            </div>
            @foreach ($offreInactives as $offre)
            <div class="сol-12 col-sm-12 col-md-6 col-lg-4 md-pb mb-2">
                <x-offre-item :offre="$offre" />
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection