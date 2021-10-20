<?php

use App\Models\Agence;
use App\Models\CategorieBien;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
include "web/multitenant.php";

Route::get('mes-offres',function() {
    $offreActives = Offre::where('visible',true)->where('user_id',Auth()->user()->id)->paginate(18);
    $offreInactives = Offre::where('visible',false)->where('user_id',Auth()->user()->id)->paginate(18);
    $categorieBiens = CategorieBien::orderby('nom')->get();
    return view('shared.offre.user-offres',compact('offreActives','offreInactives','categorieBiens'));
    })->name('mes.publications')->middleware('auth');

include_once "web/admin.php";

include "web/shared.php";
