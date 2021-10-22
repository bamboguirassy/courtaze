<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\CategorieBien;
use App\Models\Offre;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Exception;

class CategorieBienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Agence $agence=null)
    {
        $categorieBiens = CategorieBien::all();
        return view('admin.categorie-bien.index',compact('categorieBiens','agence'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required|unique:categorie_biens,nom',
            'description'=>'required',
            'icon'=>'required',
            'code'=>"required"
        ]);
        $categorieBien = new CategorieBien($request->all());
        $categorieBien->save();
        toastr()->success('La catégorie a bien été ajoutée !');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieBien  $categorieBien
     * @return \Illuminate\Http\Response
     */
    public function show(Agence $agence=null, CategorieBien $categorieBien)
    {
        $query = Offre::where('visible',true)->where('categorie_bien_id',$categorieBien->id);
        if($agence!=null) {
            $query = $query->where('agence_id',$agence->id);
        }
        $offres = $query->paginate(36);
        return view('shared.categorie-bien.show',compact('categorieBien','offres','agence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieBien  $categorieBien
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieBien $categorieBien,Agence $agence=null)
    {
        return view('admin.categorie-bien.edit',compact('categorieBien','agence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategorieBien  $categorieBien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategorieBien $categorieBien)
    {
        $request->validate([
            'nom'=>'required',
            'description'=>'required',
            'icon'=>'required',
            'code'=>"required"
        ]);
        $categorieBien->update($request->all());
        toastr()->info("La catégorie <span class='badge badge-dark'>#$categorieBien->id</span> a bien été modifiée.");
        return redirect()->route('categorie-bien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieBien  $categorieBien
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieBien $categorieBien)
    {
        try{
            if($categorieBien->delete())
            {
                toastr()->error("La catégorie est supprimée avec succès !");
                return back();
            }

        }
        catch(Exception $e)
        {
            toastr()->error("Une erreur est survenue lors de la suppression de la catégorie  !");
            return back();
            throw   $e;
        }


    }
}
