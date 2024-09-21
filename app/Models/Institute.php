<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;
    public function manager()
    {
        return $this->hasOne(Manager::class);
    }
    public function studentClasses()
    {
        return $this->hasMany(StudentClass::class);
    }
}
