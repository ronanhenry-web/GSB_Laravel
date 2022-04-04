<?php

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
    return redirect()->route('dashboard');
});

// Page par défaut
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/rapport',[App\Http\Controllers\RapportController::class,'liste'])->name('rapport');
    Route::get('/rapport/{id}',[App\Http\Controllers\RapportController::class,'pdf'])->name('rapport.pdf');

    Route::post('/nouveauRapport',[App\Http\Controllers\RapportController::class,'store'])->name('nouveauRapport');
    Route::get('/nouveauRapport',[App\Http\Controllers\RapportController::class,'rapportVisite'])->name('rapportVisite');
    
    Route::get('/medoc',[App\Http\Controllers\MedocController::class,'liste'])->name('medoc');
    Route::get('/medocById',[App\Http\Controllers\MedocController::class,'getIdMedoc'])->name('rechercheMedoc');
    
    Route::get('/praticien',[App\Http\Controllers\PraticienController::class,'liste'])->name('praticien');
    Route::get('/searchPraticien',[App\Http\Controllers\PraticienController::class,'search'])->name('research');

    Route::post('/profil',[App\Http\Controllers\ProfilController::class,'storeProfil'])->name('profil');
    Route::get('/profil',[App\Http\Controllers\ProfilController::class,'liste'])->name('profilVisiteur');
});
