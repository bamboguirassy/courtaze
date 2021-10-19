<?php

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

Route::get('/', function () {
    $categorieBiens = CategorieBien::orderby('nom')->get();
    $offres = Offre::where('visible',true)->inRandomOrder()->paginate(72);
    return view('home',compact('categorieBiens','offres'));
})->name('home');

include_once "web/auth.php";

include_once "web/admin.php";

include_once "web/shared.php";
