<?php

use App\Mail\NewUserRegistered;
use App\Models\Agence;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('login', function(Request $request, Agence $agence=null) {
    if($request->has('ret')) {
        $request->session()->put('ret',$request->get('ret'));
    }
return view('auth.login',compact('agence'));
})->name('login')->middleware('guest');

Route::post('login',function(Request $request,Agence $agence=null) {
    $request->validate([
        'email'=>'required|exists:users,email',
        'password'=>'min:6',
    ]);
    // 'g-recaptcha-response' => 'recaptcha',
    Auth::attempt($request->only('email','password'), true);
    if($agence!=null) {
        if(Auth::user()->id!=$agence->user_id && Auth::user()->type!='Client' && Auth::user()->type!='Admin') {
            Auth::logout();
            toastr()->error("Vous n'êtes pas autorisés à vous connecter à cette agence !");
        }
    }
    if(session()->exists('ret')) {
        $url = session('ret');
        session()->remove('ret');
        return redirect($url);
    }
    return redirect()->route('home');
})->name('login.request')->middleware('guest');

Route::get('pre-register', function(Request $request, Agence $agence=null) {
    if($request->has('type')) {
        return view('auth.register',compact('agence'))->with(['type'=>$request->get('type')]);
    } else {
        return view('auth.pre-register',compact('agence'));
    }
})->name('pre.register')->middleware('guest');

Route::post('register', function(Request $request,Agence $agence=null) {
    $request->validate([
        'name'=>'required',
        'telephoneWhatsapp'=>'required',
        'email'=>'required|unique:users',
        'password'=>'required|min:6|confirmed',
        'type'=>'required',
    ]);
    // 'g-recaptcha-response' => 'recaptcha',
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
                'color'=>'required',
                'description'=>'required',
                'adresse'=>'required',
            ]);
            $agence = new Agence($request->all());
            $agence->nom = $request->get('name');
            $agence->domain = Str::slug($request->get('name'));
            if($request->has('logo')) {
                $filename = $agence->domain.'.'.$request->file('logo')->extension();
                $request->file('logo')->storeAs('agence/logos',$filename);
                $agence->logo = $filename;
            }
            $agence->user_id = $user->id;
            $agence->save();
        }
        Mail::to($user->email)->bcc(config('mail.cc'))->send(new NewUserRegistered($user,$request->get('password')));
        DB::commit();
    } catch(Exception $e) {
        DB::rollback();
        throw $e;
    }
    toastr()->success("Votre compte est créé avec succès sur la plateforme....");
    if($request->get('type')=='Agence') {
        return redirect()->route('registration.confirmation.page',compact('agence'));
    }
    return redirect()->route('login',compact('agence'));
})->name('register.request');

Route::post('logout',function(Request $request,Agence $agence=null) {
    if(Auth::logout()) {
        toastr()->success("Vous vous êtes déconnectés avec succès !");
        return redirect()->route('home'); 
    }
    return redirect()->back()->with(['agence'=>$agence]);
})->middleware('auth')->name('logout');

Route::get('profile', function(Agence $agence=null) {
return view('auth.profile',compact('agence'));
})->middleware('auth')->name('profile');

Route::put('change-password',function(Request $request, Agence $agence=null) {
    $request->validate([
        'currentPassword'=>'required|min:6',
        'password'=>'confirmed'
    ]);
    $user = User::find(Auth::user()->id);
    if(Hash::check($request->get('currentPassword'), $user->password)) {
        $user->password = Hash::make($request->get('password'));
        $user->update();
        toastr()->success("Votre mot de passe a été changé avec succès, merci de vous reconnecter !");
        Auth::logout();
    } else {
        toastr()->error("Le mot de passe saisi est incorrect !");
    }
    return back();
})->name('change.password.request')->middleware('auth');