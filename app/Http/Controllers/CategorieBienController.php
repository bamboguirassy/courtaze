<?php

namespace App\Http\Controllers;

use App\Models\CategorieBien;
use App\Models\Offre;
use Illuminate\Http\Request;

class CategorieBienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorieBiens = CategorieBien::all();
        return view('admin.categorie-bien.index',compact('categorieBiens'));
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
    public function show(CategorieBien $categorieBien)
    {
        $offres = Offre::where('visible',true)->where('categorie_bien_id',$categorieBien->id)->paginate(36);
        return view('shared.categorie-bien.show',compact('categorieBien','offres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieBien  $categorieBien
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieBien $categorieBien)
    {
        return view('admin.categorie-bien.edit',compact('categorieBien'));
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
        if($categorieBien->delete()) {
            toastr()->success("La catégorie est supprimée avec succès !");
        } else {
            toastr()->error("Une erreur est survenue lors de la suppression de la catégorie.");
        }
        return back();
    }
}
