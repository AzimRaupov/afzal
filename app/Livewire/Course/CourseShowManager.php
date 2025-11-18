<?php

namespace App\Livewire\Course;

use App\Models\Course;
use App\Models\Rating;
use Livewire\Component;

class CourseShowManager extends Component
{
    public $course;
    public $name;
    public $comment;
    public $rating;
    public $lcourses;
    public $selectC;
    public function mount($id)
    {
        $this->lcourses=Course::select('name')->get();

        $this->loadCourse($id);
    }
    public function resetForm()
    {
        $this->name = '';
        $this->comment = '';
        $this->rating = null;

    }
    public function loadCourse($id)
    {
        $this->course = Course::query()->with(['teacher','ratings','topics'])->where('id', $id)->first();
       $this->selectC=$this->course->name;
    }
    public function addComment()
    {
        $ratings=Rating::all();
        $sum=$this->rating;
        foreach($ratings as $rating){
            $sum+=$rating->rating;
        }
   $sum=$sum/(count($ratings)+1);
        Course::query()->where('id',$this->course->id)->update(['rating'=>$sum]);
        Rating::query()->create([
            'course_id' => $this->course->id,
            'name' => $this->name,
            'comment' => $this->comment,
            'rating' => $this->rating,
     ]);

        $this->loadCourse($this->course->id);
        $this->resetForm();
    }

    public function render()
    {
        return view('livewire.course.course-show-manager')->layout('layouts.app');
    }
}
