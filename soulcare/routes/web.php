<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurnalKonselingController;
use App\Http\Controllers\AuthController;

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
    return view('LandingPage');
});

Route::get('/login', function () {
    return view('login'); // Menampilkan form login
});

Route::post('/login', [AuthController::class, 'login']); // Proses login

// Halaman tujuan setelah login
Route::get('/Jurnal-Konseling', function () {
    return view('JurnalKonseling'); // Ganti dengan view yang sesuai
})->name('JurnalKonseling');

Route::get('/Rekap-Data', function () {
    return view('RekapData'); // Ganti dengan view yang sesuai
})->name('RekapData');


//Halaman Konselor
Route::get('/Jurnal-Konseling', function () {
    return view('JurnalKonseling');
});

Route::get('/Riwayat-Konseling', function () {
    return view('riwayatKonseling');
});

Route::get('/Detail-Konseling', function () {
    return view('detail-riwayatKonseling');
});

Route::get('/Materi-Konseling', function () {
    return view('materiKonseling');
});

Route::get('/Keluhan-Konseling', function () {
    return view('keluhanKonselor');
});

//Halaman Guru BK
Route::get('/Rekap-Data', function () {
    return view('RekapData');
});

Route::get('/Rekap-Data/Kelas7', function () {
    return view('RekapDataKelas7');
});

Route::get('/Rekap-Data/Kelas8', function () {
    return view('RekapDataKelas8');
});

Route::get('/Rekap-Data/Kelas9', function () {
    return view('RekapDataKelas9');
});

Route::get('/Materi-KonselingBK', function () {
    return view('MateriKonselingBK');
});

Route::get('/Upload-Materi', function () {
    return view('UploadMateri');
});

Route::get('/Keluhan-BK', function () {
    return view('KeluhanBK');
});

Route::get('/Detail-KonselingBK', function () {
    return view('DetailKonselingBK');
});


//Controller

// Route untuk menampilkan form Jurnal Konseling
Route::get('/Jurnal-Konseling', [JurnalKonselingController::class, 'index']);
