<?php

use App\Http\Controllers\AgenceController;
use App\Http\Controllers\CategorieBienController;
use App\Http\Controllers\ReseauSocialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('categorie-bien', CategorieBienController::class,[
    'only'=>['index']
])
->middleware('admin');

Route::resource('reseau-social', ReseauSocialController::class,[
    'only'=>['index','store']
])->middleware('admin');

Route::resource('user', UserController::class,[
    'only'=>['index']
])->middleware('admin');

Route::resource('agence', AgenceController::class,[
    'only'=>['index']
])->middleware('admin');