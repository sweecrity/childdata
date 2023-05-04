<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;

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



Route::get('/',[InformationController::class,'index']);
Route::post('/',[InformationController::class,'register']);
Route::get('/delete/{id}', [InformationController::class,'delete'])->name('delete');

Route::get('/edit/{id}', [InformationController::class,'edit'])->name('edit');
 Route::put('/update/{id}', [InformationController::class,'update'])->name('update');

// Route::resource('informations', InformationController::class);