<?php
// app/Http/Controllers/AuthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan model User terhubung ke tabel login

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email
        $user = User::where('Email', $request->email)->first();

        if ($user && $request->password === $user->Password) { // Bandingkan password
            // Periksa Role dan redirect
            if ($user->Role === 'Konselor Sebaya') {
                return redirect('/Jurnal-Konseling'); // Redirect ke Jurnal Konseling
            } elseif ($user->Role === 'Guru BK') {
                return redirect('/Rekap-Data'); // Redirect ke Rekap Data
            }
        }

        // Login gagal
        return redirect()->back()->withErrors(['Invalid email or password']);
    }
}
