<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViaController;



Route::get('/', function () {
    return view('welcome');
});

// Route::view('/via', 'via.index')->name('home');
Route::get('/via', [ViaController::class,'index'])->name('home');
Route::post('/via-upload-raw', [ViaController::class,'import_txt'])->name('file.upload.txt');
Route::get('/via-upload-save-txt', [ViaController::class,'save_from_txt'])->name('import.txt');
Route::post('/via-upload-check', [ViaController::class,'import_xlxs'])->name('file.upload.xlxs');

Route::get('/dashboard', function () {
    return view('via.dashboard');
});

Route::get('/via/dashboard', [ViaController::class,'index'])->name('home');
