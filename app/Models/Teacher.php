<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'person_id', 'institute_id'];

    public function studenClass()
    {
        return $this->hasOne(G::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }
}
