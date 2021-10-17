<?php

use App\Http\Controllers\CategorieBienController;
use App\Http\Controllers\ReseauSocialController;
use Illuminate\Support\Facades\Route;

Route::resource('categorie-bien', CategorieBienController::class)
->middleware('admin');

Route::resource('reseau-social', ReseauSocialController::class)
->middleware('admin');