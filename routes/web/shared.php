<?php

use App\Helpers\RoutingHelper;
use App\Http\Controllers\CategorieBienController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\UserController;
use App\Models\Agence;
use App\Models\CategorieBien;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SKAgarwal\GoogleApi\PlacesApi;

Route::get('/', function (Agence $agence=null) {
    $categories = CategorieBien::orderby('nom')->get();
    $query = Offre::where('visible',true)->inRandomOrder();
    if($agence!=null) {
        $query = $query->where('agence_id',$agence->id);
    }
    $offres = $query->paginate(72);
    return view('home',compact('categories','offres','agence'));
})->name('home');

Route::post('post-init',function(Request $request, Agence $agence=null) {
    $request->validate([
        'categorie_bien_id'=>'required|exists:categorie_biens,id'
    ]);
    $categorieBien = CategorieBien::find($request->get('categorie_bien_id'));
    return view('shared.offre.new',['categorieBien'=>$categorieBien,'agence'=>$agence]);
})->middleware('auth')->name('offre.init.new');

Route::get('mes-offres',function(Agence $agence=null) {
    $offreActives = Offre::where('visible',true)->where('user_id',Auth()->user()->id)->paginate(18);
    $offreInactives = Offre::where('visible',false)->where('user_id',Auth()->user()->id)->paginate(18);
    $categorieBiens = CategorieBien::orderby('nom')->get();
    return view('shared.offre.user-offres',compact('offreActives','offreInactives','categorieBiens','agence'));
    })->name('mes.publications')->middleware('auth');

Route::put('{offre}/change-visibility', 'App\Http\Controllers\OffreController@changeVisiility')
->name('offre.change.visibility')->middleware('auth');

Route::post('offre/{offre}/localiser','App\Http\Controllers\OffreController@geolocaliser')
->name('offre.geolocaliser')->middleware('auth');

Route::post('offre/{offre}/pin','App\Http\Controllers\OffreController@pin')
->name('offre.pin')->middleware('auth');

Route::delete('offre/{offre}/unpin','App\Http\Controllers\OffreController@unpin')
->name('offre.unpin')->middleware('auth');

Route::resource('offre', OffreController::class,[
    'only'=>['store','edit','update','destroy']
])->middleware('auth');

Route::resource('offre', OffreController::class,[
    'only'=>['show']
]);

/** Filtre des biens par catégorie bien */
Route::post('categorie-bien/{categorie}',function(Agence $agence=null, CategorieBien $categorie) {
    $query = Offre::where('visible',true)->where('categorie_bien_id',$categorie->id);
    if($agence!=null) {
        $query = $query->where('agence_id',$agence->id);
    }
    $offres = RoutingHelper::filterOffres($query);
    if(count($offres)) {
        toastr()->info("Votre filtre a trouvé ".count($offres)." résultat(s)");
    } else {
        toastr()->warning("Aucun résultat n'est trouvé pour vos critères de recherche...");
    }
    return view('shared.categorie-bien.show',['categorieBien'=>$categorie,'offres'=>$offres,'agence'=>$agence]);
})->name('categorie.offre.filter');

Route::resource('categorie-bien', CategorieBienController::class,[
    'only'=>['show']
]);

Route::resource('user', UserController::class,[
    'only'=>['update']
])->middleware('auth');

Route::get('/ads.txt', function () {
    $content = view('ads');
    return response($content, 200)
        ->header('content-Type', 'text');
});

Route::get('liste-envie',function(Agence $agence=null) {
return view('shared.liste-envie',compact('agence'));
})->name('user.liste.envie')->middleware('auth');

Route::post('/',function(Request $request, Agence $agence=null) {
    $query = Offre::where('visible',true);
    if($agence!=null) {
        $query = $query->where('agence_id',$agence->id);
    }
    $offres = RoutingHelper::filterOffres($query);
    if(count($offres)) {
        toastr()->info("Votre filtre a trouvé ".count($offres)." résultat(s)");
    } else {
        toastr()->warning("Aucun résultat n'est trouvé pour vos critères de recherche...");
    }
    $categories = CategorieBien::orderby('nom')->get();
    return view('home',compact('offres','categories','agence'));
})->name('offre.filter');

Route::get('adresse-autocomplete', function(Request $request)  {
    $googlePlaces = new PlacesApi(config('google.places.key'));
    $response = $googlePlaces->placeAutocomplete($request->get('place'));
    dd($response);
});

include "auth.php";

