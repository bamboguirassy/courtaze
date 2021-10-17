<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('login', function() {

})->name('login.page')->middleware('guest');

Route::post('login',function(Request $request) {

})->name('login.request')->middleware('guest');

Route::get('register',function() {

})->name('register.page')->middleware('guest');

Route::post('register', function() {

})->middleware('guest')->name('register.request');

Route::get('profile', function() {

})->middleware('auth')->name('profile');