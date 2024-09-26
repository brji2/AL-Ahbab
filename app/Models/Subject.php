<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

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
    public function groups()
    {
        return $this->hasMany(Group::class, 'group_subject');
    }
}
