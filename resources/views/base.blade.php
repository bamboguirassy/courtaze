<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon"
        href="assets/images/vente-achat-location-hypotheque-maison-108855-1795-626x521-512x512.png" type="image/x-icon">
    <meta name="description" content="@yield('description')">


    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons2/mobirise2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Material-Design-Icons/css/material.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon54/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon54-v2/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/iconsMind/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/recaptcha.css') }}">
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=JetBrains+Mono:100,200,300,400,500,600,700,800,100i,200i,300i,400i,500i,600i,700i,800i&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=JetBrains+Mono:100,200,300,400,500,600,700,800,100i,200i,300i,400i,500i,600i,700i,800i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
    <style>
        .colorpick-eyedropper-input-trigger {
            width: 50px;
        }

        .body-item {
            white-space: nowrap;
        }
    </style>



    <meta name="theme-color" content="#266e73">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <script src="sw-connect.js"></script>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-startup-image"
        media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-640x1136.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-750x1334.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-1242x2208.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-1125x2436.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-1536x2048.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-1668x2224.png') }}">
    <link rel="apple-touch-startup-image"
        media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
        href="{{ asset('assets/images/apple-launch-2048x2732.png') }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    @toastr_css
</head>

<body>
    <section data-bs-version="5.1" class="menu menu1 cid-sBTN7PNF8A" once="menu" id="menu1-1">


        <nav class="navbar navbar-dropdown navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="{{ route('home') }}">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                                style="height: 3rem;" loading="lazy" class="lazyload"
                                data-src="{{ asset('assets/images/vente-achat-location-hypotheque-maison-108855-1795-626x521-512x512.png') }}">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-danger display-5"
                            href="{{ route('home') }}">{{config('app.name')}}</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                    data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                @auth
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        @isset($activeAgence)
                        <li class="nav-item"><a class="nav-link link text-warning text-primary display-7"
                                href="agence-home.html"><span
                                    class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>Accueil Ag</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-warning text-primary display-7"
                                href="services.html"><span
                                    class="mobi-mbri mobi-mbri-paperclip mbr-iconfont mbr-iconfont-btn"></span>Services</a>
                        </li>
                        @else
                        <li class="nav-item"><a class="nav-link link text-warning text-primary display-7"
                                href="{{ route('home') }}"><span
                                    class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>Accueil</a>
                        </li>
                        @endisset
                        @if (auth()->user()->type=='Propriétaire' || auth()->user()->type=='Courtier')
                        <li class="nav-item"><a class="nav-link link text-warning text-primary display-7"
                                href="{{ route('mes.publications') }}"><span
                                    class="mobi-mbri mobi-mbri-bookmark mbr-iconfont mbr-iconfont-btn"></span>Mes publications</a>
                        </li>
                        @endif
                        @if (auth()->user()->type=='Admin')
                        <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-warning display-7"
                                href="#" aria-expanded="false" data-toggle="dropdown-submenu" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">Admin</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-undefined"><a
                                    class="dropdown-item text-warning text-primary display-7"
                                    href="{{ route('categorie-bien.index') }}" aria-expanded="false">Catégories de
                                    bien</a><a class="dropdown-item text-warning text-primary display-7"
                                    href="{{ route('reseau-social.index') }}" aria-expanded="false">Réseaux
                                    Sociaux</a><a class="dropdown-item text-warning text-primary display-7"
                                    href="{{ route('user.index') }}" aria-expanded="false">Utilisateurs</a><a
                                    class="dropdown-item text-warning text-primary display-7"
                                    href="{{ route('agence.index') }}" aria-expanded="false">Agences</a></div>
                        </li>
                        @endif
                        @if (auth()->user()->type=='Agence')
                        <li class="nav-item dropdown"><a
                                class="nav-link link dropdown-toggle text-warning show display-7" href="#"
                                data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-expanded="true"><span
                                    class="mobi-mbri mobi-mbri-setting mbr-iconfont mbr-iconfont-btn"></span>Gestion</a>
                            <div class="dropdown-menu show" aria-labelledby="dropdown-undefined" data-bs-popper="none">
                                <a class="dropdown-item text-warning text-primary display-7" href="mes-posts.html">Mes
                                    publications</a>
                                <a class="dropdown-item text-warning text-primary display-7"
                                    href="reseaux-sociaux.html">Réseaux sociaux</a><a
                                    class="dropdown-item text-warning text-primary display-7"
                                    href="service-list.html">Nos services</a><a
                                    class="dropdown-item text-warning text-primary display-7"
                                    href="agence-details.html">Mon agence</a><a
                                    class="dropdown-item text-warning text-primary display-7"
                                    href="temoignage-list.html">Témoignages des clients</a>
                            </div>
                        </li>
                        @endif
                        @isset($activeAgence)
                        <li class="nav-item"><a class="nav-link link text-warning text-primary display-7"
                                href="contacts.html"><span
                                    class="mobi-mbri mobi-mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>Contacts</a>
                        </li>
                        @endisset
                        <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-warning display-7"
                                href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">Mon compte</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-undefined">
                                <a class="dropdown-item text-warning text-primary display-7" href="profil.html"><span
                                        class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Mon
                                    profil
                                </a>
                                @if (auth()->user()->type=='Client')
                                <a class="dropdown-item text-warning text-primary display-7"
                                    href="list-envie.html"><span
                                        class="mobi-mbri mobi-mbri-hearth mbr-iconfont mbr-iconfont-btn"></span>Ma liste
                                    d'envie
                                </a>
                                @endif
                                <form style="display: inline;" action="{{ route('logout') }}" method="post">
                                    @csrf
                                    @method('post')
                                    @isset($activeAgence)
                                    <input name="agence" type="number" value="{{$activeAgence->id}}" hidden>
                                    @endisset
                                    <button class="dropdown-item text-warning display-7"><span
                                            class="mobi-mbri mobi-mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Déconnexion
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>


                </div>
                @endauth
            </div>
        </nav>
    </section>

    @yield('body')

    <section data-bs-version="5.1" class="footer1 cid-sM0JCUalaO" once="footers" id="footer01-2c">


        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                        © Copyright {{ date_format(new DateTime(),'Y') }} <a href="https://bambogroup.net" class="text-white"
                            target="_blank"><strong>Bambo GROUP</strong></a> - Tous droits réservés</p>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/ytplayer/index.js') }}"></script>
    <script src="{{ asset('assets/sociallikes/social-likes.js') }}"></script>
    <script src="{{ asset('assets/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('assets/theme/js/script.js') }}"></script>
    <script src="{{ asset('assets/formoid.min.js') }}"></script>



    {{-- <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div> --}}
    <script>
        "use strict";if("loading"in HTMLImageElement.prototype){document.querySelectorAll('img[loading="lazy"],iframe[loading="lazy"]').forEach(e=>{e.src=e.dataset.src,e.style.paddingTop=100*e.getAttribute("data-aspectratio")+"%",e.style.height=0,e.onload=function(){e.removeAttribute("style")}})}else{const e=document.createElement("script");e.src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js",document.body.appendChild(e)}
    </script>
    @jquery
    @toastr_js
    @toastr_render
</body>

</html>