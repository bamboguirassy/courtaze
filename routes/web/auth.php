<?php

use App\Models\Agence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('login', function() {
return view('auth.login');
})->name('login.page')->middleware('guest');

Route::post('login',function(Request $request) {
    $request->validate([
        'email'=>'required|exists:users,email',
        'password'=>'min:6'
    ]);
    Auth::attempt($request->only('email','password'), true);
    return redirect()->route('home');
return redirect()->route('home');
})->name('login.request')->middleware('guest');

Route::get('pre-register', function() {
 return view('auth.pre-register');
})->name('pre.register.page')->middleware('guest');

Route::post('pre-register', function(Request $request) {
    if(!$request->has('type')) {
        toastr()->error('Le type de compte est obligatoire !');
    }
    return view('auth.register',['type'=>$request->get('type')]);
})->name('pre.register.request')->middleware('guest');

Route::post('register', function(Request $request) {
    $request->validate([
        'name'=>'required',
        'telephoneWhatsapp'=>'required',
        'email'=>'required|unique:users',
        'password'=>'required|min:6|confirmed',
        'type'=>'required',
    ]);
    DB::beginTransaction();
    $user = new User($request->all());
    try {
        /** hash password */
        $user->password = Hash::make($request->get('password'));
        $user->save();
        /** si agence */
        if($request->get('type')=='Agence') {
            $request->validate([
                'slogan'=>'required',
                'domain'=>'required',
                'slogan'=>'required',
                'color'=>'required',
                'description'=>'required',
                'adresse'=>'required',
            ]);
            $agence = new Agence($request->all());
            if($request->has('logo')) {
                $filename = $request->get('domain').'.'.$request->file('logo')->extension();
                 $request->file('logo')->storeAs('agence/logos',$filename);
                $agence->logo = $filename;
            }
            $agence->user_id = $user->id;
            $agence->save();
        }
        DB::commit();
    } catch(Exception $e) {
        DB::rollback();
        throw $e;
    }
    toastr()->success("Votre compte est créé avec succès sur la plateforme....");
    return redirect()->route('login.page');
})->middleware('guest')->name('register.request');

Route::post('logout',function(Request $request) {
    $user = Auth::user();
    if(Auth::logout()) {
        toastr()->success("Vous vous êtes déconnectés avec succès !");
        if($request->has('agence')) {
            // redirect to agence home
        } else {
            return redirect()->route('home');
        }
    }
    return redirect()->back();
})->middleware('auth')->name('logout');

Route::get('profile', function() {
return view('auth.profile');
})->middleware('auth')->name('profile');