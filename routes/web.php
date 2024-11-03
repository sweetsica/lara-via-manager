<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViaController;



Route::get('/', function () {
    return view('welcome');
});

Route::view('/via', 'via.index');
Route::post('/via-upload-raw', [ViaController::class,'import_txt'])->name('file.upload.txt');
Route::post('/via-upload-check', [ViaController::class,'import_xlxs'])->name('file.upload.xlxs');
