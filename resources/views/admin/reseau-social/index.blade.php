@extends('base')

@section('title',"Liste des réseaux sociaux...");

@section('description',"La liste des réseaux sociaux de la plateforme...");

@section('body')
<section data-bs-version="5.1" class="header1 cid-sM1lAQXZRJ" id="header01-3k">
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
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>Les réseaux sociaux</strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Ajouter tous les réseaux sociaux que les agences peuvent renseigner afin d'augmenter leurs
                        visibilités...</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-lg btn-primary display-4"
                            href="#formbuilder-3m"><span
                                class="mobi-mbri mobi-mbri-plus mbr-iconfont mbr-iconfont-btn"></span>Ajouter un
                            réseau</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="clients3 cid-sM1lVuYsUg" id="clients03-3o">
    <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 1600 40" style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
        <style type="text/css">
            .st0
        </style>
        <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
	s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
    </svg>
    <div class="images-container container">
        <div class="row justify-content-center">
            @forelse ($reseauSociaux as $reseauSocial)
            <div class="col-md-3 col-lg-3">
                <div class="card md-pb">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" loading="lazy"
                        class="lazyload" data-src="{{ asset('uploads/reseau-social/'.$reseauSocial->photo) }}">
                </div>
            </div>
            @empty
                <div class="alert alert-info" role="alert">
                    <strong>Il n'y a aucun réseau social paramétré pour l'instant</strong>
                </div>
            @endforelse
        </div>
    </div>
</section>

<section class="form cid-sM1lFnTPwQ" id="formbuilder-3m">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="{{ route('reseau-social.store') }}" method="POST" class="mbr-form form-with-styler"
                    data-form-title="reseauSocialNew" enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    <input type="hidden" name="email" data-form-email="true"
                        value="u1MC9lJocAi4WSVRqbXeRRNnCTfExKAT+lpBSrASTxilSvgCCGnS78qt7wePvTWXW8lWIWYZSicrx6zOP9SULvdzWEEwuwwrVhs8wNLv8F0CqS+TDv6AYn4FUDAnHRLT.dofwZspQ8wgACNtqZp8769kjyonO9B3QjDWDg/GlWHwmqqxRdHYCHUg1zEjXM1g0vdJznPh6X+uxTylUDMEfWXgBRJ0w2mk8rUpIUTSggFxCFW7KZ4wrFwYnG0S7OCYa">
                    <div class="form-row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12"></div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Formulaire ajout - Réseau Social</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="nom" style="">
                            <label for="nom-formbuilder-3m" class="form-control-label mbr-fonts-style display-7">Nom du
                                réseau</label>
                            <input type="text" name="nom" data-form-field="nom" class="form-control display-7"
                                required="required" value="" id="nom-formbuilder-3m">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="icon">
                            <label for="icon-formbuilder-3m"
                                class="form-control-label mbr-fonts-style display-7">Icon</label>
                            <input type="text" name="icon" data-form-field="icon" class="form-control display-7"
                                required="required" value="" id="icon-formbuilder-3m">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="photo">
                            <label for="photo-formbuilder-3m"
                                class="form-control-label mbr-fonts-style display-7">Photo</label>
                            <input type="file" name="photo" data-form-field="photo" class="form-control display-7"
                                required="required" value="" id="photo-formbuilder-3m">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary display-7">Enregistrer</button>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>

<x-separator />
@endsection