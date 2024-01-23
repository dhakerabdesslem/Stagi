<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes for EnseignantController
Route::get('/enseignants', [EnseignantController::class, 'index'])->name('enseignants');

Route::post('/postenseignant/{id}', [EnseignantController::class, 'show']);
Route::delete('/deleteenseignant/{id}', [EnseignantController::class, 'destroy']);

// Routes for EtudiantController
Route::get('/getetudiant', [EtudiantController::class, 'index']);
Route::delete('/deleteetudiant/{id}', [EtudiantController::class, 'destroy']);
Route::get('/postetudiant/{id}', [EtudiantController::class, 'show']);
Route::delete('/deleteetudiant/{id}', [EtudiantController::class, 'destroy']);
# /informations

// Routes for PFEController
Route::get('/pfes', [PFEController::class, 'index'])->name('pfes');
Route::get('/pfe/{id}', [PFEController::class, 'show']);
Route::delete('/pfe/{id}', [PFEController::class, 'destroy']);
Route::post('/pfe', [PFEController::class, 'store']);
Route::put('/pfe/{id}', [PFEController::class, 'update']);

// Routes for SocieteController
Route::get('/getsociete', [SocieteController::class, 'index']);
Route::post('/postsociete/{id}', [SocieteController::class, 'show']);
Route::delete('/deletesociete/{id}', [SocieteController::class, 'destroy']);
