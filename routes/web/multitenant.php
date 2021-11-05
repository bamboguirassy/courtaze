<?php

use App\Http\Controllers\AgenceSocialLinkController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TemoignageController;
use App\Models\Agence;
use App\Models\AgenceSocialLink;
use App\Models\Service;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;


Route::domain('{agence:domain}.'.Config::get('app.url'))->group(function() {
        Route::get('/',function(Agence $agence) {
            return view('home',compact('agence'));
        })->name('home');

        Route::resource('agence-social-link', AgenceSocialLinkController::class,[
            'except'=>['show','create']
        ])->middleware('auth');

        Route::resource('service', ServiceController::class,[
            'only'=>['index','store','edit','update','destroy']
        ])->middleware('auth');

        Route::resource('temoignage', TemoignageController::class,[
            'only'=>['index','store','edit','update','destroy']
        ])->middleware('auth');

        Route::get('contact',function(Agence $agence) {
            return view('agence.contact',compact('agence'));
        })->name('agence.contact');

        Route::get('agence-details', function(Agence $agence) {
            return view('agence.details',compact('agence'));
        })->name('agence.details')->middleware('auth');

        Route::get('services',function(Agence $agence) {
            $services = Service::where('agence_id',$agence->id)
            ->get();
            $temoignages = Temoignage::where('agence_id',$agence->id)
            ->latest()->take(2)
            ->get();
            $socialLinks = AgenceSocialLink::where('agence_id',$agence->id)
            ->get();
            return view('agence.services',compact('agence','services','socialLinks','temoignages'));
        })->name('agence.services');



        include_once "shared.php";
});

