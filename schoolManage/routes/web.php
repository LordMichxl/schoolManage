<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\etudiantController;
use App\Http\Controllers\evaluationController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/etudiants', [etudiantController::class,'index'])->name('etudiants.index');
Route::get('/etudiants/create', [etudiantController::class,'create'])->name('etudiants.create');
Route::post('/etudiants/store',[etudiantController::class,'store'])->name('etudiants.store');
Route::get('/etudiants/{id}/edit', [etudiantController::class, 'edit'])->name('etudiants.edit');
Route::put('/etudiants/{id}', [etudiantController::class, 'update'])->name('etudiants.update');
Route::get('/etudiants/{id}', [etudiantController::class, 'destroy'])->name('etudiants.destroy');

//Pour les Evaluation
Route::get('/evaluations', [evaluationController::class,'index'])->name('evaluations.index');
Route::get('/evaluations/create', [evaluationController::class,'create'])->name('evaluations.create');
Route::post('/evaluations/store',[evaluationController::class,'store'])->name('evaluations.store');
Route::get('/evaluations/{id}/edit', [evaluationController::class, 'edit'])->name('evaluations.edit');
Route::put('/evaluations/{id}', [evaluationController::class, 'update'])->name('evaluations.update');
Route::get('/evaluations/{id}', [evaluationController::class, 'destroy'])->name('evaluations.destroy');
