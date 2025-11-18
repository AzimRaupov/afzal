<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'info',
        'phone',
        'photo'
    ];

    public function courses(){
        return $this->hasMany(Course::class);
    }

    public function reviews(){
        return $this->hasMany(TeacherReview::class);
    }
}
