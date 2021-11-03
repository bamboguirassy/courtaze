<?php

use App\Http\Controllers\AgenceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
include "web/multitenant.php";

include_once "web/admin.php";

Route::resource('agence', AgenceController::class,[
    'only'=>['edit','update']
])->middleware('auth');

include "web/shared.php";
