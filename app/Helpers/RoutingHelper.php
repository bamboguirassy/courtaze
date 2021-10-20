<?php
namespace App\Helpers;

use App\Models\Agence;
use App\Models\CategorieBien;
use App\Models\Offre;

class RoutingHelper {
    public static function filterOffres($query) {
        $request = request();
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

public static function postInit(Agence $agence=null) {
    $request = request();
    $request->validate([
        'categorie_bien_id'=>'required|exists:categorie_biens,id'
    ]);
    $categorieBien = CategorieBien::find($request->get('categorie_bien_id'));
    return compact('categorieBien','agence');
}

public static function filterOffreFromCatagorie(CategorieBien $categorie, Agence $agence=null) {
    $query = Offre::where('visible',true)->where('categorie_bien_id',$categorie->id);
    if($agence!=null) {
        $query = $query->where('agence_id',$agence->id);
    }
    $offres = RoutingHelper::filterOffres($query);
    return['categorieBien'=>$categorie,'offres'=>$offres,'agence'=>$agence];
}

public static function filterHomeOffre(Agence $agence=null) {
    $query = Offre::where('visible',true);
    if($agence!=null) {
        $query = $query->where('agence_id',$agence->id);
    }
    $offres = RoutingHelper::filterOffres($query);
    $categories = CategorieBien::orderby('nom')->get();
    return compact('offres','categories','agence');
}

}