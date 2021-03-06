@extends('base')

@section('title',"Modification agence ".$agence->nom)

@section('description',"")

@section('body')
<section data-bs-version="5.1" class="header1 cid-sLW9sfV5gE" id="header01-t">
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
            <div class="col-12 m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1">
                        <strong>
                            @isset($agence)
                            {{$agence->nom}}
                            @endisset
                        </strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Mis ?? jour des information de votre agence</p>
                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<section class="form cid-sLWaxOklPM" id="formbuilder-u">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="{{ route('agence.update',compact('agence')) }}" method="POST" class="mbr-form form-with-styler"
                    data-form-title="registerForm" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <x-display-validation-errors :errors="$errors->all()" />
                    <div class="dragArea form-row">
                        <div data-for="nom" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="nom-formbuilder-u" class="form-control-label mbr-fonts-style display-7">
                                Nom de l'agence *
                            </label>
                            <input value="{{ old('nom') ?? $agence->nom }}" type="text" name="nom" placeholder="Nom"
                                data-form-field="nom" class="form-control display-7" required="required" value=""
                                id="nom-formbuilder-u">
                        </div>
                        <div data-for="slogan" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="slogan-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Slogan de l'agence *</label>
                            <input value="{{ old('slogan') ?? $agence->slogan }}" type="text" name="slogan"
                                placeholder="Slogan de l'agence" data-form-field="slogan" class="form-control display-7"
                                required="required" value="" id="slogan-formbuilder-u">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="color">
                            <label for="color-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Couleur du site WEB *</label>
                            <input value="{{ old('color') ?? $agence->color }}" type="color" name="color" data-form-field="color"
                                required="required" class="form-control display-7" value="" id="color-formbuilder-u">
                        </div>
                        <div data-for="description" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="description-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Description de l'agence *</label>
                            <textarea name="description" placeholder="Description de l'agence"
                                data-form-field="description" required="required" class="form-control display-7"
                                id="description-formbuilder-u">{{ old('description') ?? $agence->description }}</textarea>
                        </div>
                        <div data-for="adresse" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="adresse-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Adresse de l'agence *</label>
                            <input  gm-places-autocomplete ng-model="placeAutoComplete" required="required" name="adresse" placeholder="Adresse" data-form-field="adresse"
                                class="form-control display-7" id="adresse-formbuilder-u" value="{{old('adresse') ?? $agence->adresse}}">
                        </div>
                        <div data-for="horaireOuverture" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="horaireOuverture-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Horaire d'ouverture</label>
                            <textarea name="horaireOuverture" placeholder="Horaire" data-form-field="horaireOuverture"
                                class="form-control display-7" id="horaireOuverture-formbuilder-u">{{old('horaireOuverture') ?? $agence->horaireOuverture}}</textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-fonts-style display-7">Informations de contact</p>
                        </div>
                        <div data-for="telephoneWhatsapp" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="telephoneWhatsapp-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">
                                T??l??phone WhatsApp *
                            </label>
                            <input value="{{ old('telephoneWhatsapp') ?? $agence->user->telephoneWhatsapp }}" type="tel" name="telephoneWhatsapp"
                                data-form-field="telephoneWhatsapp" required="required" class="form-control display-7"
                                value="" id="telephoneWhatsapp-formbuilder-u">
                        </div>
                        <div data-for="telephonePersonnel" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="telephonePersonnel-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">T??l??phone
                                Personnel
                            </label>
                            <input value="{{ old('telephonePersonnel') ?? $agence->user->telephonePersonnel }}" type="tel" name="telephonePersonnel"
                                placeholder="T??l??phone personnel" data-form-field="telephonePersonnel"
                                class="form-control display-7" value="" id="telephonePersonnel-formbuilder-u">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="logo">
                            <label for="logo-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Logo (Optionnel)</label>
                            <input type="file" accept="image/*" name="logo" data-form-field="logo"
                                class="form-control display-7" value="" id="logo-formbuilder-u">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary display-7">Mettre ?? jour</button>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>
@endsection