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
                        loading="lazy" data-src="assets/images/mbr-998x665.jpg">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1"><strong>Katalog</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Ouvrez vite un compte sur la plateforme. Que vous soyez simple visiteur, propriétaire de bien,
                        courtier ou agence immobilière.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="info3 cid-sLWaB9hNXb" id="info3-v">





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

<section class="form cid-sLWaxOklPM" id="formbuilder-u">


    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="{{ route('pre.register.request') }}" method="POST" class="mbr-form form-with-styler"
                    data-form-title="registerForm">
                    @csrf
                    @method('post')
                    <input type="hidden" name="g-recaptcha-response" data-form-captcha="true"
                        value="6LcLaNIcAAAAALsGkwXbDA3AS4MvzPGyMbrj2h06">
                    <input type="hidden" name="email" data-form-email="true"
                        value="uK53QrS3T24GDGuzh5TP+zyQ3rsTxLyoOHMDOowbNBkOaZffIIBiB7KGZF1Egiu09Ix6a5Sz/4NbWvpY9vlU7mxtzE1Cyi/+ovNQ93bl9PRJziqzRq7Blf5lWPYu4tRz.A4f03N3nsitNQnBMl7pwekTBitLkAyXwmz+ksPNuGphrwKJHDw1K5g7G10CsA8Ga8LvF7adlPCGj/TNBszd/aJlfv0XaCyj344myjUuJ+RefcC4/jzFTUrgIuztdzDDn.qAxZpS8XKbBepy17yXYVR/vh0XjdaTyfFX816v1dCKZi+4APucdF/P8srtXjw3QOMBI3jMAap8xmWsF3qIdXCmmT/1xG81XjkxW0YGGsm9cchAkAHKY8jo2V4UiWtU7X">
                    <div class="form-row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12"></div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Formulaire d'ouverture de compte</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="type" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="type-formbuilder-u"
                                class="form-control-label mbr-fonts-style display-7">Type</label>
                            <select name="type" data-form-field="type" class="form-control display-7"
                                id="type-formbuilder-u">
                                <option value="Agence">Agence</option>
                                <option value="Courtier">Courtier</option>
                                <option value="Propriétaire">Propriétaire</option>
                                <option value="Client">Client</option>
                            </select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary display-7">Continuer</button>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>
@endsection