<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable=['course_id','name','rating','comment'];


    public function course(){
        return $this->belongsTo(Course::class);
    }


}
