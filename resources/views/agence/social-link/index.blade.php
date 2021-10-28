@extends("base")

@section("title","Liste des réseaux sociaux de l'agence")

@section("description","Gérez ici les liens de vos réseux sociaux.")

@section("body")
<section data-bs-version="5.1" class="header1 cid-sM1cy9uhXJ" id="header01-36">


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
                        data-src="{{ asset('assets/images/vente-achat-location-hypotheque-maison-108855-1795-626x521.jpg') }}">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>Liens réseaux sociaux</strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7"></p>
                    <p>
                        Ajoutez les liens des réseaux sociaux de votre agence afin de permettre aux visiteurs de
                        découvrir vos comptes sociaux.</p>
                    <p></p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-lg btn-primary display-4"
                            href="#news2-37"><span
                                class="mobi-mbri mobi-mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>Afficher
                            la liste</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<section class="form cid-sM1g5h0hZ6" id="formbuilder-38">


    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="{{ route('agence-social-link.store',compact('agence')) }}" method="POST" class="mbr-form form-with-styler"
                    data-form-title="socialNetworkLinkForm"><input type="hidden" name="email" data-form-email="true"
                        value="GmaGbG6KTY0niuJQ+11RMMxfYc1FyI5YE7GlpT8Gq69gW5fpZZoFNqv/P8cDPu3+ik227A1K2L9UwfV+SH/ox4B7ImphDBmIBQw9Ek1RZRfphyOmWveehGjOz7xQtf8j.if6FVkU4O5RKZDYHQLS2Qz0KR5XanZabREFDALRleJ2S9eVgR1SwIxhZhrL+uv+mLvF5pqn7gWb5GHEp+/iTlPEKm1KukQtmoFK91DtIhaMzvJ0dDrki+uVQmJDMl8kK">
                    <x-display-validation-errors :errors="$errors->all()" />
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Formulaire - Ajout de lien social</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="reseau_social_id" style="">
                            <label for="reseau_social_id-formbuilder-38"
                                class="form-control-label mbr-fonts-style display-7">Réseau</label>
                            <select name="reseau_social_id" data-form-field="reseau_social_id" class="form-control display-7"
                                id="reseau_social_id-formbuilder-38">
                                <option value="" selected disabled>Selectionner un réseau</option>
                                @foreach ($reseauSociaux as $reseauSocial)
                                <option value="{{$reseauSocial->id}}">{{ $reseauSocial->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="lien">
                            <label for="lien-formbuilder-38" class="form-control-label mbr-fonts-style display-7">Lien
                                du compte ou de la page</label>
                            <input type="url" name="lien" placeholder="https://" pattern="https://.*"
                                data-form-field="lien" class="form-control display-7" required="required" value=""
                                id="lien-formbuilder-38">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary display-7">Sauvegarder</button>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>

<x-separator />

<section data-bs-version="5.1" class="news2 cid-sM1g1dwIrh" id="news2-37">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-12">
                <h1 class="mbr-section-title mbr-fonts-style display-5">Liste des Réseaux Sociaux</h1>
            </div>
        </div>
        <div class="row inline">
            <div class="col-12 col-sm-4">
                <p class="date mbr-fonts-style display-7">Facebook</p>
            </div>
            <div class="col-12 col-sm-4">
                <p class="workplace mbr-fonts-style display-4">https://fb.me/...</p>
            </div>
            <div class="col-12 col-sm-4 button">
                <div class="button-top"><a type="submit" class="btn btn-warning display-4"><span
                            class="fa fa-pencil-square mbr-iconfont mbr-iconfont-btn"></span>Modifier</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="line"></div>
            </div>
        </div>
        <div class="row inline">
            <div class="col-12 col-sm-4">
                <p class="date mbr-fonts-style display-7">Instagram</p>
            </div>
            <div class="col-12 col-sm-4">
                <p class="workplace mbr-fonts-style display-4">46
                    Oxford street, London</p>
            </div>
            <div class="col-12 col-sm-4 button">
                <div class="button-top"><a type="submit" class="btn btn-warning display-4">Buy Your Tickets</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="line"></div>
            </div>
        </div>
        <div class="row inline">
            <div class="col-12 col-sm-4">
                <p class="date mbr-fonts-style display-7"><strong>WhatsApp</strong></p>
            </div>
            <div class="col-12 col-sm-4">
                <p class="workplace mbr-fonts-style display-4">11333
                    Brooklyn, NY<br></p>
            </div>
            <div class="col-12 col-sm-4 button">
                <div class="button-top"><a type="submit" class="btn btn-warning display-4">Buy Your Tickets</a></div>
            </div>
        </div>
    </div>
</section>
@endsection