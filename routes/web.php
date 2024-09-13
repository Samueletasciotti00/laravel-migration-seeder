<?php

use Illuminate\Support\Facades\Route;

// Utilizzo del page controller per gestione delle function;
use App\Http\Controllers\PageController;
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

//Home
Route::get('/',[PageController::class,'index'])->name('home');

//Trains
Route::get('/treni', [PageController::class,'trains'])->name('trains');

//Filtered Trains
Route::get('/now',[PageController::class,'nowTrains'])->name('now_trains');

//Packages
Route::get('/packages',[PageController::class,'packages'])->name('packages');