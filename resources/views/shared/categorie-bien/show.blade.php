@extends('base')

@section("title","Les offres dans la catégorie ".$categorieBien->nom)

@section('description',"Retrouvez toutes les offres dans la catégorie ".$categorieBien->nom)

@section("body")
<section data-bs-version="5.1" class="header1 cid-sM3dDVgYqj" id="header01-4a">
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
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1"><strong>Appartement</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Retrouvez toutes les offres pour appartement.</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-lg btn-primary-outline display-4"
                            href="#features03-4i">Accéder à la liste</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                        <div data-for="type" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="type-formbuilder-8"
                                class="form-control-label mbr-fonts-style display-7">Proposition</label>
                            <select name="type" data-form-field="type" class="form-control display-7"
                                id="type-formbuilder-8">
                                <option value="Tout">Tout</option>
                                <option value="Location">Location</option>
                                <option value="Vente">Vente</option>
                                <option value="Nuitée">Nuitée</option>
                            </select>
                        </div>
                        <div data-for="ville" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="ville-formbuilder-8"
                                class="form-control-label mbr-fonts-style display-7">Ville</label>
                            <input type="text" name="ville" data-form-field="ville" class="form-control display-7"
                                value="" id="ville-formbuilder-8">
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
                        <div class="col-12 form-group">
                            <div class="form-control-label">
                                <label for="Avec garage" class="mbr-fonts-style display-7">Niveau</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label display-7">
                                    <input type="radio" class="form-check-input" name="niveau" id="niveau"
                                        value="Rez-de-chaussée" checked>
                                    Rez-de-chaussée
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label display-7">
                                    <input type="radio" class="form-check-input" name="niveau" id="niveau"
                                        value="Etage">
                                    Etage
                                </label>
                            </div>
                        </div>
                        <div data-for="priceRange" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="priceRange-formbuilder-8"
                                class="form-control-label mbr-fonts-style display-7">Fourchette de prix</label>
                            <div class="row">
                                <div class="col-6">
                                    <input placeholder="prix minimum" type="number" name="minPrice"
                                        data-form-field="priceRange" class="form-control display-7" max="100000000"
                                        min="0" id="priceRange-formbuilder-8">
                                </div>
                                <div class="col-6">
                                    <input placeholder="prix maximum" type="number" name="maxPrice"
                                        data-form-field="priceRange" class="form-control display-7" max="100000000"
                                        min="0" id="priceRange-formbuilder-8">
                                </div>
                            </div>
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
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary display-7">
                                <span class="fa fa-filter mbr-iconfont mbr-iconfont-btn"></span>
                                Filtrer</button>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>

<x-separator />

<section data-bs-version="5.1" class="features3 cid-sMbsvTwJ1S" id="features03-4i">
    <div class="container">
        <div class="row">
            @foreach ($categorieBien->offreActives as $offre)
            <div class="сol-12 col-md-12 col-lg-4 md-pb">
                <x-offre-item :offre="$offre" />
            </div>
            @endforeach
            @empty($categorieBien->offreActives)
            <div class="col-12">
                <div class="alert alert-info" role="alert">
                    <strong>Aucune offre n'est encore disponible dans la catégorie {{$categorieBien->nom}}</strong>
                </div>
            </div>
            @endempty
        </div>
    </div>
</section>
@endsection