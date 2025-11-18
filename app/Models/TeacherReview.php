<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherReview extends Model
{
    protected $fillable=['teacher_id','name','rating','comment'];

}
