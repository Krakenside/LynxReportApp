<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\DeclencheurController;
use App\Http\Controllers\InterventionController;
use App\Http\Controllers\SiteController;
use App\Models\Commentaire;
use App\Models\Declencheur;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//client Routes
Route::get('/Clients', [ClientController::class, 'index'])->name('Clients.index');
Route::get('/Clients/create', [ClientController::class, 'create'])->name('Client.create');
Route::post('/Client/store', [ClientController::class, 'store'])->name('client.store');
Route::get('/Client/show/{id}', [ClientController::class, 'show'])->name('Client.show');


//sites Routes
Route::get('/Sites', [SiteController::class, 'index'])->name('Sites.index');
Route::get('/Sites/create', [SiteController::class, 'create'])->name('Sites.create');
Route::post('/Site/store/', [SiteController::class, 'store'])->name('Site.store');
Route::get('/Site/show/{id}', [SiteController::class, 'show'])->name('Site.show');


//signalement Routes
Route::get('/Declencheur', [DeclencheurController::class, 'index'])->name('signalement.index');
Route::get('/Signalement/create', [DeclencheurController::class, 'create'])->name('signalement.create');
Route::post('/Signalement/store', [DeclencheurController::class, 'store'])->name('signalement.store');
Route::get('/Signalement/show/{id}', [DeclencheurController::class, 'show'])->name('signalement.show');
Route::get('/Signalement/edit/{id}', [DeclencheurController::class, 'edit'])->name('signalement.edit');
Route::put('/Signalement/update/{id}', [DeclencheurController::class, 'update'])->name('signalement.update');
Route::delete('/Signalement/delete/{id}', [DeclencheurController::class, 'destroy'])->name('signalement.delete');


//Intervention Routes
Route::get('/Intervention', [InterventionController::class, 'index'])->name('intervention.index');
Route::get('/Intervention/create', [InterventionController::class, 'create'])->name('intervention.create');
Route::post('/Intervention/store', [InterventionController::class, 'store'])->name('intervention.store');
Route::get('/Intervention/show/{id}', [InterventionController::class, 'show'])->name('intervention.show');
Route::get('/Intervention/edit/{id}', [InterventionController::class, 'edit'])->name('intervention.edit');
Route::put('/Intervention/update/{id}', [InterventionController::class, 'update'])->name('intervention.update');
Route::delete('/Intervention/delete/{id}', [InterventionController::class, 'destroy'])->name('intervention.delete');

//Commentaires Routes
Route::get('/Commentaires', [CommentaireController::class, 'index'])->name('commentaires.index');
Route::get('/Commentaires/create', [CommentaireController::class, 'create'])->name('commentaires.create');
Route::post('/Commentaires/store', [CommentaireController::class, 'store'])->name('commentaires.store');
Route::get('/Commentaires/show/{id}', [CommentaireController::class, 'show'])->name('commentaires.show');
Route::get('/Commentaires/edit/{id}', [CommentaireController::class, 'edit'])->name('commentaires.edit');
Route::put('/Commentaires/update/{id}', [CommentaireController::class, 'update'])->name('commentaires.update');
Route::delete('/Commentaires/delete/{id}', [CommentaireController::class, 'destroy'])->name('commentaires.delete');

Route::get('/admin', function () {
    return view('dashboard');
});

// Route::get('/')
