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

//Train
Route::get('/treni', [PageController::class,'trains'])->name('trains');