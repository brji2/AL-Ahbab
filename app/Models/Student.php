<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function subject()
    {
        return $this->hasOne(Subject::class);
    }
    public function studentClass()
    {
        return $this->belongsTo(StudentClass::class);
    }
}
