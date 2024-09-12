<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    public function region(){
        return $this->belongsTo(Region::class);
    }
    public function exams(){
        return $this->hasMany(Exam::class);
    }
    public function groups(){
        return $this->hasMany(Group::class,'group_material');
    }
}

