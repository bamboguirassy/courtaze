<?php

namespace App\Http\Controllers;

use App\Models\ReseauSocial;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReseauSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reseauSociaux = ReseauSocial::all();
        return view('admin.reseau-social.index',compact('reseauSociaux'));
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
            'nom'=>'required|unique:reseau_socials,nom',
            'icon'=>'required',
            'photo'=>'required'
        ]);
        DB::beginTransaction();
        $photoName = $request->get('nom').'.'.$request->file('photo')->extension();
        try {
            $request->file('photo')->storeAs('reseau-social',$photoName);
            $reseauSocial = new ReseauSocial($request->all());
            $reseauSocial->photo = $photoName;
            $reseauSocial->save();
            DB::commit();
        } catch(Exception $e) {
            DB::rollback();
            toastr()->error("Une erreur est survenue pendant la création du réseau social");
            throw $e;
        }
        toastr()->success('Réseau social ajouté avec succès !');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReseauSocial  $reseauSocial
     * @return \Illuminate\Http\Response
     */
    public function show(ReseauSocial $reseauSocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReseauSocial  $reseauSocial
     * @return \Illuminate\Http\Response
     */
    public function edit(ReseauSocial $reseauSocial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReseauSocial  $reseauSocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReseauSocial $reseauSocial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReseauSocial  $reseauSocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReseauSocial $reseauSocial)
    {
        //
    }
}
