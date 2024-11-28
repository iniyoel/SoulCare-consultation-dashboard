<?php

// app/Models/User.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'login'; // Nama tabel di database
    protected $fillable = ['Email', 'Password', 'Role', 'Kelas', 'Class-id']; // Kolom-kolom yang bisa diisi
    public $timestamps = false; // Jika tabel tidak memiliki kolom created_at dan updated_at
}
