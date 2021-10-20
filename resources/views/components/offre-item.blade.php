<a href="{{ route('offre.show',compact('offre','agence')) }}">
<div class="card1 card">
    <div class="item-img">
        <span class="offre-badge">{{ $offre->proposition }}</span>
        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy"
            class="lazyload" data-src="{{ asset('uploads/offre/images/'.(count($offre->images)>0?$offre->images[0]->nom:'')) }}">
    </div>
    <div class="item-wrapper">
        <div class="item-content">
            <h6 class="item-subtitle align-left mb-1 mbr-fonts-style display-8">{{ $offre->categorieBien->nom }} à {{$offre->proposition=="Vente"?"vendre":"louer"}} à {{ $offre->ville }}</h6>
            <div class="mbr-flex mt-3">
                <div class="mbr-section-btn align-right">
                    <button class="btn item-btn btn-white display-8">
                        <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>Afficher</a>
                </div>
                <p class="price align-right mb-0 mbr-fonts-style display-6">{{$offre->prix}}CFA</p>
            </div>
            <p class="mbr-text align-right mt-3 mb-0 mbr-fonts-style display-4">{{  \Illuminate\Support\Str::limit($offre->adresse,30,'...') }}</p>
        </div>
    </div>
</div>
</a>