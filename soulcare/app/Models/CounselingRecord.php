<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounselingRecord extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'student_id',
        'counselor_id',
        'date',
        'issue_type',
        'issue_description',
        'referral',
    ];

public function student()
{
    return $this->belongsTo(Student::class);
}

public function counselor()
{
    return $this->belongsTo(User::class, 'counselor_id');
}

}
