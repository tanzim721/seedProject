<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalculatedController;

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

Route::get('/', [HomeController::class, 'view'])->name('view');         

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/calculate_vat', [CalculatedController::class,'calculateVAT'])->name('calculate_vat');
Route::post('/calculate_vat/store', [CalculatedController::class,'store'])->name('store');


