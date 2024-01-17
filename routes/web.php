<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\PFEController;
use App\Http\Controllers\SocieteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('welcome');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/IMSET', function () {
    return view('IMSET');
})->name('IMSET');
Route::get('/inscrire', function () {
    return view('inscrire');
})->name('inscrire');
Route::get('/PFE', function () {
    return view('PFE');
})->name('PFE');
Route::get('/societe', function () {
    return view('societe');
})->name('societe');




// Routes for EnseignantController
Route::get('/enseignants', [EnseignantController::class, 'index'])->name('enseignants');

Route::post('/postenseignant/{id}', [EnseignantController::class, 'show']);
Route::delete('/deleteenseignant/{id}', [EnseignantController::class, 'destroy']);

// Routes for EtudiantController
Route::get('/getetudiant', [EtudiantController::class, 'index']);
Route::get('/getetudiant', [EtudiantController::class, 'index']);
Route::delete('/deleteetudiant/{id}', [EtudiantController::class, 'destroy']);
Route::get('/postetudiant/{id}', [EtudiantController::class, 'show']);
Route::delete('/deleteetudiant/{id}', [EtudiantController::class, 'destroy']);
# /informations

// Routes for PFEController
Route::get('/getpfe', [PFEController::class, 'index']);
Route::get('/postpfe/{id}', [PFEController::class, 'show']);
Route::delete('/deletepfe/{id}', [PFEController::class, 'destroy']);
Route::post('/storepfe', [PFEController::class, 'store']);
Route::put('/updatepfe/{id}', [PFEController::class, 'update']);

// Routes for SocieteController
Route::get('/getsociete', [SocieteController::class, 'index']);
Route::post('/postsociete/{id}', [SocieteController::class, 'show']);
Route::delete('/deletesociete/{id}', [SocieteController::class, 'destroy']);
