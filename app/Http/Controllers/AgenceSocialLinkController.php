<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\AgenceSocialLink;
use App\Models\ReseauSocial;
use Illuminate\Http\Request;

class AgenceSocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Agence $agence)
    {
        $reseauSociaux = ReseauSocial::all();
        $socialLinks = AgenceSocialLink::where('agence_id',$agence->id)->get();
        return view('agence.social-link.index',compact('socialLinks','reseauSociaux','agence'));
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
    public function store(Request $request,Agence $agence)
    {
        $request->validate([
            'reseau_social_id'=>'exists:reseau_social,id',
            'lien'=>'required|url'
        ]);
        $socialLink = new AgenceSocialLink($request->all());
        $socialLink->agence_id = $agence->id;
        if($socialLink->save()) {
            toastr()->success("Le lien est bien ajouté !");
        } else {
            toastr()->error("Une erreur est survenue pendant l'enregistrement du lien, il faut réssayer !");
        }
        return redirect()->route('agence-social-link.index',compact('agence'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgenceSocialLink  $agenceSocialLink
     * @return \Illuminate\Http\Response
     */
    public function show(AgenceSocialLink $agenceSocialLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgenceSocialLink  $agenceSocialLink
     * @return \Illuminate\Http\Response
     */
    public function edit(Agence $agence, AgenceSocialLink $agenceSocialLink)
    {
        return view('agence.social-link.edit',compact("agenceSocialLink","agence"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgenceSocialLink  $agenceSocialLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Agence $agence, AgenceSocialLink $agenceSocialLink)
    {
        $request->validate([
            'reseau_social_id'=>'exists:reseau_social,id',
            'lien'=>'required|url'
        ]);
        $socialLink = new AgenceSocialLink($request->all());
        if($socialLink->update()) {
            toastr()->success("Le lien est bien été mis à jour !");
        } else {
            toastr()->error("Une erreur est survenue pendant la mise à jour du lien, il faut réssayer !");
        }
        return redirect()->route('agence-social-link.index',compact('agence'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgenceSocialLink  $agenceSocialLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgenceSocialLink $agenceSocialLink)
    {
        if($agenceSocialLink->update()) {
            toastr()->success("Le lien est bien été supprimé !");
        } else {
            toastr()->error("Une erreur est survenue pendant la suppression du lien, il faut réssayer !");
        }
        return back();
    }
}
