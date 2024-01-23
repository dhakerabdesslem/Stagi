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
Route::post('/enseignants/store', [EnseignantController::class, 'store'])->name('enseignants.store');
Route::get('/enseignants/create', [EnseignantController::class, 'create'])->name('enseignant.create');
Route::get('/enseignants/{id}', [EnseignantController::class, 'show'])->name('enseignant.show');
Route::delete('/deleteenseignant/{id}', [EnseignantController::class, 'destroy']);
Route::get('/enseignants/{enseignant}/edit', [EnseignantController::class, 'edit'])->name('enseignants.edit');
Route::put('/enseignants/{enseignant}', [EnseignantController::class, 'update'])->name('enseignants.update');


// Routes for EtudiantController
Route::get('/getetudiant', [EtudiantController::class, 'index'])->name('test');
Route::delete('/deleteetudiant/{id}', [EtudiantController::class, 'destroy']);
Route::get('/postetudiant/{id}', [EtudiantController::class, 'show']);
Route::delete('/deleteetudiant/{id}', [EtudiantController::class, 'destroy']);
# /informations

// Routes for PFEController


Route::get('/pfes/create', [PFEController::class, 'create'])->name('pfes.create');
Route::post('/pfes/store', [PFEController::class, 'store'])->name('pfes.store');
Route::delete('/pfes/delete/{pfe}', [PFEController::class, 'destroy'])->name('pfes.destroy');
Route::get('/pfes/index', [PFEController::class, 'index'])->name('pfes.index');
Route::get('/pfes/show/{pfe}', [PFEController::class, 'show'])->name('pfes.show');
Route::get('/pfes/edit/{pfe}', [PFEController::class, 'edit'])->name('pfes.edit');
Route::put('/pfes/update/{pfe}', [PFEController::class, 'update'])->name('pfes.update');



// Routes for SocieteController

Route::get('/societes', [SocieteController::class, 'index'])->name('societes.index');
Route::get('/societes/create', [SocieteController::class, 'create'])->name('societes.create');
Route::post('/societes', [SocieteController::class, 'store'])->name('societes.store');
Route::get('/societes/{societe}', [SocieteController::class, 'show'])->name('societes.show');
Route::get('/societes/{societe}/edit', [SocieteController::class, 'edit'])->name('societes.edit');
Route::put('/societes/{societe}', [SocieteController::class, 'update'])->name('societes.update');
Route::delete('/societes/{societe}', [SocieteController::class, 'destroy'])->name('societes.destroy');

use App\Http\Controllers\PfeEtudiantController;
Route::get('/pfe_etudiant', [PfeEtudiantController::class, 'index'])->name('pfe_etudiant.index');
Route::get('/pfe_etudiant/create', [PfeEtudiantController::class, 'create'])->name('pfe_etudiant.create');
Route::post('/pfe_etudiant', [PfeEtudiantController::class, 'store'])->name('pfe_etudiant.store');
Route::get('/pfe_etudiant/{id}', [PfeEtudiantController::class, 'show'])->name('pfe_etudiant.show');
Route::get('/pfe_etudiant/{id}/edit', [PfeEtudiantController::class, 'edit'])->name('pfe_etudiant.edit');
Route::put('/pfe_etudiant/{id}', [PfeEtudiantController::class, 'update'])->name('pfe_etudiant.update');
Route::delete('/pfe_etudiant/{id}', [PfeEtudiantController::class, 'destroy'])->name('pfe_etudiant.destroy');



Route::resource('etudiant', EtudiantController::class);

// Additional route for the index method
Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
