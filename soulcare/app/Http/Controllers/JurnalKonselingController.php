<?php
// app/Http/Controllers/JurnalKonselingController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Model Student untuk tabel students

class JurnalKonselingController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel students
        $students = Student::all();

        // Kirim data ke view
        return view('JurnalKonseling', compact('students'));
    }
}
