<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Course;
use App\Models\Rating;
use App\Models\Teacher;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcome(){
        $teachers = Teacher::with('reviews','courses')->get();
        $lcourses = Course::all();
        $reviews=Rating::with('course')->get();
        $achievements=Achievement::all();
        return view('welcome',compact('teachers','lcourses','reviews','achievements'));
    }
}
