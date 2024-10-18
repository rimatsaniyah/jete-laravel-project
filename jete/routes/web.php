<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataController;

// Route untuk menampilkan semua data
Route::get('/data', [DataController::class, 'index']);

// Route untuk menambah data baru
Route::post('/data', [DataController::class, 'store']);

// Route untuk menampilkan data berdasarkan id
Route::get('/data/{id}', [DataController::class, 'show']);

// Route untuk memperbarui data berdasarkan id
Route::put('/data/{id}', [DataController::class, 'update']);

// Route untuk menghapus data berdasarkan id
Route::delete('/data/{id}', [DataController::class, 'destroy']);


Route::get('/', function () {
    return view('welcome');
});
