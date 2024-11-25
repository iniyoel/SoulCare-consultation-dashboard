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


Route::get('/Awal', function () {
    return view('LandingPage');
});

Route::post('/login', function () {
    $username = request('username');
    $password = request('password');

    if ($username === 'guru' && $password === 'password') {
        return redirect('/Rekap-Data');
    } elseif ($username === 'konselor' && $password === 'password') {
        return redirect('/Jurnal-Konseling');
    } else {
        return redirect()->back()->withErrors(['Invalid credentials']);
    }
});
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

Route::get('/Detail-Konseling', function () {
    return view('DetailKonselingBK');
});
