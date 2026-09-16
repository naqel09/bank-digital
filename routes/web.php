<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/auth',function(){
    return view('auth.login');
})->name('login');

Route::get('/about',function(){
    return view('about.index');
})->name('about');