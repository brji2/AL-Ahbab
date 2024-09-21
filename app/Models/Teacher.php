<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public function studenClass()
    {
        return $this->hasOne(StudentClass::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }
}
