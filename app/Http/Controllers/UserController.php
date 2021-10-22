<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Agence $agence=null)
    {
        $users = User::paginate(100);
        return view('admin.user.index',compact('users','agence'));
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Agence $agence=null, User $user)
    {
        $request->validate([
            'name'=>'required',
            'email'=>Rule::unique('users','email')->ignore($user->id),
            'telephoneWhatsapp'=>'required'
        ]);
        DB::beginTransaction();
        try {
            if($user->type=='Agence') {
                // verifier si le nom a changé
                if($user->getName()!=$request->get('name')) {
                    $user->agence->nom = $request->nom;
                    $user->agence->update();
                }
            }
            $user->update($request->all());
            DB::commit();
        } catch(Exception $e) {
            DB::rollback();
            throw $e;
        }
        toastr()->success("Votre profil est mis à jour avec succès !");
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
