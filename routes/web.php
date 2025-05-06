<?php

use App\Models\Site;
use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\DeclencheurController;
use App\Http\Controllers\InterventionController;
use App\Http\Controllers\TechnicienController;

Route::get('/', function () {
    $getTechnicien = User::where('type', 'technicien')->get();
    $NbrTechnicien = ($getTechnicien)->count();
    $getclient = (Client::all())->count();
    // dd('Nbr Techniciens ' . $getTechnicien->count(), 'Nbr de clients ' . $getclient->count());
    $getSite = (Site::all())->count();
    return view('dashboard', compact('NbrTechnicien', 'getclient', 'getSite'));
});

//techniciens routes
Route::get('/Techniciens/', [TechnicienController::class, 'index'])->name('Techniciens.index');
Route::get('/Techniciens/create', [TechnicienController::class, 'create'])->name('Technicien.create');
Route::post('/Technicien/store', [TechnicienController::class, 'store'])->name('technicien.store');
Route::get('/Technicien/show/{id}', [TechnicienController::class, 'show'])->name('Technicien.show');
Route::get('/Technicien/edit/{id}', [TechnicienController::class, 'edit'])->name('Technicien.edit');
Route::put('/Technicien/update/{id}', [TechnicienController::class, 'update'])->name('Technicien.update');
Route::delete('/Technicien/delete/{id}', [TechnicienController::class, 'destroy'])->name('Technicien.delete');
Route::get('/Technicien/showInterventions/{id}', [TechnicienController::class, 'showInterventions'])->name('Technicien.showInterventions');
Route::get('/Technicien/showSites/{id}', [TechnicienController::class, 'showSites'])->name('Technicien.showSites');
Route::get('/Technicien/showClients/{id}', [TechnicienController::class, 'showClients'])->name('Technicien.showClients');
Route::get('/Technicien/showDeclencheurs/{id}', [TechnicienController::class, 'showDeclencheurs'])->name('Technicien.showDeclencheurs');
Route::get('/Technicien/showCommentaires/{id}', [TechnicienController::class, 'showCommentaires'])->name('Technicien.showCommentaires');
Route::get('/Technicien/showSignalements/{id}', [TechnicienController::class, 'showSignalements'])->name('Technicien.showSignalements');


//client Routes
Route::get('/Clients', [ClientController::class, 'index'])->name('Clients.index');
Route::get('/Clients/create', [ClientController::class, 'create'])->name('Client.create');
Route::post('/Client/store', [ClientController::class, 'store'])->name('client.store');
Route::get('/Client/show/{id}', [ClientController::class, 'show'])->name('Client.show');
Route::get('/Client/edit/{id}', [ClientController::class, 'edit'])->name('Client.edit');
Route::put('/Client/update/{id}', [ClientController::class, 'update'])->name('Client.update');
Route::delete('/Client/delete/{id}', [ClientController::class, 'destroy'])->name('Client.delete');


//sites Routes
Route::get('/Sites', [SiteController::class, 'index'])->name('Sites.index');
Route::get('/Sites/create', [SiteController::class, 'create'])->name('Sites.create');
Route::post('/Site/store/', [SiteController::class, 'store'])->name('Site.store');
Route::get('/Site/show/{id}', [SiteController::class, 'show'])->name('Site.show');
Route::get('/Site/edit/{id}', [SiteController::class, 'edit'])->name('Site.edit');
Route::put('/Site/update/{id}', [SiteController::class, 'update'])->name('Site.update');
Route::delete('/Site/delete/{id}', [SiteController::class, 'destroy'])->name('Site.delete');
Route::get('/Site/showInterventions/{id}', [SiteController::class, 'showInterventions'])->name('Site.showInterventions');


//Declencheur Routes
Route::get('/Declencheur', [DeclencheurController::class, 'index'])->name('signalement.index');
Route::get('/Signalement/create', [DeclencheurController::class, 'create'])->name('signalement.create');
Route::post('/Signalement/store', [DeclencheurController::class, 'store'])->name('signalement.store');
Route::get('/Signalement/show/{id}', [DeclencheurController::class, 'show'])->name('signalement.show');
Route::get('/Signalement/edit/{id}', [DeclencheurController::class, 'edit'])->name('signalement.edit');
Route::put('/Signalement/update/{id}', [DeclencheurController::class, 'update'])->name('signalement.update');
Route::delete('/Signalement/delete/{id}', [DeclencheurController::class, 'destroy'])->name('signalement.delete');
Route::get('/Signalement/showInterventions/{id}', [DeclencheurController::class, 'showInterventions'])->name('signalement.showInterventions');


//Signalement Routes


//Intervention Routes
Route::get('/Intervention/', [InterventionController::class, 'index'])->name('intervention.index');
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
    $getTechnicien = User::where('type', 'technicien')->get();
    $NbrTechnicien = ($getTechnicien)->count();
    $getclient = (Client::all())->count();
    // dd('Nbr Techniciens ' . $getTechnicien->count(), 'Nbr de clients ' . $getclient->count());
    $getSite = (Site::all())->count();
    return view('dashboard', compact('NbrTechnicien', 'getclient', 'getSite'));
});
