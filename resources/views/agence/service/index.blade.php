@extends('base')

@section("title","Liste des service de l'agence ".$agence->nom)

@section("description","Vous avez la possibilité d'ajouter l'ensemble des services fournis par vos agences")


@section('body')
<section data-bs-version="5.1" class="header1 cid-sM1iVPPI8w" id="header01-3c">
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
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1">
                        <p><strong>Nos services</strong></p>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Renseignez ici l'ensemble des services que vous offrez à vos clients afin qu'ils puissent les
                        voir sur votre site.</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-lg btn-primary-outline display-4"
                            href="#accordions01-3e"><span
                                class="mobi-mbri mobi-mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>Accéder à
                            la liste</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="info3 cid-sM1kQbp7vy" id="info3-3g">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form cid-sM1jK4sfqx" id="formbuilder-3d">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form" >
                <!--Formbuilder Form-->
                <form action="{{ route('service.store', compact('agence','services')) }}" method="POST" class="mbr-form form-with-styler"
                    data-form-title="serviceNewForm">
                    @csrf
                    @method('post')
                    <input type="hidden" name="email" data-form-email="true"
                        value="XJnn0pLhMLeEsKV/nfDPzk6v7baCed2joo338kmHMGkM+GOEiLg9y0OHvFH9eo1vg9sVLA0gKoz/Mz0b2/rYpIWorHTZF2zi9GR90yXiDhmYus0lNNejs2BgUHb6FDnC.u18YUpzKvP0hCwTPrZvH/8lQsp8l0I1agiP+TztqSdlM9cWcGLXAGiKk9ccmyJxAJ8Fl46z4WPaBqHrPBU1vxydA3wO6njplSxQRYfnFdyEznC4GPFd4h1UbEMwPgvoG">

                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Formulaire d'ajout - Service</h4>
                        </div>
                        <div >
                            <x-display-validation-errors :errors="$errors->all()"/>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="nom" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="nom-formbuilder-3d" class="form-control-label mbr-fonts-style display-7">Nom du
                                service</label>
                            <input type="text" name="nom" placeholder="Nom du service" data-form-field="nom"
                                class="form-control display-7" required="required" value="{{old('nom')}}" id="nom-formbuilder-3d">
                        </div>
                        <div data-for="description" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="description-formbuilder-3d"
                                class="form-control-label mbr-fonts-style display-7">Description du service</label>
                            <textarea name="description" placeholder="Description du service"
                                data-form-field="description" class="form-control display-7" required="required"
                                id="description-formbuilder-3d">
                                {{ old('description')}}
                            </textarea>

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

<section data-bs-version="5.1" class="info3 cid-sM1k7pFwKh" id="info3-3f">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="accordion1 cid-sM1jRtPhgQ" id="accordions01-3e">
    <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 1600 40" style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
        <style type="text/css">
            .st0
        </style>
        <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
	s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
    </svg>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-12">
                <div class="content-block">
                    <div class="accordion-content">
                        <div id="bootstrap-accordion_97" class="panel-group accordionStyles accordion " role="tablist"
                            aria-multiselectable="true">
                            @forelse ($services as $service )

                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="collapsed panel-title" data-toggle="collapse"
                                        data-bs-toggle="collapse" data-core="" href="#collapse1_97"
                                        aria-expanded="false" aria-controls="collapse1">
                                        <h4 class="mbr-fonts-style header-text mbr-white mbr-semibold display-5">
                                            {{$service->nom}}
                                        </h4>
                                        <span class="sign mbr-iconfont mobi-mbri-plus inactive"></span>

                                    </a>
                                </div>
                                <div id="collapse1_97" class="panel-collapse noScroll collapse" role="tabpanel"
                                    aria-labelledby="headingOne" data-parent="#bootstrap-accordion_97"
                                    data-bs-parent="#accordion">
                                    <div class="panel-body pt-4">
                                        <p
                                            class="mbr-fonts-style panel-text mbr-text mbr-white mb-3 mbr-regular display-4">
                                            {{$service->description}}
                                        </p>
                                        <hr>
                                        <button type="submit"  type="button" class="btn btn-warning btn-sm pull-right"><a  href="{{ route('service.edit', compact('service','agence')) }}">Modifier</a></button>

                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="alert alert-info" role="alert">
                                <strong>Aucune catégorie...</strong>
                            </div>
                            @endforelse



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
