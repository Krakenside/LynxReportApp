<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\TechnicienController;
use App\Http\Controllers\TypeInterventionController;
use App\Http\Controllers\TypeMaintenanceController;
use App\Models\TypeIntervention;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Client/Listing', [ClientController::class, 'index'])->name('clientIndex');
Route::get('/Client/Show/{id}', [ClientController::class, 'show'])->name('ShowClt');
Route::get('/Client/Create', [ClientController::class, 'create'])->name('CreateClient;');
Route::post('/Client/Save', [ClientController::class, 'store'])->name('saveclt');
Route::get('/Client/edit/{id}', [ClientController::class, 'edit'])->name('editclt');
Route::post('/Client/update/{id}', [ClientController::class, 'update'])->name('updateclt');
Route::get('/Client/delete/{id}', [ClientController::class, 'destroy'])->name('deleteClt');

// 
Route::get('/Technicien/', [TechnicienController::class, 'index'])->name('IndexTech');
Route::get('/Technicien/Create', [TechnicienController::class, 'create'])->name('CreateTech');
Route::post('/Tecnicien/Save', [TechnicienController::class, 'store'])->name('TechStore');
Route::get('/Technicien/Show/{id}', [TechnicienController::class, 'show'])->name('ShowTech');
Route::get('/Technicien/Edit/{id}', [TechnicienController::class, 'edit'])->name('TechEdit');
Route::post('/Technicien/Update/{id}', [TechnicienController::class, 'update'])->name('UpdateTech');

// Type d'intervention 
Route::get('/TypeIntervention', [TypeInterventionController::class, 'index'])->name('TypeIntIndex');
Route::get('/TypeIntervention/Create/', [TypeInterventionController::class, 'create'])->name('TypeIntCreate');
Route::post('/TypeIntervention/Store/', [TypeInterventionController::class, 'store'])->name('TypeIntStore');
Route::get('/TypeIntervention/Edit/', [TypeInterventionController::class, 'edit'])->name('TypeIntEdit');
Route::post('/TypeIntervention/Update/', [TypeIntervention::class, 'update'])->name('TypeIntEdit');

//Type maintenance 

Route::get('/TypeMaintenance/', [TypeMaintenanceController::class, 'index'])->name('TypeMainIndx');
Route::post('/TypeMaintenance/create/', [TypeMaintenanceController::class, 'create'])->name('TypeMainCreate');


Route::get('/Rapports/', [RapportController::class, 'index'])->name('RapportIndex');
Route::get('/Rapports/create', [RapportController::class, 'create'])->name('RapportCreate');
Route::post('/Rapports/store/',[RapportController::class,'store'])->name('rapportStore');
