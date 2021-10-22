@extends('base')

@section('title',"Gestion des témoignages")

@section('description',"Ajouter les témoignages de vos clients afin de donner plus de valeur à votre agence.")

@section('body')
<section data-bs-version="5.1" class="header1 cid-sM1BCFal7k" id="header01-43">
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
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>Témoignages des
                            clients</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">Ajoutez ici tous les témoignages de vos clients afin
                        que les autres puissent comprendre ce que vous savez faire...</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-lg btn-primary-outline display-4"
                            href="temoignage-list.html#timeline1-47">Afficher la liste</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<section class="form cid-sM1BHz7jnL" id="formbuilder-45">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler"
                    data-form-title="newTemoignageForm"><input type="hidden" name="email" data-form-email="true"
                        value="ZL2euCHQou/yxqYPGtfHujuSqyhjB8M83HMZniBlNqeyoWJ8y5mfvc1GowTsXU6RSqX7pkQIdmD06Qv7YvX8GWLFpw84BxIRnKfNibLrNOShz3o0wE4Ry+VomFAxFL1D.vVe3V0iSYszGbBt+fS1AAcQtbH/nKXjinVDreJNxXlVBGiehh97EFNBP77IiQGJb1BOGjTmIQnQQG4tfEuZx/RyPf+eg153ShIYyFT6uyka2M94Nl7/PMQ7lMPFwkNT8">
                    <x-display-validation-errors :errors="$errors->all()" />
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Formulaire d'ajout - Témoignage</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="clientName" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="clientName-formbuilder-45"
                                class="form-control-label mbr-fonts-style display-7">Nom du client</label>
                            <input type="text" name="clientName" data-form-field="clientName"
                                class="form-control display-7" value="" id="clientName-formbuilder-45">
                        </div>
                        <div data-for="fonction" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="fonction-formbuilder-45"
                                class="form-control-label mbr-fonts-style display-7">Fonction</label>
                            <input type="text" name="fonction" data-form-field="fonction" class="form-control display-7"
                                value="" id="fonction-formbuilder-45">
                        </div>
                        <div data-for="message" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="message-formbuilder-45"
                                class="form-control-label mbr-fonts-style display-7">Message du témoignage</label>
                            <textarea name="message" data-form-field="message" required="required"
                                class="form-control display-7" id="message-formbuilder-45"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="photo">
                            <label for="photo-formbuilder-45" class="form-control-label mbr-fonts-style display-7">Photo
                                du client</label>
                            <input type="text" name="photo" data-form-field="photo" class="form-control display-7"
                                value="" id="photo-formbuilder-45">
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

<section data-bs-version="5.1" class="timeline1 medicalm4_timeline1 cid-sM1CjZWIsd" id="timeline1-47">
    <div class="container align-center">
        <div class="timelines-container pt-4 reverseTimeline" mbri-timelines="">
            <!--1-->
            <div class="row timeline-element first-separline">
                <div class="timeline-date-panel col-xs-12 col-md-3 align-left">
                    <div class="time-line-date-content">
                        <div class="mbr-figure">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                                title="" loading="lazy" class="lazyload" data-src="assets/images/01.jpg">
                        </div>
                    </div>
                </div>
                <div class="date col-xs-12 col-md-2">
                    <p class="mbr-timeline-date mbr-fonts-style display-7">
                        2020
                    </p>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-7">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title mbr-fonts-style display-5">
                            First high-rise building
                        </h4>

                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam erat libero, bibendum in libero
                            tempor, luctus volutpat ligula.
                            Integer fringilla porttitor pretium. Nam erat felis, iaculis id justo ut, ullamcorper
                            feugiat
                            elit. Proin vel lectus auctor, porttitor ligula vitae, convallis leo. In eget massa elit.
                        </p>
                    </div>
                </div>
            </div>
            <!--2-->
            <div class="row timeline-element separline">
                <div class="timeline-date-panel col-xs-12 col-md-3 align-left">
                    <div class="time-line-date-content">
                        <div class="mbr-figure">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                                title="" loading="lazy" class="lazyload" data-src="{{ asset('assets/images/02.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="date col-xs-12 col-md-2">
                    <p class="mbr-timeline-date mbr-fonts-style display-7">
                        2021
                    </p>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-7">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title mbr-fonts-style display-5">
                            The new part of hospital
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam erat libero, bibendum in libero
                            tempor, luctus volutpat ligula.
                            Integer fringilla porttitor pretium. Nam erat felis, iaculis id justo ut, ullamcorper
                            feugiat
                            elit. Proin vel lectus auctor, porttitor ligula vitae, convallis leo. In eget massa elit.
                        </p>
                    </div>
                </div>
            </div>
            <!--3-->
            <div class="row timeline-element separline">
                <div class="timeline-date-panel col-xs-12 col-md-3 align-left">
                    <div class="time-line-date-content">
                        <div class="mbr-figure">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                                title="" loading="lazy" class="lazyload" data-src="assets/images/03.jpg">
                        </div>
                    </div>
                </div>
                <div class="date col-xs-12 col-md-2">
                    <p class="mbr-timeline-date mbr-fonts-style display-7">
                        2022
                    </p>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-7">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title mbr-fonts-style display-5">
                            Chef d'agence</h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            Sunu Immo m'a aidé à trouver mes 3 logements, elle m'a également aider à acheter mon
                            terrain. Les agents sont efficaces et cordiales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection