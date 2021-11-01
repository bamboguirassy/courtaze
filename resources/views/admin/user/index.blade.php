@extends('base')

@section('title',"Liste des utilisateurs...")

@section('description',"La liste des utilisateurs de la plateforme...")

@section('body')
<section data-bs-version="5.1" class="header1 cid-sM1vxqklVM" id="header01-3z">
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
                        data-src="assets/images/logo.png">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg m-auto">
                <div class="text-wrapper align-left">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>Les utilisateurs</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Tous les comptes utilisateurs&nbsp; dans la plateforme...</p>

                </div>
            </div>
        </div>
    </div>
</section>

<x-separator />

<section data-bs-version="5.1" class="table01 photom4_table01 section-table cid-sM1vkR4QnP" id="table01-3y">
    <div class="container-fluid">
        <div class="row align-center">
            <div class="col-12 col-md-12">
                <div class="table-wrapper pt-5" style="width: 100%;">
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
                            data-empty="Aucun utilisateur n'est encore sur la plateforme.">
                            <thead>
                                <tr class="table-heads">
                                    <th class="head-item mbr-fonts-style display-4">#</th>
                                    <th class="head-item mbr-fonts-style display-4">Nom</th>
                                    <th class="head-item mbr-fonts-style display-4">Email</th>
                                    <th class="head-item mbr-fonts-style display-4">Téléphone</th>
                                    <th class="head-item mbr-fonts-style display-4">Date Inscription</th>
                                    <th class="head-item mbr-fonts-style display-4">Type</th>
                                    <th class="head-item mbr-fonts-style display-4">Statut</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="body-item mbr-fonts-style display-7">{{$loop->index+1}}</td>
                                    <td class="body-item mbr-fonts-style display-7">{{$user->name}}</td>
                                    <td class="body-item mbr-fonts-style display-7"><a
                                            href="mailto:{{$user->email}}"
                                            class="text-primary">{{$user->email}}</a></td>
                                    <td class="body-item mbr-fonts-style display-7"><a target="_blank" href="https://wa.me/{{$user->telephoneWhatsapp}}"
                                            class="text-primary">{{$user->telephoneWhatsapp}}</a></td>
                                    <td class="body-item mbr-fonts-style display-7">{{date_format($user->created_at,'d/m/Y à H:i:s')}}</td>
                                    <td class="body-item mbr-fonts-style display-7">
                                        @if ($user->type=='Agence')
                                        <a href="">{{$user->type}}</a>
                                        @else
                                        {{$user->type}}
                                        @endif
                                    </td>
                                    <td class="body-item">
                                        <div class="form-check form-check-inline">
                                              <input disabled type="checkbox" class="form-check-input" name="" id="" @if ($user->enabled) checked @endif>
                                        </div>
                                    </td>
                                </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container-fluid table-info-container">
                        <div class="row info mbr-fonts-style display-7">
                            <div class="dataTables_info">
                                <span class="infoBefore">Vous voyez</span>
                                <span class="inactive infoRows">{{$users->perPage()}}</span>&nbsp;éléments&nbsp;<span
                                    class="infoFilteredBefore">(filtrés sur {{$users->total()}} élément</span><span
                                    class="infoFilteredAfter">s)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection