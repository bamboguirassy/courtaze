<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Agence $agence=null)
    {
        $agences = Agence::paginate(100);
        return view('admin.agence.index',compact('agences','agence'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function show(Agence $agence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function edit(Agence $agence)
    {
        return view('agence.edit',compact('agence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agence $agence)
    {
        $request->validate([
            'nom'=>['required',
            Rule::unique('agences','nom')->ignore($agence->id),
            Rule::unique('users','name')->ignore($agence->user->id)],
            'slogan'=>'required',
            'color'=>'required',
            'description'=>'required',
            'adresse'=>'required',
            'telephoneWhatsapp'=>'required'
        ]);
        if($request->get('nom')!=$agence->nom) {
            $agence->user->name = $request->get('nom');
            toastr()->warning("Le nom a changé mais le lien de l'agence reste le même, si vous souhaitez le modifier, merci de contacter les administrateurs.");
        }
        $agence->user->telephoneWhatsapp = $request->get('telephoneWhatsapp');
        $agence->user->telephonePersonnel = $request->get('telephonePersonnel');
        DB::beginTransaction();
        try {
            $agence->update($request->all());
            $agence->user->update();
            if($request->has('logo')) {
                Storage::delete(['agence/logos/'.$agence->logo]);
                $filename = $agence->domain.'.'.$request->file('logo')->extension();
                $request->file('logo')->storeAs('agence/logos',$filename);
                $agence->logo = $filename;
                $agence->update();
            }
            DB::commit();
            toastr()->success("L'agence a été mis à jour avec succès !");
        } catch(Exception $e) {
            DB::rollback();
            toastr()->error("Une erreur est survenue lors de la modification de l'agence !");
            throw $e;
        }
        return redirect()->route('agence.details',compact('agence'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agence $agence)
    {
        //
    }
}
