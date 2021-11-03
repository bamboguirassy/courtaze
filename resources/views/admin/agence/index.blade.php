@extends('base')

@section('title',"Liste des agences...")

@section('description',"La liste des agences de la plateforme...")

@section('body')
<section data-bs-version="5.1" class="header1 cid-sM1sSbWwlz" id="header01-3u">
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
                        data-src="assets/images/key-5284793-960-720-512x512.png">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1"><strong>Les agences</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Retrouvez toutes les agences qui ont ouvert leurs sites de e-commerce sur&nbsp; la plateforme.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<section data-bs-version="5.1" class="table1 section-table cid-sM1tv7p4q8" id="table1-3w">
    <div class="container-fluid">
        <div class="media-container-row align-center">
            <div class="col-12 col-md-12">
                <div class="table-wrapper pt-5" style="width: 92%;">
                    <div class="container-fluid">
                        <div class="row search">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="dataTables_filter">
                                    <label class="searchInfo mbr-fonts-style display-7">Rechercher:</label>
                                    <input class="form-control input-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid scroll">
                        <table class="table table-striped isSearch" cellspacing="0"
                            data-empty="Aucune agence n'est encore ouverte sur la plateforme.">
                            <thead>
                                <tr class="table-heads">
                                    <th class="head-item mbr-fonts-style display-4">#</th>
                                    <th class="head-item mbr-fonts-style display-4">Logo</th>
                                    <th class="head-item mbr-fonts-style display-4">Nom</th>
                                    <th class="head-item mbr-fonts-style display-4">Domaine</th>
                                    <th class="head-item mbr-fonts-style display-4">WhatsApp</th>
                                    <th class="head-item mbr-fonts-style display-4">Email</th>
                                    <th class="head-item mbr-fonts-style display-4">Date Création</th>
                                    <th class="head-item mbr-fonts-style display-4">Couleur</th>
                                    <th class="head-item mbr-fonts-style display-4">Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agences as $agenceItem)
                                <tr>
                                    <td class="body-item mbr-fonts-style display-7">{{ $loop->index+1 }}</td>
                                    <td class="body-item">
                                        <img style="width: 50px" src="{{ asset('uploads/agence/logos/'.$agenceItem->logo) }}" alt="">
                                    </td>
                                    <td class="body-item mbr-fonts-style display-7">{{$agenceItem->user->name}}</td>
                                    <td class="body-item mbr-fonts-style display-7">{{ $agenceItem->domain }}</td>
                                    <td class="body-item mbr-fonts-style display-7">
                                        <a target="_blank" href="https://wa.me/{{ $agenceItem->user->telephoneWhatsapp }}"
                                            class="text-primary">{{ $agenceItem->user->telephoneWhatsapp }}</a>
                                    </td>
                                    <td class="body-item mbr-fonts-style display-7"><a
                                            href="mailto:{{ $agenceItem->user->email }}" class="text-primary">{{
                                            $agenceItem->user->email }}</a></td>
                                    <td class="body-item mbr-fonts-style display-7">{{
                                        date_format($agenceItem->created_at,'d/m/Y à H:i:s') }}</td>
                                    <td class="body-item">
                                        <div style="height: 20px; width: 50px; background-color: {{ $agenceItem->color }}">
                                        </div>
                                    </td>
                                    <td class="body-item mbr-fonts-style display-7">
                                        <div class="form-check form-check-inline">
                                            <input disabled type="checkbox" @if($agenceItem->enabled) checked @endif
                                            class="form-check-input" name="checkbox">
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container-fluid table-info-container">
                        <div class="row info mbr-fonts-style display-7">
                            <div class="dataTables_info"><span class="inactive infoRows">Vous voyez
                                    {{$agences->perPage()}}</span>
                                <span class="infoAfter">entrées</span>
                                <span class="infoFilteredBefore">(filtrées sur&nbsp;</span><span
                                    class="infoFilteredAfter">{{$agences->total()}} entrées)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection