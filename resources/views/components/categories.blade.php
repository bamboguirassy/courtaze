<section data-bs-version="5.1" class="features3 cid-sM19LqxmLU" id="features03-31">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-5">
                    <strong>Categories</strong>
                </h3>

            </div>
        </div>
        <div class="row">
            @foreach ($categorieList as $categorie)
            <div class="card col-12 col-md-4 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="iconfont-wrapper">
                            <span class="mbr-iconfont {{$categorie->icon}}"></span>
                        </div>
                        <h5 class="card-title mbr-fonts-style display-4">
                            <p>
                                <a href="categorie-show.html" class="text-primary">
                                    <strong>{{$categorie->nom}}</strong>
                                </a>
                            </p>
                        </h5>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>