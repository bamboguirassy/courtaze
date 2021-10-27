<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Agence $agence=null)
    {
        $temoignages = Temoignage::where('agence_id',$agence->id)->get();
        return view('agence.temoignage.index',compact('agence','temoignages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Agence $agence)
    {
        $request->validate([
            'clientName'=>'required',
            'message'=>'required',
        ]);
        DB::beginTransaction();
        try {
            $temoignage=new Temoignage();
            $temoignage->photo='';
            $temoignage->agence_id=$agence->id;
            $temoignage->clientName = $request->clientName;
            $temoignage->fonction = $request->fonction;
            $temoignage->message = $request->message;

            if($request->hasFile('photo'))
            {
                $photoName = $agence->domain.'_'.uniqid().'.'.$request->file('photo')->extension();
                $request->file('photo')->storeAs('temoignage/client',$photoName);
                $temoignage->photo=$photoName;

            }

            $temoignage->save();

            toastr()->success("Temoignage enregistrer avec succes");
            DB::commit();

        } catch(Exception $e) {

            toastr()->error("Une erreur est survenue pendant la création du temoignage");
            throw $e;
        }
        return back();




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function show(Temoignage $temoignage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function edit(Temoignage $temoignage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temoignage $temoignage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temoignage $temoignage)
    {
        //
    }
}
