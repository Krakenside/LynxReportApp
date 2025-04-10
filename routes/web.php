<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Clients',[ClientController::class,'index'])->name('Clients.index');

Route::get('/admin', function () {
    return view('dashboard');
});

// Route::get('/')
