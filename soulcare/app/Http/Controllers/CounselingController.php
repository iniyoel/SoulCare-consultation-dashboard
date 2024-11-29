<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\CounselingRecord;
use App\Models\Student;
use App\Models\User;
use App\Models\KeluhanKonsoler;
use App\Models\Materi;

class CounselingController extends Controller
{
    public function showJurnalKonseling(){
        $user = Auth::user();

        // Pastikan user adalah Konselor Sebaya dan memiliki kelas
        if ($user->role === 'Konselor Sebaya' && $user->class) {
            $students = $user->class->students; // Mengambil siswa di kelas konselor
            $className = $user->class->grade_level . $user->class->name; // Kombinasi grade dan nama kelas
        } else {
            $students = collect(); // Kosong jika tidak ada kelas
            $className = 'Tidak Ada Kelas';
        }

        return view('JurnalKonseling',  compact('user', 'students', 'className'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'date' => 'required|date',
            'issue_type' => 'required|string',
            'issue_description' => 'required|string',
            'referral' => 'required|string',
        ]);

        CounselingRecord::create([
            'student_id' => $request->student_id,
            'counselor_id' => Auth::id(),  // ID konselor yang login
            'date' => $request->date,
            'issue_type' => $request->issue_type,
            'issue_description' => $request->issue_description,
            'referral' => $request->referral,
        ]);

        return redirect()->route('riwayatKonseling')->with('success', 'Data berhasil disimpan');
    }

    // Menampilkan Riwayat Konseling
    public function showRiwayatKonseling(){
        $user = Auth::user();

        // Ambil data riwayat konseling berdasarkan konselor yang sedang login
        $counselingRecords = CounselingRecord::where('counselor_id', $user->id)->get();
        // data user/konselor
        $class = $user->class;
        $className = $user->class->grade_level . $user->class->name;

        return view('riwayatKonseling', compact('counselingRecords', 'user', 'className'));
    }

    public function showDetailProblem($id){
        $user = Auth::user();
        $class = $user->class;
        $className = $user->class->grade_level . $user->class->name;

        $record = CounselingRecord::find($id);
        $counselingRecords = CounselingRecord::where('counselor_id', $user->id)->get();

        return view('detail-riwayatKonseling', compact('user', 'className', 'counselingRecords', 'record'));
    }

    public function showMateri(){
        $user = Auth::user();
        $class = $user->class;
        $className = $user->class->grade_level . $user->class->name;
        $materis = Materi::all();

        return view('materiKonseling', compact('user', 'className', 'materis'));
    }

    public function showKeluhanKonselor(){
        $user = Auth::user();
        $class = $user->class;
        $className = $user->class->grade_level . $user->class->name;

        return view('keluhanKonselor', compact('user', 'className'));
    }

    public function storeComplain(Request $request){
        // Validasi data yang dikirimkan
        $request->validate([
            'tanggal_konseling' => 'required|date',
            'jenis_masalah' => 'required|string|max:255',
            'deskripsi_masalah' => 'required|string',
        ]);

        // Menyimpan keluhan ke dalam database
        KeluhanKonsoler::create([
            'tanggal_konseling' => $request->tanggal_konseling,
            'jenis_masalah' => $request->jenis_masalah,
            'deskripsi_masalah' => $request->deskripsi_masalah,
            'user_id' => Auth::id()
        ]);

        // Redirect atau response sukses
        return redirect()->back()->with('success', 'Keluhan berhasil disimpan');
    }



}
