<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit']);
Route::patch('/mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'destroy']);

Route::get('/baju', [App\Http\Controllers\BajuController::class, 'index']);
Route::get('/baju/create', [App\Http\Controllers\BajuController::class, 'create']);
Route::post('/baju', [App\Http\Controllers\BajuController::class, 'store']);
Route::get('/baju/{id}/edit', [App\Http\Controllers\BajuController::class, 'edit']);
Route::patch('/baju/{id}', [App\Http\Controllers\BajuController::class, 'update']);
Route::delete('/baju/{id}', [App\Http\Controllers\BajuController::class, 'destroy']);

Route::get('/tipe', [App\Http\Controllers\TipeController::class, 'index']);
Route::get('/tipe/create', [App\Http\Controllers\TipeController::class, 'create']);
Route::post('/tipe', [App\Http\Controllers\TipeController::class, 'store']);
Route::get('/tipe/{id}/edit', [App\Http\Controllers\TipeController::class, 'edit']);
Route::patch('/tipe/{id}', [App\Http\Controllers\TipeController::class, 'update']);
Route::delete('/tipe/{id}', [App\Http\Controllers\TipeController::class, 'destroy']);
