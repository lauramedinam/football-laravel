<?php

use App\Http\Controllers\ConsultasController;
use Illuminate\Support\Facades\Route;



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


Route::get('/games', [ConsultasController::class, 'index'])->name('api.v1.games.index');
Route::get('/teams', [ConsultasController::class, 'index1'])->name('api.v1.teams.index1');
Route::get('/players', [ConsultasController::class, 'index2'])->name('api.v1.players.index2');
Route::get('/goals', [ConsultasController::class, 'index3'])->name('api.v1.goals.index3');
Route::get('/games1', [ConsultasController::class, 'index4'])->name('api.v1.games1.index4');
Route::get('/president', [ConsultasController::class, 'index5'])->name('api.v1.president.index5');
