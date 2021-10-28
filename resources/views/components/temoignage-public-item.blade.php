<div class="card col-12 col-md-6">
    @foreach ($temoignages as $temoignage)
    <p class="mbr-text mbr-fonts-style mb-4 display-7">
        <em>{{$temoignage->message}}</em>
    </p>
    <div class="d-flex mb-md-0 mb-4">
        <div class="image-wrapper">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                loading="lazy" class="lazyload" data-src="{{ asset('uploads/temoignage/client/'.$temoignage->photo) }}">
        </div>
        <div class="text-wrapper my-auto">
            <p class="name mbr-fonts-style mb-1 display-5">
                <strong>{{$temoignage->fonction}}</strong>
            </p>
            <p class="position mbr-fonts-style display-4">
                <strong>{{$temoignage->clientName}}</strong>
            </p>
        </div>
    </div>
    @endforeach ()


</div>
