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

Route::middleware(['auth'])->group(function() {
    Route::get('/tabel/create', [App\Http\Controllers\tabelController::class, 'beschikbaar']);
    Route::post('/tabel', [App\Http\Controllers\tabelController::class, 'store']);
});

Route::middleware(['auth'])->group(function() {
    Route::get('/tabel', [\App\Http\Controllers\tabelController::class,'index'])->middleware(['auth']);
    Route::get('/tabel/{id}', [\App\Http\Controllers\tabelController::class,'show']);
    Route::get('/', [\App\Http\Controllers\tabelController::class,'tabel'])->middleware(['auth']);
    Route::get('/tabel', [\App\Http\Controllers\tabelController::class, 'tabel']);
});

Route::middleware(['auth','age'])->group(function() {
    Route::get('/drinks', [App\Http\Controllers\DrinksController::class, 'index']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
