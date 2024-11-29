<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    // Menampilkan form untuk mengganti password dan nama
    public function showUpdatePassword()
    {
        return view('GantiPassword');
    }

    // Proses update nama dan password
    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'new_password' => 'required|string|min:8',  // Validasi password
            'confirm_new_password' => 'required|string|same:new_password',
        ]);
        
        $user = Auth::user();
        $user->name = $request->input('name');  // Mengubah name
        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->input('new_password'));
        }
        $user->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('Login')->with('status', 'Username and Password have been updated!');
    }
}
