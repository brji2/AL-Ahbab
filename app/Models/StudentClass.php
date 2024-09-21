<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }


    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }
    public function materials()
    {
        return $this->belongsToMany(Material::class, 'studentClass_material');
    }
}
