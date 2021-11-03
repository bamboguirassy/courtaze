@extends('base')

@section('title',"Profil - Mon compte")

@section('description',"")

@section('body')
<section data-bs-version="5.1" class="header1 cid-sM09FrIsem" id="header01-1s">
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
                        loading="lazy"
                        data-src="assets/images/key-5284793-960-720-512x512.png">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1"><strong>{{ auth()->user()->name
                            }}</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Bonjour <strong>{{Auth::user()->name}}</strong>, vous souhaitez mettre à jour certains de vos
                        informations ou gérer votre compte
                        ? Bienvenue !</p>

                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<section class="form cid-sM09R9Ta0w" id="formbuilder-1u">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="{{ route('user.update',['agence'=>$agence,'user'=>auth()->user()]) }}" method="POST"
                    class="mbr-form form-with-styler" data-form-title="accountUpdateForm"><input type="hidden"
                        name="email" data-form-email="true"
                        value="t5EG3ENQJDVdLKNBqw1CugNlJSzld9GeEsj+7m7uP4QASm9neZrxXbOy8/U+PkIcuICI7XgaewJgKggp3gbShnZeBQlF0Hw1bOy1SdOV35eX8ZGN6h8o91NHJFfqPI1h.uQDLLkz44XITIw310BAFKEz0fD3XxjzYpCZunvTVYTjcr+UX1YPcH4b3ta8wGBN45VHhwxiMgJmFLRu5dqfBzh0xElpfz/BvGjDPLlaA8XUmQ6+UAWa4k6U40f8yesi3">
                    @csrf
                    @method('put')
                    <x-display-validation-errors :errors="$errors->all()" />
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Mettre à jour mes informations</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="name" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="name-formbuilder-1u" class="form-control-label mbr-fonts-style display-7">Nom
                                complet</label>
                            <input type="text" name="name" data-form-field="name" class="form-control display-7"
                                required="required" value="{{old('name') ?? auth()->user()->name}}"
                                id="name-formbuilder-1u">
                        </div>
                        <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="email-formbuilder-1u"
                                class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email" name="email" placeholder="Email" data-form-field="email"
                                class="form-control display-7" required="required"
                                value="{{old('email') ?? auth()->user()->email}}" id="email-formbuilder-1u">
                        </div>
                        <div data-for="telephoneWhatsapp" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="telephoneWhatsapp-formbuilder-1u"
                                class="form-control-label mbr-fonts-style display-7">Numéro Tél. WhatsApp</label>
                            <input type="tel" name="telephoneWhatsapp" pattern="*" data-form-field="telephoneWhatsapp"
                                class="form-control display-7" required="required"
                                value="{{old('telephoneWhatsapp') ?? auth()->user()->telephoneWhatsapp}}"
                                id="telephoneWhatsapp-formbuilder-1u">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="telephonePersonnel">
                            <label for="telephonePersonnel-formbuilder-1u"
                                class="form-control-label mbr-fonts-style display-7">Téléphone Personnel</label>
                            <input type="text" name="telephonePersonnel" data-form-field="telephonePersonnel"
                                class="form-control display-7"
                                value="{{old('telephonePersonnel') ?? auth()->user()->telephonePersonnel}}"
                                id="telephonePersonnel-formbuilder-1u">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary display-7">Mettre à jour</button>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>

<x-separator />

<section class="form cid-sM0bOSkGZE" id="formbuilder-1w">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="{{ route('change.password.request') }}" method="POST" class="mbr-form form-with-styler"
                    data-form-title="Form Name">
                    @csrf
                    @method('put')
                    <input type="hidden" name="g-recaptcha-response"
                        data-form-captcha="true" value="6LcLaNIcAAAAALsGkwXbDA3AS4MvzPGyMbrj2h06"><input type="hidden"
                        name="email" data-form-email="true"
                        value="vsBHyohFbTTMEIIwcDwdr1Fv6WtWND4GOYopUjM5kGA7+kA1iGcEuQNBkxjG+ETmUYmUbOPi1ZakV2un8Srik4Mr7Ub1yGBTVNaBDALFY/NyFZd0ugIU/YeAJsaq4FPg.IM/5s4PO1ILhNbJoBpiDePNUfN2TQw3KeX9UnYfChXJwdCOBdsZYyTKXuxswQ/PVi0d7es7Ahb4ZD+NzyzFFvo+4cqE2amYUgZF//lMdJCY3JKggTYlq6R8ibyCUKCDE">
                    <x-display-validation-errors :errors="$errors->all()" />
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Changement - mot de passe</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="currentPassword">
                            <label for="currentPassword-formbuilder-1w"
                                class="form-control-label mbr-fonts-style display-7">Mot de passe actuel</label>
                            <input type="password" name="currentPassword" placeholder="Mot de passe actuel"
                                data-form-field="currentPassword" class="form-control display-7" required="required"
                                value="" id="currentPassword-formbuilder-1w">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="password" style="">
                            <label for="password-formbuilder-1w"
                                class="form-control-label mbr-fonts-style display-7">Nouveau mot de passe</label>
                            <input type="password" name="password" placeholder="Nouveau mot de passe"
                                data-form-field="password" class="form-control display-7" required="required" value=""
                                id="password-formbuilder-1w">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="password_confirmation">
                            <label for="password_confirmation-formbuilder-1w"
                                class="form-control-label mbr-fonts-style display-7">Confirmation - Nouveau mot de
                                passe</label>
                            <input type="password" name="password_confirmation"
                                placeholder="Confirmation du mot de passe" data-form-field="password_confirmation"
                                class="form-control display-7" required="required" value=""
                                id="password_confirmation-formbuilder-1w">
                        </div>
                        <div class="col-auto" style="">
                            <button type="submit" class="btn btn-primary display-7">Changer le mot de passe</button>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>
@endsection