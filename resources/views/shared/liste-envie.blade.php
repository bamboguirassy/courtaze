@extends('base')

@section('title',"Liste d'envie")

@section('description',"Les produits que vous avez enregistré pour lecture utltérieure...")

@section('body')
<section data-bs-version="5.1" class="header1 cid-sM0feMNMR2" id="header01-1z">
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
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>Mes enregistrements</strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Vous avez enregistrés ces offres pour pouvoir les retrouver plus facilement. Si une offre n'est
                        plus disponible, vous pouvez la supprimer directement de vos enregistrements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<section data-bs-version="5.1" class="features3 cid-sMbsSLVmFo" id="features03-4l">
    <div class="container">
        <div class="row justify-content-center">
            @forelse (auth()->user()->favorites as $offre)
            @if ($loop->index==3 || $loop->index==7 || $loop->index==10)
            <div class="сol-12 col-sm-12 col-md-6 col-lg-4 md-pb mb-2">
                {!! Adsense::ads('responsive') !!}
            </div>
            @endif
            <div class="сol-12 col-sm-12 col-md-6 col-lg-4 md-pb mb-2">
                <x-offre-item :offre="$offre" :agence="$agence" />
            </div>
            @empty
            <div class="alert alert-info" role="alert">
                <strong>Vous n'avez épinglé aucune offre pour l'instant !</strong>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection