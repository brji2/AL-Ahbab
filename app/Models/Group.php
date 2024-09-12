<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public function teacher(){
        return $this->hasOne(User::class,'teacher_id','id');
    }

    public function institute(){
        return $this->belongsTo(Institute::class);
    }
    public function materials(){
        return $this->belongsToMany(Material::class,'group_material');
    }
}
