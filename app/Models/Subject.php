<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }


    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
    public function studentClasses()
    {
        return $this->hasMany(StudentClass::class, 'studentClass_subject');
    }
}
