<?php
// app/Models/Student.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students'; // Nama tabel di database
    protected $fillable = ['nama', 'jenis_kelamin', 'kelas', 'angkatan']; // Kolom tabel
}
