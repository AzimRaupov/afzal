<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable=['teachers_id','name','olymp_name','description','place','photo'];
}
