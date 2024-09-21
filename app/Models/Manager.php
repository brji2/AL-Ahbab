<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function institute()
    {
        return $this->hasOne(Institute::class);
    }
}
