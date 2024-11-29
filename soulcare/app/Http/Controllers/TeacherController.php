<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\CounselingRecord;
use App\Models\Student;
use App\Models\User;
use App\Models\Materi;
use App\Models\KeluhanKonsoler;
use Carbon\Carbon;

class TeacherController extends Controller
{      
    public function showData(Request $request)
    {
        $user = Auth::user();

        if($user->role === 'Guru BK') {
            $name= $user->name;
        }

        $year = $request->input('year', Carbon::now()->year); // Ambil tahun dari request atau default ke tahun sekarang
        $month = $request->input('month', Carbon::now()->format('m')); // Ambil bulan dari request atau default ke bulan sekarang
    
        // Query data berdasarkan bulan dan tahun
        $keluhan =  CounselingRecord::whereYear('date', $year)
                    ->whereMonth('date', $month)
                    ->get();
    
        // Menghitung jumlah masing-masing jenis masalah
        $countByIssueType = $keluhan->groupBy('issue_type')->map->count();
    
        // Data untuk pie chart
        $labels = ['Sosial', 'Karir', 'Pribadi', 'Belajar', 'Lainnya'];
        $data = [
            $countByIssueType->get('Social', 0),
            $countByIssueType->get('Karir', 0),
            $countByIssueType->get('Pribadi', 0),
            $countByIssueType->get('Belajar', 0),
            $countByIssueType->get('Lainnya', 0),
        ];

        return view('RekapData', compact('labels', 'data', 'year', 'month', 'user'));
    }

    public function showClass7(Request $request)
    {
        $user = Auth::user();

        if($user->role === 'Guru BK') {
            $name= $user->name;
        }

        $year = $request->input('year', Carbon::now()->year); // Ambil tahun dari request atau default ke tahun sekarang
        $month = $request->input('month', Carbon::now()->format('m')); // Ambil bulan dari request atau default ke bulan sekarang
        $kelas = $request->input('kelas');
    
        // Query data berdasarkan bulan dan tahun
        $keluhan = CounselingRecord::whereHas('student', function ($query) {
            $query->where('class_id', [1, 9]); // Filter berdasarkan kelas 7
        })
        ->whereYear('date', $year)
        ->whereMonth('date', $month)
        ->get();
    
        // Menghitung jumlah masing-masing jenis masalah
        $countByIssueType = $keluhan->groupBy('issue_type')->map->count();
    
        // Data untuk pie chart
        $labels = ['Sosial', 'Karir', 'Pribadi', 'Belajar', 'Lainnya'];
        $data = [
            $countByIssueType->get('Social', 0),
            $countByIssueType->get('Karir', 0),
            $countByIssueType->get('Pribadi', 0),
            $countByIssueType->get('Belajar', 0),
            $countByIssueType->get('Lainnya', 0),
        ];

        return view('RekapDataKelas7', compact('labels', 'data', 'year', 'month', 'user', 'keluhan', 'kelas'));
    }

    public function showClass8(Request $request)
    {
        $user = Auth::user();

        if($user->role === 'Guru BK') {
            $name= $user->name;
        }

        $year = $request->input('year', Carbon::now()->year); // Ambil tahun dari request atau default ke tahun sekarang
        $month = $request->input('month', Carbon::now()->format('m')); // Ambil bulan dari request atau default ke bulan sekarang
        $kelas = $request->input('kelas');
    
        // Query data berdasarkan bulan dan tahun
        $keluhan = CounselingRecord::whereHas('student', function ($query) {
            $query->where('class_id', [10, 18]); // Filter berdasarkan kelas 8
        })
        ->whereYear('date', $year)
        ->whereMonth('date', $month)
        ->get();
    
        // Menghitung jumlah masing-masing jenis masalah
        $countByIssueType = $keluhan->groupBy('issue_type')->map->count();
    
        // Data untuk pie chart
        $labels = ['Sosial', 'Karir', 'Pribadi', 'Belajar', 'Lainnya'];
        $data = [
            $countByIssueType->get('Social', 0),
            $countByIssueType->get('Karir', 0),
            $countByIssueType->get('Pribadi', 0),
            $countByIssueType->get('Belajar', 0),
            $countByIssueType->get('Lainnya', 0),
        ];

        return view('RekapDataKelas8', compact('labels', 'data', 'year', 'month', 'user', 'keluhan', 'kelas'));
    }

