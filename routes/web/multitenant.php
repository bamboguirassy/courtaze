<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TemoignageController;
use App\Models\Agence;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;


Route::domain('{agence:domain}.'.Config::get('app.url'))->group(function() {
        Route::get('/',function(Agence $agence) {
            return view('home',compact('agence'));
        })->name('home');

        Route::resource('service', ServiceController::class,[
            'only'=>['index','store','edit','update','destroy']
        ])->middleware('auth');

        Route::resource('temoignage', TemoignageController::class,[
            'only'=>['index','store','edit','update','destroy']
        ])->middleware('auth');

        Route::get('contact',function(Agence $agence) {
            return view('agence.contact',compact('agence'));
        })->name('agence.contact');

        Route::get('services',function(Agence $agence) {
            $services = Service::where('agence_id',$agence->id)
            ->get();
            return view('agence.services',compact('agence','services'));
        })->name('agence.services');



        include_once "shared.php";
});

