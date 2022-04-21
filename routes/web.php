<?php

use App\Http\Controllers\WargaController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/warga', [WargaController::class, 'index'])->name('warga');
    Route::get('/warga/create', [WargaController::class, 'create'])->name('create');
    Route::post('/warga/post', [WargaController::class, 'store'])->name('store');
    Route::get('/warga/{id}/edit', [WargaController::class, 'edit'])->name('edit');
    Route::put('/warga/{id}', [WargaController::class, 'update'])->name('update');
    Route::delete('/warga/{id}', [WargaController::class, 'destroy'])->name('destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');