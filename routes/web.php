<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StellingController;

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

Route::get('/home', [StellingController::class, 'home'])->name('home');
Route::get('/stelling/maak', [StellingController::class, 'maak'])->name('maak');
Route::post('/stelling/store', [StellingController::class, 'store'])->name('store');
Route::post('/stelling/join', [StellingController::class, 'join'])->name('join');
Route::get('/stelling/{id}', [StellingController::class, 'show'])->name('show');

