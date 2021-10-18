<?php

use App\Http\Controllers\OffreController;
use App\Models\CategorieBien;
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