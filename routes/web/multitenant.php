<?php

use App\Models\Agence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;


Route::domain('{agence:domain}.'.Config::get('app.url'))->group(function() {
        Route::get('/',function(Agence $agence) {
            return view('home',compact('agence'));
        })->name('home');

        include_once "shared.php";
});

