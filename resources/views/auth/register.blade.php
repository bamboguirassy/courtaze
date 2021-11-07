@extends('base')

@section('title',"Formulaire d'inscription")

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
            <div class="col-12 col-md-12 col-lg-5 m-auto">
                <div class="image-wrapper md-pb">
                    <img class="w-100 lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                        loading="lazy" data-src="{{ asset('assets/images/mbr-998x665.jpg') }}">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1">
                        <strong>
                            @isset($agence)
                            {{$agence->nom}}
                            @else
                            {{config('app.name')}}
                            @endisset
                        </strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Finalisez la création de votre compte en remplissant les informations ci-dessous pour votre
                        compte - {{$type}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<section class="form cid-sLWaxOklPM" id="formbuilder-u" ng-controller="CountriesController">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="{{ route('register.request') }}" method="POST" class="mbr-form form-with-styler"
                    data-form-title="registerForm" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <input name="type" type="text" value="{{$type}}" hidden="hidden">
                    <x-display-validation-errors :errors="$errors->all()" />
                    <div class="dragArea form-row">
                        <div data-for="name" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="name-formbuilder-u" class="form-control-label mbr-fonts-style display-7">
                                @if ($type=='Agence')
                                Nom de l'agence
                                @else
                                Nom complet
                                @endif
                            </label>
                            <input value="{{ old('name') }}" type="text" name="name" placeholder="Nom"
                                data-form-field="name" class="form-control display-7" required="required" value=""
                                id="name-formbuilder-u">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="country">
                            <div class="mb-3">
                                <label for="country" class="form-label">Pays</label>
                                <select required="required" ng-model="selectedCountry" class="form-control" name="country" id="country">
                                    <option value="" disabled selected>Sélectionner votre pays</option>
                                    <option value="@{{country.cca3}}" ng-show="country.name_fr" ng-repeat="country in countries"> <span ng-bind-html="@{{country.flag['flag-icon']}}"></span> @{{country.admin}}</option>
                                </select>
                            </div>
                        </div>
                        @if ($type=='Agence')
                        <div data-for="slogan" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="slogan-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Slogan de l'agence</label>
                            <input value="{{ old('slogan') }}" type="text" name="slogan"
                                placeholder="Slogan de l'agence" data-form-field="slogan" class="form-control display-7"
                                required="required" value="" id="slogan-formbuilder-u">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="color">
                            <label for="color-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Couleur du site WEB</label>
                            <input value="{{ old('color') }}" type="color" name="color" data-form-field="color"
                                required="required" class="form-control display-7" value="" id="color-formbuilder-u">
                        </div>
                        <div data-for="description" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="description-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Description de l'agence</label>
                            <textarea name="description" placeholder="Description de l'agence"
                                data-form-field="description" required="required" class="form-control display-7"
                                id="description-formbuilder-u">{{ old('description') ?? '' }}</textarea>
                        </div>
                        <div data-for="adresse" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="adresse-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Adresse de l'agence</label>
                            <input gm-places-autocomplete ng-model="placeAutoComplete" required="required"
                                name="adresse" placeholder="Adresse" data-form-field="adresse"
                                class="form-control display-7" id="adresse-formbuilder-u"
                                value="{{old('adresse') ?? ''}}">
                        </div>
                        <div data-for="horaireOuverture" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="horaireOuverture-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Horaire d'ouverture</label>
                            <textarea name="horaireOuverture" placeholder="Horaire" data-form-field="horaireOuverture"
                                class="form-control display-7" id="horaireOuverture-formbuilder-u">
                            {{old('horaireOuverture') ?? ''}}
                            </textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="logo">
                            <label for="logo-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Logo</label>
                            <input type="file" accept="image/*" name="logo" data-form-field="logo" required="required"
                                class="form-control display-7" value="" id="logo-formbuilder-u">
                        </div>
                        @endif
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-fonts-style display-7">Informations de contact</p>
                        </div>
                        <div data-for="telephoneWhatsapp" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="telephoneWhatsapp-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">
                                @if ($type=='Agence')
                                Téléphone WhatsApp
                                @else
                                Numéro de Téléphone
                                @endif
                            </label>
                            <input ng-value="countries[selectedCountry].calling_codes[0]" type="tel" name="telephoneWhatsapp"
                                data-form-field="telephoneWhatsapp" required="required" class="form-control display-7"
                                value="" id="telephoneWhatsapp-formbuilder-u">
                        </div>
                        @if ($type=='Agence')
                        <div data-for="telephonePersonnel" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="telephonePersonnel-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Téléphone
                                Personnel
                            </label>
                            <input  ng-value="countries[selectedCountry].calling_codes[0]" type="tel" name="telephonePersonnel"
                                placeholder="Téléphone personnel" data-form-field="telephonePersonnel"
                                class="form-control display-7" value="" id="telephonePersonnel-formbuilder-u">
                        </div>
                        @endif
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-fonts-style display-7">Informations de connexion</p>
                        </div>
                        <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="email-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input value="{{ old('email') }}" type="text" name="email" placeholder="Email"
                                data-form-field="email" required="required" class="form-control display-7" value=""
                                id="email-formbuilder-u">
                        </div>
                        <div data-for="password" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="password-formbuilder-u" class="form-control-label mbr-fonts-style display-7">Mot
                                de passe</label>
                            <input value="{{ old('password') }}" type="password" name="password"
                                placeholder="Mot de passe" data-form-field="password" required="required"
                                class="form-control display-7" value="" id="password-formbuilder-u">
                        </div>
                        <div data-for="password_confirmation" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="password_confirmation-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Confirmation du mot de
                                passe</label>
                            <input type="password" name="password_confirmation" placeholder="Ressaisir le mot de passe"
                                data-form-field="password_confirmation" required="required"
                                class="form-control display-7" value="" id="password_confirmation-formbuilder-u">
                        </div>
                        {{-- <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Confirmer que vous n'êtes pas un
                                robot</label>
                            <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                        </div> --}}
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary display-7">Créer le compte</button>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>
@endsection