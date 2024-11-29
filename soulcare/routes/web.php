<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CounselingController;
use App\Http\Controllers\TeacherController;

// Halaman landing (login)
Route::get('/', function () {
    return view('LandingPage');
});

// Halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('Login');
Route::post('/login', [AuthController::class, 'login']);

// Rute untuk setelah login (untuk pengguna yang sudah terautentikasi)
Route::middleware('auth')->group(function () {
    
    // Halaman untuk Jurnal Konseling (form untuk memasukkan data konseling)
    Route::get('/Jurnal-Konseling', [CounselingController::class, 'showJurnalKonseling']);
    Route::post('/store-counseling-record', [CounselingController::class, 'store'])->name('storeCounselingRecord');

    // Halaman Riwayat Konseling (untuk melihat riwayat data konseling yang disimpan)
    Route::get('/Riwayat-Konseling', [CounselingController::class, 'showRiwayatKonseling'])->name('riwayatKonseling');

    Route::get('/Detail-Masalah/{id}', [CounselingController::class, 'showDetailProblem'])->name('detail-riwayatKonseling');

    // Halaman untuk Materi Konseling
    Route::get('/Materi-Konseling', [CounselingController::class, 'showMateri'])->name('showMateriKonselor');

    // Halaman Keluhan Konseling
    Route::get('/Keluhan-Konseling', [CounselingController::class, 'showKeluhanKonselor'])->name('keluhanComplain');
    // Post data keluhan
    Route::post('/store-Complain', [CounselingController::class, 'storeComplain'])->name('storeComplain');

    // Halaman dashboard untuk guru BK (jika ada)
    Route::get('/Rekap-Data', [TeacherController::class, 'showData'])->name('RekapData');

    // Halaman Detail Konseling BK
    Route::get('/Detail-Konseling/{id}', [TeacherController::class, 'showProblem'])->name('showProblem');

    // Halaman untuk melihat data per kelas (misalnya Kelas 7, 8, 9)
    Route::get('/Rekap-Data/Kelas7',[TeacherController::class, 'showClass7'])->name('RekapKelas7');

    Route::get('/Rekap-Data/Kelas8',[TeacherController::class, 'showClass8'])->name('RekapKelas8');
    
    Route::get('/Rekap-Data/Kelas9',[TeacherController::class, 'showClass9'])->name('RekapKelas9');

    Route::get('/Upload-Materi', [TeacherController::class, 'showFormMateri'])->name('showFormMateri');
    Route::post('/store-Materi', [TeacherController::class, 'storeMateri'])->name('storeMateri');

    Route::get('/Materi-KonselingBK', [TeacherController::class, 'showMateri'])->name('showMateri');
    
    // Halaman Keluhan Guru BK
    Route::get('/Keluhan-BK', [TeacherController::class, 'showKeluhan'])->name('showKeluhan');
});

// Rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
