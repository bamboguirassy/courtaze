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
                        data-src="{{ asset('assets/images/key-5284793-960-720-512x512.png') }}">
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
                <form enctype="multipart/form-data"
                    action="{{ route('categorie.offre.filter',['categorie'=>$categorieBien]) }}" method="POST"
                    data-rcpha_sitekey="" data-rcpha_secretkey="" class="mbr-form form-with-styler">
                    @csrf
                    @method('post')
                    <input hidden type="number" name="categorie_bien_id" value="{{$categorieBien->id}}">
                    <x-display-validation-errors :errors="$errors->all()" />
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Recherche <strong>{{$categorieBien->nom}}</strong></h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="nombreAppartement">
                            <label for="proposition" class="form-control-label mbr-fonts-style display-7">
                                <strong>Proposition commerciale</strong>
                            </label>
                            <select class="form-control" name="proposition" id="proposition">
                                @if ($categorieBien->code=="STUDIO" || $categorieBien->code=="APPART" ||
                                $categorieBien->code=="VILLA" || $categorieBien->code=="IMMO" ||
                                $categorieBien->code=="CHAMBRE")
                                <option>Location</option>
                                @endif
                                @if ($categorieBien->code=="TERRAIN" || $categorieBien->code=="STUDIO" ||
                                $categorieBien->code=="APPART" || $categorieBien->code=="VILLA" ||
                                $categorieBien->code=="IMMO")
                                <option>Vente</option>
                                @endif
                                @if ($categorieBien->code=="HOTE")
                                <option>Nuitée</option>
                                @endif
                            </select>
                        </div>
                        @if ($categorieBien->code=="IMMO" || $categorieBien->code=="VILLA")
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="nombreEtage">
                            <label for="nombreEtage-formbuilder-c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Nombre
                                    d'étages</strong></label>
                            <input type="number" name="nombreEtage" min="0" step="1" data-form-field="nombreEtage"
                                class="form-control display-7" value="" id="nombreEtage-formbuilder-c">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="nombreAppartement">
                            <label for="nombreAppartement-formbuilder-c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Nombre
                                    d'appartements</strong></label>
                            <input type="number" name="nombreAppartement" min="0" step="1"
                                data-form-field="nombreAppartement" class="form-control display-7" value=""
                                id="nombreAppartement-formbuilder-c">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="nombreStudio" style="">
                            <label for="nombreStudio-formbuilder-c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Nombre de
                                    studios</strong></label>
                            <input type="number" name="nombreStudio" min="0" step="1" data-form-field="nombreStudio"
                                class="form-control display-7" value="" id="nombreStudio-formbuilder-c">
                        </div>
                        @endif
                        @if ($categorieBien->code=="TERRAIN")
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="superficie" style="">
                            <label for="superficie-formbuilder-c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Superficie
                                    (m²)</strong></label>
                            <input type="number" name="superficie" min="0" step="1" data-form-field="superficie"
                                class="form-control display-7" value="" id="superficie-formbuilder-c">
                        </div>
                        @endif
                        @if ($categorieBien->code=="STUDIO" || $categorieBien->code=="APPART")
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" style="" data-for="nombreChambre">
                            <label for="nombreChambre-formbuilder-c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Nombre de
                                    chambres</strong></label>
                            <input type="number" name="nombreChambre" min="1" step="1" data-form-field="nombreChambre"
                                class="form-control display-7" value="" id="nombreChambre-formbuilder-c">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="nombreChambreAvecToilette">
                            <label for="nombreChambreAvecToilette-formbuilder-c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Nombre chambre avec
                                    toilette intérieure</strong></label>
                            <input type="number" name="nombreChambreAvecToilette" min="1" step="1"
                                data-form-field="nombreChambreAvecToilette" class="form-control display-7" value=""
                                id="nombreChambreAvecToilette-formbuilder-c">
                        </div>
                        @endif
                        @if ($categorieBien->code!="HOTE" && $categorieBien->code!="TERRAIN")
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" style="">
                            <div class="form-control-label">
                                <label for="checkbox" class="mbr-fonts-style display-7"><strong>Options</strong></label>
                            </div>
                            @if ($categorieBien->code=="STUDIO" || $categorieBien->code=="APPART" ||
                            $categorieBien->code=="IMMO" || $categorieBien->code=="CHAMBRE")
                            <div data-for="Meublé" class="form-check form-check-inline">
                                <input type="checkbox" value="1" name="isMeuble" data-form-field="Meublé"
                                    class="form-check-input display-7" id="Meublé-formbuilder-c">
                                <label for="Meublé-formbuilder-c" class="form-check-label display-7">Meublé</label>
                            </div>
                            @if ($categorieBien->code=="APPART" || $categorieBien->code=="VILLA")
                            <div data-for="Garage" class="form-check form-check-inline">
                                <input type="checkbox" value="1" name="hasGarage" data-form-field="Garage"
                                    class="form-check-input display-7" id="Garage-formbuilder-c">
                                <label for="Garage-formbuilder-c" class="form-check-label display-7">Garage</label>
                            </div>
                            @endif
                            @if ($categorieBien->code=="APPART" || $categorieBien->code=="STUDIO" ||
                            $categorieBien->code=="VILLA")
                            <div data-for="Cuisine" class="form-check form-check-inline">
                                <input type="checkbox" value="1" name="hasCuisine" data-form-field="Cuisine"
                                    class="form-check-input display-7" id="Cuisine-formbuilder-c">
                                <label for="Cuisine-formbuilder-c" class="form-check-label display-7">Cuisine</label>
                            </div>
                            <div data-for="hasToilettePublique" class="form-check form-check-inline">
                                <input type="checkbox" value="1" name="hasToilettePublique"
                                    data-form-field="hasToilettePublique" class="form-check-input display-7"
                                    id="hasToilettePublique-formbuilder-c">
                                <label for="hasToilettePublique-formbuilder-c"
                                    class="form-check-label display-7">Toilette
                                    visiteur</label>
                            </div>
                            <div data-for="Avec salon" class="form-check form-check-inline">
                                <input type="checkbox" value="1" name="hasSalon" data-form-field="Avec salon"
                                    class="form-check-input display-7" id="Avec salon-formbuilder-c">
                                <label for="Avec salon-formbuilder-c" class="form-check-label display-7">Salon</label>
                            </div>
                            @endif
                            @endif
                            @if ($categorieBien->code=="CHAMBRE")
                            <div data-for="Avec toilette intérieure" class="form-check form-check-inline">
                                <input type="checkbox" value="1" name="hasToiletteInterieure"
                                    data-form-field="Avec toilette intérieure" class="form-check-input display-7"
                                    id="Avec toilette intérieure-formbuilder-c">
                                <label for="Avec toilette intérieure-formbuilder-c"
                                    class="form-check-label display-7">Avec toilette intérieure</label>
                            </div>
                            @endif
                        </div>
                        @endif
                        @if ($categorieBien->code=="APPART" || $categorieBien->code=="STUDIO" ||
                        $categorieBien->code=="CHAMBRE")
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="niveau" style="">
                            <div class="form-control-label">
                                <label for="niveau-formbuilder-c"
                                    class="mbr-fonts-style display-7"><strong>Niveau</strong></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="niveau" data-form-field="niveau"
                                    class="form-check-input display-7" value="" checked="" id="niveau-formbuilder-c">
                                <label class="form-check-label display-7">Pas précisé</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="niveau" data-form-field="niveau"
                                    class="form-check-input display-7" value="Rez-de-chaussée" checked=""
                                    id="niveau-formbuilder-c">
                                <label class="form-check-label display-7">Rez-de-chaussée</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="niveau" data-form-field="niveau"
                                    class="form-check-input display-7" value="Etage" id="niveau-formbuilder-c">
                                <label class="form-check-label display-7">Etage</label>
                            </div>
                        </div>
                        @endif
                        @if ($categorieBien->code=="APPART" || $categorieBien->code=="VILLA")
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="nombreCuisine">
                            <label for="nombreCuisine-formbuilder-c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Nombre de
                                    cuisines</strong></label>
                            <input type="number" name="nombreCuisine" max="100" min="1" step="1"
                                data-form-field="nombreCuisine" class="form-control display-7" value=""
                                id="nombreCuisine-formbuilder-c">
                        </div>
                        @endif
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="ville" style="">
                            <label for="ville-formbuilder-c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Ville</strong></label>
                            <input type="text" name="ville" placeholder="Ville" data-form-field="ville"
                                class="form-control display-7" value="" id="ville-formbuilder-c">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="prix">
                            <label for="prix-formbuilder-c" class="form-control-label mbr-fonts-style display-7">
                                <strong>Quel est votre budget ?</strong>
                            </label>
                            <input type="number" name="prix" placeholder="Prix" max="" min="5000" step="5"
                                data-form-field="prix" class="form-control display-7" value="" id="prix-formbuilder-c">
                        </div>
                        <div class="col-auto">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block display-7">Chercher</button>
                            </div>
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
            @foreach ($offres as $offre)
            @if ($loop->index==3 || $loop->index==7 || $loop->index==10)
            <div class="сol-12 col-sm-12 col-md-6 col-lg-4 md-pb mb-2">
                {!! Adsense::ads('responsive') !!}
            </div>
            @endif
            <div class="сol-12 col-md-12 col-lg-4 md-pb">
                <x-offre-item :offre="$offre" />
            </div>
            @endforeach
            @empty($offres)
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