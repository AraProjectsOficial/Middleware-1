<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', 'email'])->group(function(){
    Route::get('/inicio', function () {
        return "Holiiiiiiii";
    });
});

Route::get("/redirecion", function(){
    return "No tienes acceso";
})->name("redireccion");