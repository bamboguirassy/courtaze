<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Agence $agence=null)
    {
        $services = Service::where('agence_id',$agence->id)->get();
        return view('agence.service.index',compact('agence','services'));
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
            'nom'=>'required',
            'description'=>'required',
        ]);
        $service = new Service($request->all());
        $service->agence_id=$agence->id;
        $service->save();
        toastr()->success('Le service a bien été ajoutée !');
        return back();

    }

    /**
     * Display the specified resource.
     * @param  \App\Models\Agence  $agence
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\Models\Agence   $agence
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit( Agence $agence,Service $service )
    {
        return view('agence.service.edit',compact('service','agence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Agence $agence, Service $service)
    {

        $request->validate([
            'nom'=>'required',
            'description'=>'required',

        ]);

        $service->update($request->all());
        toastr()->info("La catégorie <span class='badge badge-dark'>#$service->id</span> a bien été modifiée.");
        return redirect()->route('service.index',compact('agence'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agence $agence,Service $service)
    {
        $service->delete();
         toastr()->error("Le service <span class='badge badge-dark'>#$service->id</span> a bien été supprimé.");

         return redirect()->route('service.index',compact('agence'));
    }
}
