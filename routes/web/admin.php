<?php

use App\Http\Controllers\CategorieBienController;
use Illuminate\Support\Facades\Route;

Route::resource('categorie-bien', CategorieBienController::class)
->middleware('admin');