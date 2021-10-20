<?php

use App\Http\Controllers\CategorieBienController;
use App\Http\Controllers\OffreController;
use App\Models\Agence;
use App\Models\CategorieBien;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

function filterOffres(Request $request, $query) {
    $filterableFields = [
        'proposition',
        'categorie_bien_id',
        'nombreAppartement',
        'nombreStudio',
        'nombreChambre',
        'isMeuble',
        'hasGarage',
        'hasCuisine',
        'hasToilettePublique',
        'hasSalon',
        'hasToiletteInterieure',
        'niveau',
        'nombreChambreAvecToilette',
        'ville',
        'superficie',
        'nombreEtage'
    ];
    if($request->has('prix') && $request->get('prix')!=null) {
        $query = $query->where('prix','<=',$request->get('prix'));
    }
    foreach ($filterableFields as $filterableField) {
        if($request->has($filterableField) && $request->get($filterableField)!=null) {
            $query = $query->where($filterableField,$request->get($filterableField));
        }
    }
   return $query->inRandomOrder()->paginate(36); 
}

Route::post('post-init',function(Request $request) {
    $request->validate([
        'categorie_bien_id'=>'required|exists:categorie_biens,id'
    ]);
    $categorieBien = CategorieBien::find($request->get('categorie_bien_id'));
    return view('shared.offre.new',['categorieBien'=>$categorieBien]);
})->middleware('auth')->name('offre.init.new');

Route::resource('offre', OffreController::class,[
    'only'=>['store','show','edit','update']
])->middleware('auth');

Route::get('mes-offres',function() {
$offreActives = Offre::where('visible',true)->where('user_id',Auth()->user()->id)->paginate(18);
$offreInactives = Offre::where('visible',false)->where('user_id',Auth()->user()->id)->paginate(18);
$categorieBiens = CategorieBien::orderby('nom')->get();
return view('shared.offre.user-offres',compact('offreActives','offreInactives','categorieBiens'));
})->name('mes.publications')->middleware('auth');

Route::post('categorie-bien/{categorie}',function(Request $request, CategorieBien $categorie, Agence $agence=null) {
    $query = Offre::where('visible',true)->where('categorie_bien_id',$categorie->id);
    if($agence!=null) {
        $query = $query->where('agence_id',$agence->id);
    }
    $offres = filterOffres($request,$query);
    return view('shared.categorie-bien.show',['categorieBien'=>$categorie,'offres'=>$offres]);
})->name('categorie.offre.filter');

Route::resource('categorie-bien', CategorieBienController::class,[
    'only'=>['show']
]);

Route::post('/',function(Request $request, Agence $agence=null) {
    $query = Offre::where('visible',true);
    if($agence!=null) {
        $query = $query->where('agence_id',$agence->id);
    }
    $offres = filterOffres($request,$query);
    $categories = CategorieBien::orderby('nom')->get();
    return view('home',compact('offres','categories'));
})->name('offre.filter');
