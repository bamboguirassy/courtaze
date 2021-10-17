@extends('base')

@section('title',"Formulaire de connexion")

@section('description',"")

@section('body')
<section data-bs-version="5.1" class="header1 cid-sLWeJRPiCy" id="header01-z">


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
                        loading="lazy" data-src="assets/images/mbr-998x665.jpg">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1"><strong>Katalog</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Connectez vous avec vos identifiants de connexion.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="info3 cid-sLWguqrDEo" id="info3-12">





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

<section class="form cid-sLWfBVvbIR" id="formbuilder-11">


    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="{{ route('login.request') }}" method="POST" class="mbr-form form-with-styler"
                    data-form-title="loginForm">
                    @csrf
                    @method('post')
                    <input type="hidden" name="g-recaptcha-response"
                        data-form-captcha="true" value="6LcLaNIcAAAAALsGkwXbDA3AS4MvzPGyMbrj2h06"><input type="hidden"
                        name="email" data-form-email="true"
                        value="nHS4RP7h593/d6V49jHF67AvjrUbWtgx5GzRpsxk+JWR1UNz/7YnHFcasQ9N0tv5Qhc6pxnPqt5RgptwU0adHTplK4M348T5v6ZGyMnodBhd0v7B5bUSUh/7mHWqRfwA.MANH08t2XNrHDQ/Cx1yhzo+iXvZ9050rtZy3zqx4vrpGXZlj9kZ3DvikhNXnz0Qy40lhTrEv95XWUxwshH2M/3KfjXARBSjEC7H+MwGyyuehDz3O+lDfaFqZoK7PatFV.qnmtNQ82C10/+R6k3wL/+apNTK3PMRhF7jzZ9wYAVFqA5y08v3nmVtmsKeZ2uPZV7rh2rDwFdDsR6Vg2TTtFOcpEBZJb8+iXCzpqi6B0LhTHSUOdKpHaNlNlPdOTDwG5">
                    <div class="form-row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12"></div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Formulaire de connexion</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="email-formbuilder-11"
                                class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email" name="email" placeholder="test@email.com" data-form-field="email"
                                class="form-control display-7" required="required" value="" id="email-formbuilder-11">
                        </div>
                        <div data-for="password" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="password-formbuilder-11"
                                class="form-control-label mbr-fonts-style display-7">Mot de passe</label>
                            <input type="password" name="password" data-form-field="password"
                                class="form-control display-7" required="required" value=""
                                id="password-formbuilder-11">
                        </div>
                        <div data-for="remember_me" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <div class="form-control-label">
                                <label for="remember_me-formbuilder-11" class="mbr-fonts-style display-7">Se rappeler de
                                    moi</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="remember_me" data-form-field="remember_me"
                                    class="form-check-input display-7" value="Oui" checked=""
                                    id="remember_me-formbuilder-11">
                                <label class="form-check-label display-7">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="remember_me" data-form-field="remember_me"
                                    class="form-check-input display-7" value="Non" id="remember_me-formbuilder-11">
                                <label class="form-check-label display-7">Non</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary display-7">Se connecter</button>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content3 cid-sM0uLjhRQz" id="article04-28">

    <div class="container">
        <div class="row">
            <div class="title col-md-12 col-lg-7 md-pb">
                <h3 class="mbr-section-title mbr-fonts-style align-left mb-3 display-5"><strong>Vous n'avez pas de
                        compte ?</strong></h3>
                <h4 class="mbr-section-subtitle align-left mbr-fonts-style display-7"><strong>Ouvrez un compte
                        directement ici !</strong></h4>
            </div>

            <div class="title col-md-12 col-lg-5">
                <div class="mbr-section-btn align-center"><a class="btn btn-lg btn-primary display-7"
                        href="{{ route('pre.register.page') }}">Ouvrir un compte</a></div>

            </div>

        </div>
    </div>
</section>
@endsection