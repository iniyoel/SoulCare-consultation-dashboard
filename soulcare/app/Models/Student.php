<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Nama tabel
    protected $table = 'students';

    // Kolom yang dapat diisi
    protected $fillable = [
        'name',   
        'gender',    
        'class_id',    
    ];

    // Relasi ke tabel classes
    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'class_id', 'id');
    }
    
    public function counselingRecordss(){
        return $this->hasMany(counselingRecord::class);
    }
}
