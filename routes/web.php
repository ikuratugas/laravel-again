<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\BtnController;
use Illuminate\Support\Facades\Route;


// ini untuk folder views/btn
Route::get('/', [BtnController::class, 'halamanUtama'])->name('/'); // oh iya name di sini hanya semacam komentar bahwa ini menuju route mana. bila pun beda tidak error. agak aneh memang tapi bagus lah..
Route::get('/tentang', [BtnController::class, 'halamanTentang']);
Route::get('/mahasiswa', [BtnController::class, 'halamanMahasiswa']);
Route::get('/mahasiswa/{id}', [BtnController::class, 'halamanDetailMahasiswa']);


// ini untuk folder views/rumahkuning
// Route::get('/', [studentController::class, 'index']);
// Route::get('/mahasiswa/{nim}', [studentController::class, 'getDetail']);
