<?php

use App\Livewire\Login;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function() {
        Route::get('/', function () {
            return view('welcome');
        });
});

Route::middleware("guest")->group(function(){
    Route::Get('/register', Register::class)->name('register');
    Route::Get('/login', Register::class)->name("login");
});
