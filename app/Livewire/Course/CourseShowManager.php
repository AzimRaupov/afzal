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

    public function mount($id)
    {
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
        $this->course = Course::query()->with(['teacher','ratings'])->first();
    }
    public function addComment()
    {

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
