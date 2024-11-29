<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail; // Jika fitur verifikasi email diperlukan

class User extends Authenticatable implements MustVerifyEmail // Tambahkan ini jika verifikasi email diperlukan
{
    use Notifiable;

    // Nama tabel (jika tidak sesuai konvensi Laravel)
    protected $table = 'users';

    // Kolom yang dapat diisi
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Guru BK atau Konselor Sebaya
        'class_id', // ID kelas (hanya untuk Konselor Sebaya)
    ];

    // Kolom yang disembunyikan
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Kolom yang otomatis di-cast
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'class_id', 'id');
    }    

    public function counselingRecords()
    {
        return $this->hasMany(CounselingRecord::class, 'counselor_id', 'id');
    }

    public function scopeKonselorSebaya($query)
    {
        return $query->where('role', 'Konselor Sebaya');
    }

    /**
     * Scope untuk mendapatkan Guru BK saja
     */
    public function scopeGuruBK($query)
    {
        return $query->where('role', 'Guru BK');
    }
}
