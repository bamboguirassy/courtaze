@extends('base')

@section('title', 'Services proposés par ' . $agence->nom)

@section('description', "Retrouvez l'ensemble des services que nous proposons dans notre agence " . $agence)

@section('body')
    <section data-bs-version="5.1" class="header1 cid-sM0Qt9UCPB" id="header01-2q">
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
                        <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1"><strong>{{ $agence }}</strong>
                        </h1>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Nos proposons pas de services pour vous accompagner dans la vie de tous les jours.</p>
                        <div class="mbr-section-btn mt-3">
                            <a style="background-color: #24cc63 !important" target="_blank"
                                class="btn btn-lg btn-success display-4"
                                href="https://wa.me/{{ $agence->user->telephoneWhatsapp }}?text={{Request::url()}}"><span
                                    class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn"></span>Joindre sur
                                WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="scial2 cid-sM0Rgy7UJf" id="social02-2r">
        <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1600 40"
            style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
            <style type="text/css">
                .st0

            </style>
            <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
     s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
        </svg>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="text-content align-left col-12 col-md-12 col-lg-6">
                    <h2 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>Suivez nous</strong>
                    </h2>
                    <p class="mbr-text mbr-fonts-style mb-3 display-7">Suivez nous sur les réseaux sociaux pour suivre nos
                        actualités et vivre nos moments importants.</p>
                </div>
                <div
                    class="icons d-flex align-items-center justify-content-end col-12 col-md-12 col-lg-6 mt-md-0 mt-2 flex-wrap">
                    @foreach ($socialLinks as $socialLink)

                    @endforeach
                    @foreach ($socialLinks as $socialLink)
                        <a href="{{ $socialLink->lien }}" target="_blank">
                            <span class="{{ $socialLink->reseauSocial->icon }}"></span>
                        </a>
                    @endforeach
                    {{-- <a href="https://twitter.com/mobirise" target="_blank">
                    <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                    <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="https://www.youtube.com/c/mobirise" target="_blank">
                    <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="https://instagram.com/mobirise" target="_blank">
                    <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="https://www.behance.net/Mobirise" target="_blank">
                    <span class="mbr-iconfont mbr-iconfont-social socicon-linkedin socicon"></span>
                </a>
                <a href="https://vimeo.com/mobirise" target="_blank">
                    <span class="mbr-iconfont mbr-iconfont-social socicon-snapchat socicon"></span>
                </a> --}}
                </div>
            </div>
        </div>
    </section>
    @if (count($agence->services) > 0)
        <section data-bs-version="5.1" class="accordion1 cid-sM0UCEvEnk" id="accordions01-2v">
            <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1600 40"
                style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
                <style type="text/css">
                    .st0

                </style>
                <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
     s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
            </svg>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-12">
                        <h2 class="mbr-fonts-style mbr-section-title pb-3 mb-1 mbr-white mbr-semibold align-left display-2">
                            <strong>Nos services</strong>
                        </h2>
                        <div class="content-block">
                            <div class="accordion-content">
                                <div id="bootstrap-accordion_81" class="panel-group accordionStyles accordion "
                                    role="tablist" aria-multiselectable="true">
                                    @foreach ($agence->services as $service)
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <a role="button" class="collapsed panel-title" data-toggle="collapse"
                                                    data-bs-toggle="collapse" data-core=""
                                                    href="#collapse{{ $loop->index }}_81" aria-expanded="false"
                                                    aria-controls="collapse1">
                                                    <h4
                                                        class="mbr-fonts-style header-text mbr-white mbr-semibold display-5">
                                                        {{ $service->nom }}
                                                    </h4>
                                                    <span class="sign mbr-iconfont mobi-mbri-plus inactive"></span>
                                                </a>
                                            </div>
                                            <div id="collapse{{ $loop->index }}_81"
                                                class="panel-collapse noScroll collapse" role="tabpanel"
                                                aria-labelledby="headingOne" data-parent="#bootstrap-accordion_81"
                                                data-bs-parent="#accordion">
                                                <div class="panel-body pt-4">
                                                    <p
                                                        class="mbr-fonts-style panel-text mbr-text mbr-white mb-3 mbr-regular display-4">
                                                        {{ $service->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section data-bs-version="5.1" class="testimonials2 cid-sM0RWxrf3Z" id="testimonials02-2t">
        <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1600 40"
            style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
            <style type="text/css">
                .st0

            </style>
            <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
     s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
        </svg>
        <div class="container">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-5 display-2">
                <strong>Témoignage de nos clients</strong>
            </h3>
            <div class="row justify-content-center">
                @foreach ($temoignages as $temoignage)
                <div class="card col-12 col-md-6">
                    <x-temoignage-public-item :temoignage="$temoignage"/>
                </div>
                @endforeach



            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="form3 cid-sM0S6naxp4" id="form03-2u">
        <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1600 40"
            style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
            <style type="text/css">
                .st0

            </style>
            <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
     s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 image-wrapper m-auto">
                    <img class="w-100 md-pb lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                        loading="lazy"
                        data-src="assets/images/key-5284793-960-720-512x512.png">
                </div>
                <div class="col-lg-6 mx-auto mbr-form" data-form-type="formoid">
                    <!--Formbuilder Form-->
                    <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler"
                        data-form-title="requestServiceForm"><input type="hidden" name="email" data-form-email="true"
                            value="m6BCYku73RQlAVDJ8kPlXM5rNIRxE9SRKG2USlLqedMOdnaE5Fngjt502VM/wyn6U4uUtRRRiuBcnK/FyBwAkL6j84v4/hkC9j1Wbxh5oIJbHFc4muS0ytkn6Q2ay0Rq.L4E+pcNy8hcp5opukOl354c+6sxlzQxAik+LajYClyEswtEuNW/icoEoISRSLFL7pefgEfElWDSuOOLiOPJAuPRk2Enx0VcjiIqBn3OAIO+lTei0Z3B7knwHND224Hly">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12"></div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                                problem!</div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-lg-12">
                                <h2 class="mbr-section-title mbr-fonts-style mb-4 display-2">Demander un service</h2>
                            </div>
                            <div class="col-lg-12">
                                <p class="mbr-text mbr-fonts-style pb-4 display-7">Vous pouvez directement demander un
                                    service en remplissant le formulaire ci-dessous :</p>
                            </div>
                            <div data-for="name" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                                <label for="name-form03-2u" class="form-control-label mbr-fonts-style display-7">Nom
                                    complet</label>
                                <input type="text" name="name" placeholder="Name" data-form-field="name"
                                    class="form-control display-7" required="required" value="" id="name-form03-2u">
                            </div>
                            <div data-for="telephone" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                                <label for="telephone-form03-2u"
                                    class="form-control-label mbr-fonts-style display-7">Téléphone</label>
                                <input type="tel" name="telephone" placeholder="Phone" data-form-field="telephone"
                                    class="form-control display-7" pattern="*" required="required" value=""
                                    id="telephone-form03-2u">
                            </div>
                            <div data-for="objet" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                                <label for="objet-form03-2u" class="form-control-label mbr-fonts-style display-7">Objet du
                                    message</label>
                                <input type="text" name="objet" data-form-field="objet" required="required"
                                    class="form-control display-7" value="" id="objet-form03-2u">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="message" style="">
                                <label for="message-form03-2u"
                                    class="form-control-label mbr-fonts-style display-7">Message</label>
                                <textarea name="message" data-form-field="message" class="form-control display-7"
                                    required="required" id="message-form03-2u"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12"><button type="submit"
                                    class="btn btn-lg btn-primary display-7">Envoyer</button></div>
                        </div>
                    </form>
                    <!--Formbuilder Form-->
                </div>
            </div>
        </div>
    </section>
@endsection
