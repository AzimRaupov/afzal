<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'teacher_id',
        'info',
        'price',
        'image',
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function skills() {
        return $this->hasMany(SkillCourse::class, 'course_id');
    }
    public function ratings() {
        return $this->hasMany(Rating::class, 'course_id');
    }
}
