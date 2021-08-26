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
Route::get('/typeformation', [TypeformationController::class, 'index'])->name('typeformation');

// ----------  Ajout  --------------
Route::post('/batiment', [BatimentController::class, 'store']);

Route::post('/eleve', [EleveController::class, 'store']);

Route::post('/formation', [FormationController::class, 'store']);

Route::post('/typeformation', [TypeformationController::class, 'store']);

// ----------  Suppression  --------------
Route::post('/batiment/{id}', [BatimentController::class, 'destroy']);

Route::post('/eleve/{id}', [EleveController::class, 'destroy']);

Route::post('/formation/{id}', [FormationController::class, 'destroy']);

Route::post('/typeformation/{id}', [TypeformationController::class, 'destroy']);

// ----------  Show  --------------
Route::get('/crud/showbatiment/{id}', [BatimentController::class, 'show']);

Route::get('/crud/showeleve/{id}', [EleveController::class, 'show']);

Route::get('/crud/showformation/{id}', [FormationController::class, 'show']);

Route::get('/crud/showtypeformation/{id}', [TypeformationController::class, 'show']);

// ----------  Update  --------------
Route::get('/crud/editbatiment/{id}', [BatimentController::class, 'edit']);
Route::put('/crud/updatebatiment/{id}', [BatimentController::class, 'update']);

Route::get('/crud/editeleve/{id}', [EleveController::class, 'edit']);
Route::put('/crud/updateeleve/{id}', [EleveController::class, 'update']);

Route::get('/crud/editformation/{id}', [FormationController::class, 'edit']);
Route::put('/crud/updateformation/{id}', [FormationController::class, 'update']);

Route::get('/crud/edittypeformation/{id}', [TypeformationController::class, 'edit']);
Route::put('/crud/updatetypeformation/{id}', [TypeformationController::class, 'update']);