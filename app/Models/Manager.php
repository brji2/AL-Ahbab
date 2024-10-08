<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = ['person_id'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
    public function institute()
    {
        return $this->belongsToMany(Institute::class);
    }
}