    public function showClass9(Request $request)
    {
        $user = Auth::user();

        if($user->role === 'Guru BK') {
            $name= $user->name;
        }

        $year = $request->input('year', Carbon::now()->year); // Ambil tahun dari request atau default ke tahun sekarang
        $month = $request->input('month', Carbon::now()->format('m')); // Ambil bulan dari request atau default ke bulan sekarang
        $kelas = $request->input('kelas');
    
        // Query data berdasarkan bulan dan tahun
        $keluhan = CounselingRecord::whereHas('student', function ($query) {
            $query->where('class_id', [19, 25]); // Filter berdasarkan kelas 9
        })
        ->whereYear('date', $year)
        ->whereMonth('date', $month)
        ->get();
    
        // Menghitung jumlah masing-masing jenis masalah
        $countByIssueType = $keluhan->groupBy('issue_type')->map->count();
    
        // Data untuk pie chart
        $labels = ['Sosial', 'Karir', 'Pribadi', 'Belajar', 'Lainnya'];
        $data = [
            $countByIssueType->get('Social', 0),
            $countByIssueType->get('Karir', 0),
            $countByIssueType->get('Pribadi', 0),
            $countByIssueType->get('Belajar', 0),
            $countByIssueType->get('Lainnya', 0),
        ];

        return view('RekapDataKelas9', compact('labels', 'data', 'year', 'month', 'user', 'keluhan', 'kelas'));
    }

    public function showProblem($id){
        $user = Auth::user();
        $keluhan = CounselingRecord::findOrFail($id); // Ambil data berdasarkan ID

        return view('DetailKonselingBK', compact('user', 'keluhan'));
    }

    public function showFormMateri(Request $request){
        $user = Auth::user();

        return view('UploadMateri', compact('user' ));
    }

    public function storeMateri(Request $request){
        // Validasi input
        $request->validate([
            'judul_materi' => 'required|string|max:255',
            'deskripsi_masalah' => 'required|string',
            'link_materi' => 'required|url',
            'file_upload' => 'required|file|mimes:pdf,doc,docx,ppt,pptx|max:102400', // Maksimal 100MB
        ]);

        // Simpan data materi ke database
        $materi = new Materi();
        $materi->judul_materi = $request->input('judul_materi');
        $materi->deskripsi_masalah = $request->input('deskripsi_masalah');
        $materi->link_materi = $request->input('link_materi');

        // Simpan file jika ada
        if ($request->hasFile('file_upload')) {
            // Menyimpan file ke storage/public
            $filePath = $request->file('file_upload')->store('materi_files', 'public');
            $materi->file_upload = $filePath;  // Simpan path file ke database
        }

        // Simpan materi ke database
        $materi->save();

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->back()->with('success', 'Materi berhasil di-upload');
    }

    public function showMateri(Request $request){
        $user = Auth::user();
        $materis = Materi::all();

        return view('MateriKonselingBK', compact('user', 'materis'));
    }

    public function showKeluhan(Request $request){
        $user = Auth::user();
        $keluhans = KeluhanKonsoler::all();
        $keluhans = KeluhanKonsoler::with('user')->get();

        $masalahCount = $keluhans->groupBy('jenis_masalah')->map->count();

        $labels = $masalahCount->keys();
        $data = $masalahCount->values();

        return view('KeluhanBK', compact('user', 'keluhans', 'labels', 'data'));
    }

}
