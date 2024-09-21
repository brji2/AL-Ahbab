<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tester extends Model
{
    use HasFactory;

    protected $fillable = ['institute_id'];
    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
