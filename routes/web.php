<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;

Route::get('/', function () {
    return view('home');
});

Route::get('/login',function(){
    return view('auth.login');
})->name('auth.login');

Route::get('/about',function(){
    return view('about.index');
})->name('about');

Route::post('/login',[Login::class,'authenticate'])->name('login');
    
Route::get('/dashboard', function () {
    return view('customer.dashboard');
})->name('dashboard')->middleware('auth');
