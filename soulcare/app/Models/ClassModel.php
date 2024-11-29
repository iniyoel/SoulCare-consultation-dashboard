<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    // Nama tabel
    protected $table = 'classes';

    // Kolom yang dapat diisi
    protected $fillable = [
        'name',        // Nama kelas (A, B, C, dll.)
        'grade_level', // Tingkat kelas (7, 8, 9)
    ];

    public function users(){
        return $this->hasMany(User::class, 'class_id');
    }

    // Relasi ke tabel students
    public function students()
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }    

    // Relasi ke tabel users (konselor sebaya)
    public function counselor()
    {
        return $this->hasOne(User::class, 'class_id', 'id');
    }
}
