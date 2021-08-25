<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeformationController;
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


// ----------  Accès  --------------
Route::get('/batiment', [BatimentController::class, 'index'])->name('batiment');
Route::get('/eleves', [EleveController::class, 'index'])->name('eleves');
Route::get('/formations', [FormationController::class, 'index'])->name('formations');
Route::get('/typeformatio', [TypeformationController::class, 'index'])->name('typeformation');

// ----------  Ajout  --------------
Route::post('/batiment', [BatimentController::class, 'store']);

// ----------  Suppression  --------------
Route::post('/batiment/{id}', [BatimentController::class, 'destroy']);

// ----------  Show  --------------
Route::get('/crud/show/{id}', [BatimentController::class, 'show']);

// ----------  Update  --------------
Route::get('/crud/edit/{id}', [BatimentController::class, 'edit']);
Route::put('/crud/update/{id}', [BatimentController::class, 'update']);