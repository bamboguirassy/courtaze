<?php

use App\Http\Controllers\CategorieBienController;
use App\Http\Controllers\OffreController;
use App\Models\CategorieBien;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('post-init',function(Request $request) {
    $request->validate([
        'categorie_bien_id'=>'required|exists:categorie_biens,id'
    ]);
    $categorieBien = CategorieBien::find($request->get('categorie_bien_id'));
    return view('shared.offre.new',['categorieBien'=>$categorieBien]);
})->middleware('auth')->name('offre.init.new');

Route::resource('offre', OffreController::class,[
    'only'=>['store','show']
])->middleware('auth');

Route::get('mes-offres',function() {
$offreActives = Offre::where('visible',true)->where('user_id',Auth()->user()->id)->paginate(18);
$offreInactives = Offre::where('visible',false)->where('user_id',Auth()->user()->id)->paginate(18);
$categorieBiens = CategorieBien::orderby('nom')->get();
return view('shared.offre.user-offres',compact('offreActives','offreInactives','categorieBiens'));
})->name('mes.publications')->middleware('auth');

Route::resource('categorie-bien', CategorieBienController::class,[
    'only'=>['show']
]);