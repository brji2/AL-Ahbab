<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    public function tester(){
        return $this->belongsTo(User::class,'tester_id','id');
    }

    public function student(){
        return $this->belongsTo(User::class,'student_id','id');
    }

    public function material(){
        return $this->belongsTo(Material::class);
    }

    
}
