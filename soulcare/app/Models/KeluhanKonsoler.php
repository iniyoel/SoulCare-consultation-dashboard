<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluhanKonsoler extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan nama default Laravel
    protected $table = 'keluhan_konselors';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'tanggal_konseling',
        'jenis_masalah',
        'deskripsi_masalah',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
