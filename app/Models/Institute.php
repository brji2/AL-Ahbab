<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;
    public function manager(){
        return $this->hasOne(User::class,'manager_id','id');
    }
    public function groups(){
        return $this->hasMany(Group::class);
    }
}
