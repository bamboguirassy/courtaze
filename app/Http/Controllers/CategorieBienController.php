<?php

namespace App\Http\Controllers;

use App\Models\CategorieBien;
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
            'icon'=>'required'
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieBien  $categorieBien
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieBien $categorieBien)
    {
        //
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
        //
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
