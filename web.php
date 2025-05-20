<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/changepassword', function () {
    return view('auth.reset-password');
});

Route::middleware(['auth'])->get('/home', function(){
    return view('pages.index');
})->name('home');

Route::middleware(['auth'])->get('/edit', function(){
    return view('pages.update-profile');
});