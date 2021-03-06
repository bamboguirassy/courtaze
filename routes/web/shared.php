<?php

use App\Helpers\RoutingHelper;
use App\Http\Controllers\CategorieBienController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\UserController;
use App\Models\Agence;
use App\Models\CategorieBien;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PragmaRX\Countries\Package\Countries;
use PragmaRX\Countries\Package\Services\Config;

Route::get('/', function (Agence $agence=null) {
    $categories = CategorieBien::orderby('nom')->get();
    $query = Offre::where('visible',true)->inRandomOrder();
    if(Auth::user()) {
        $query = $query->whereRelation('user','country',Auth::user()->country);
    }
    if($agence!=null) {
        $query = $query->where('agence_id',$agence->id);
    }
    $offres = $query->paginate(72);
    $countrieSrv = new Countries(new Config([
        'hydrate' => [
            'elements' => [
                'currencies' => true,
                'flag' => true,
            ],
        ],
    ]));
    $countries = $countrieSrv->all();
    return view('home',compact('categories','offres','agence','countries'));
})->name('home');

Route::get('/home', function (Agence $agence=null) {
    $categories = CategorieBien::orderby('nom')->get();
    $query = Offre::where('visible',true)->inRandomOrder();
    if($agence!=null) {
        $query = $query->where('agence_id',$agence->id);
    }
    $offres = $query->paginate(72);
    return view('home',compact('categories','offres','agence'));
})->name('home.page');

Route::get('registration-confirmation',function(Agence $agence=null) {
    return view('shared.register-confirmation',compact('agence'));
})->name('registration.confirmation.page');

Route::get('post-init',function(Request $request, Agence $agence=null) {
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

Route::get('offers-ws','App\Http\Controllers\OffreController@getOffersForWs');

Route::resource('offre', OffreController::class,[
    'only'=>['store','edit','update','destroy']
])->middleware('auth');

Route::resource('offre', OffreController::class,[
    'only'=>['show']
]);

/** Filtre des biens par cat??gorie bien */
Route::post('categorie-bien/{categorie}',function(Request $request, Agence $agence=null, CategorieBien $categorie) {
    $query = Offre::where('visible',true)->where('categorie_bien_id',$categorie->id);
    if($request->has('country')) {
        $query = $query->whereRelation('user','country',$request->get('country'));
    } elseif(Auth::user()) {
        $query = $query->whereRelation('user','country',Auth::user()->country);
    }
    if($agence!=null) {
        $query = $query->where('agence_id',$agence->id);
    }
    $offres = RoutingHelper::filterOffres($query);
    if(count($offres)) {
        toastr()->info("Votre filtre a trouv?? ".count($offres)." r??sultat(s)");
    } else {
        toastr()->warning("Aucun r??sultat n'est trouv?? pour vos crit??res de recherche...");
    }
    $countrieSrv = new Countries(new Config([
        'hydrate' => [
            'elements' => [
                'currencies' => true,
                'flag' => true,
            ],
        ],
    ]));
    $countries = $countrieSrv->all();
    return view('shared.categorie-bien.show',['categorieBien'=>$categorie,'offres'=>$offres,'agence'=>$agence,'countries'=>$countries]);
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
Route::get('/robots.txt', function () {
    $content = view('robots');
    return response($content, 200)
        ->header('content-Type', 'text');
});
Route::get('/sitemap.xml', function () {
    $agences= Agence::where('enabled',true)->get();
    $offres = Offre::where('visible',true)->get();
    $sitemap = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'.
	'<url>'.
    '<loc>https://katalog.tech</loc>'.
	'</url>'.
	'<url>'.
    '<loc>https://katalog.tech/login</loc>'.
	'</url>'.
	'<url>'.
    '<loc>https://katalog.tech/pre-register</loc>'.
	'</url>';
    foreach ($agences as $agence) {
        $sitemap = $sitemap.
        '<url>'.
		"<loc>https://{$agence->domain}.katalog.tech/</loc>".
	    '</url>';
    }
    foreach ($offres as $offre) {
        $sitemap = $sitemap.
        '<url>'.
		"<loc>https://katalog.tech/categorie-bien/{$offre->id}</loc>".
	    '</url>';
    }
	
    $sitemap = $sitemap.'</urlset>';
    return response($sitemap, 200)
        ->header('content-Type', 'application/xml');
});

Route::get('liste-envie',function(Agence $agence=null) {
return view('shared.liste-envie',compact('agence'));
})->name('user.liste.envie')->middleware('auth');

Route::post('/',function(Request $request, Agence $agence=null) {
    $query = Offre::where('visible',true);
    if($request->has('country')) {
        $query = $query->whereRelation('user','country',$request->get('country'));
    } elseif(Auth::user()) {
        $query = $query->whereRelation('user','country',Auth::user()->country);
    }
    if($agence!=null) {
        $query = $query->where('agence_id',$agence->id);
    }
    $offres = RoutingHelper::filterOffres($query);
    if(count($offres)) {
        toastr()->info("Votre filtre a trouv?? ".count($offres)." r??sultat(s)");
    } else {
        toastr()->warning("Aucun r??sultat n'est trouv?? pour vos crit??res de recherche...");
    }
    $categories = CategorieBien::orderby('nom')->get();
    $countrieSrv = new Countries(new Config([
        'hydrate' => [
            'elements' => [
                'currencies' => true,
                'flag' => true,
            ],
        ],
    ]));
    $countries = $countrieSrv->all();
    return view('home',compact('offres','categories','agence','countries'));
})->name('offre.filter');

/** not used for now */
Route::get('adresse-autocomplete', function(Request $request)  {
   /* $googlePlaces = new PlacesApi(config('google.places.key'));
    $response = $googlePlaces->placeAutocomplete($request->get('place'));*/
});

/** for ws */
Route::get('countries',function() {
    $countrieSrv = new Countries(new Config([
        'hydrate' => [
            'elements' => [
                'currencies' => true,
                'flag' => true,
            ],
        ],
    ]));
    return $countrieSrv->all();
});

include "auth.php";

