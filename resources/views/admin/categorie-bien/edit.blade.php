@extends('base')

@section('title',"Liste des catégories de bien...")

@section('description',"La liste des catégories de bien sur la plateforme...")

@section('body')
<section data-bs-version="5.1" class="accordion1 cid-sLWhtFYIC3" id="accordions03-16">
    <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 1600 40" style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
        <style type="text/css">
            .st0
        </style>
        <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
	s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
    </svg>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-7 col-12 m-auto">
                <h2 class="mbr-fonts-style mbr-section-title pb-3 mb-1 mbr-white mbr-semibold align-left display-2">
                    <strong>Catégories</strong>
                </h2>
                <h3 class="mbr-fonts-style mbr-section-subtitle pb-3 mb-1 mbr-white mbr-regular align-left display-7">
                    Gestion des catégories de biens</h3>

            </div>
            <div class="col-12 col-md-12 col-lg-5 image-wrapper">
                <img class="w-100 md-pb lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                    loading="lazy"
                    data-src="assets/images/vente-achat-location-hypotheque-maison-108855-1795-626x521.jpg">
            </div>
        </div>
    </div>
</section>


<section class="form cid-sLWii5EOxE" id="formbuilder-18">


    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="{{ route('categorie-bien.update', $categorieBien->id) }}" method="POST" class="mbr-form form-with-styler"
                    data-form-title="categorieNewForm">
                    @csrf
                    @method('put')
                    <input type="hidden" name="email" data-form-email="true"
                        value="Yf1ve3uKICVCbNBCHWlM+PMCdRLG4xlGkEa8lzvNWvODshRbTMhJGBJBCg0PVZLEKHpgSUoWuzeTb7H8Cd12zdB2qKSGK7jDEDqgjPv8vVtxL66DESZw1MA5MQ9exWjJ.SPjzyTHHQ3Znc+s525B98njh0qt2ICDhJlfWxCXNqqoulszwuAAe+xJZt7SIeBgzHZI15kpAR8a9NHnDNLYeGy8PUxpoidFBlT81lo9xRoTXm8/uhpK20aB5B3mYuHqS">
                    <x-display-validation-errors />
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-5">Formulaire de Modification - Catégorie</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="nom" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="nom-formbuilder-18"
                                class="form-control-label mbr-fonts-style display-7">Nom</label>
                            <input type="text" name="nom" data-form-field="nom" class="form-control display-7"
                                required="required" value="{{ old('nom') ?? $categorieBien->nom }}"
                                id="nom-formbuilder-18">
                        </div>
                        <div data-for="code" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="code-formbuilder-18"
                                class="form-control-label mbr-fonts-style display-7">Code</label>
                            <input type="text" name="code" data-form-field="code" class="form-control display-7"
                                required="required" value="{{ old('code') ?? $categorieBien->code }}" id="code-formbuilder-18">
                        </div>
                        <div data-for="description" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="description-formbuilder-18"
                                class="form-control-label mbr-fonts-style display-7">Description</label>
                            <textarea  name="description" data-form-field="description" class="form-control display-7"
                                id="description-formbuilder-18">{{ old('description') ?? $categorieBien->description }}</textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="icon" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="icon-formbuilder-18"
                                class="form-control-label mbr-fonts-style display-7">Icon</label>
                            <input type="text" name="icon" data-form-field="icon" required="required"
                                class="form-control display-7" value="{{ old('icon') ?? $categorieBien->icon }}" id="icon-formbuilder-18">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-warning display-7">Mettre à jour</button>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>
@endsection
