<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Offre;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'categorie_bien_id'=>'required|exists:categorie_biens,id',
            'photos'=>'required'
        ]);
        $offre = new Offre($request->all());
        DB::beginTransaction();
        try {
            if(Auth::user()->type=='agence') {
                $offre->agence_id = Auth::user()->agence->id;
            } 
            $offre->user_id = Auth::user()->id;
            $offre->save();
            /** upload photos */
            foreach ($request->file('photos') as $photo) {
                try {
                    $photoname = uniqid().'_'.$offre->id.'.'.$photo->extension();
                    $photo->storeAs('offre/images',$photoname);
                    $image = new Image();
                    $image->offre_id = $offre->id;
                    $image->nom = $photoname;
                    $image->save();
                } catch(Exception $e) {
                    toastr()->error("Certains fichiers n'ont pas pu être téléversés");
                }
            }
            DB::commit();
        } catch(Exception $e) {
            DB::rollback();
            throw $e;
        }
        toastr()->success("L'offre a été publiée avec succès !");
        return redirect()->route('offre.show',compact('offre'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        return view('shared.offre.show',compact('offre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function edit(Offre $offre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offre $offre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offre $offre)
    {
        //
    }
}
