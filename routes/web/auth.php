<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('login', function() {
return view('auth.login');
})->name('login.page')->middleware('guest');

Route::post('login',function(Request $request) {
return redirect()->route('home');
})->name('login.request')->middleware('guest');

Route::get('register',function() {
return view('auth.register');
})->name('register.page')->middleware('guest');

Route::post('register', function(Request $request) {
return redirect()->route('home');
})->middleware('guest')->name('register.request');

Route::get('profile', function() {
return view('auth.profile');
})->middleware('auth')->name('profile');