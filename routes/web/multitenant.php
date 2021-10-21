<?php

use App\Http\Controllers\ServiceController;
use App\Models\Agence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;


Route::domain('{agence:domain}.'.Config::get('app.url'))->group(function() {
        Route::get('/',function(Agence $agence) {
            return view('home',compact('agence'));
        })->name('home');

        Route::resource('service', ServiceController::class,[
            'only'=>['index','store','edit','update']
        ]);

        include_once "shared.php";
});

