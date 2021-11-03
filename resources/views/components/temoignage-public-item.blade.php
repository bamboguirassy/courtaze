<div>
   @foreach ($temoignage as $temoignages )
   <p class="mbr-text mbr-fonts-style mb-4 display-7">
    <em>{{$temoignages->message}}</em>
</p>
<div class="d-flex mb-md-0 mb-4">
    <div class="image-wrapper">
        @if ($temoignages->photo)
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
            loading="lazy" class="lazyload" data-src="{{ asset('uploads/temoignage/client/'.$temoignages->photo) }}">
        @else
        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" class="w-100 lazyload" data-src="assets/images/images.png">
        @endif
    </div>
    <div class="text-wrapper my-auto">
        <p class="name mbr-fonts-style mb-1 display-5">
            <strong>{{$temoignages->fonction}}</strong>
        </p>
        <p class="position mbr-fonts-style display-4">
            <strong>{{$temoignages->clientName}}</strong>
        </p>
    </div>
</div>
   @endforeach

</div>
