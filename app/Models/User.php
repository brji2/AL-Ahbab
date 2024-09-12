<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function examsAsTester(){
        return $this->hasMany(Exam::class,'tester_id','id');
    }

    public function examsAsStudent(){
        return $this->hasMany(Exam::class,'student_id','id');
    }

    public function regionAsManager(){
        return $this->belongsTo(Region::class,'manager_id','id');
    }

    public function instituteAsManager(){
        return $this->hasOne(Institute::class,'manager_id','id');
    }

    public function gruopAsTeacher(){
        return $this->hasOne(Group::class,'teacher_id','id');
    }

    
}
