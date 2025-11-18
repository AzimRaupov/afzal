<?php

namespace App\Livewire;

use App\Models\SkillCourse;
use App\Models\Teacher;
use App\Models\Course;
use Livewire\Component;

class CourseLivewire extends Component
{
    public $courses;
    public $skills;
    public $teachers;

    public $search = '';
    public $selectedSkills = [];

    public function mount()
    {
        $this->teachers = Teacher::all();
        $this->skills = SkillCourse::all();
        $this->loadCourses();
    }
    public function search(){
        dd($this->all());
    }
    public function updatedSearch()
    {

        $this->loadCourses();
    }

    public function updatedSelectedSkills()
    {
        $this->loadCourses();
    }

    public function updated($propertyName)
    {
      dd($propertyName, $this->$propertyName);
    }

    public function loadCourses()
    {
        $query = Course::with(['teacher', 'skills'])->latest();

        if (!empty($this->search)) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if (!empty($this->selectedSkills)) {
            $query->whereHas('skills', function ($q) {
                $q->whereIn('id', $this->selectedSkills);
            });
        }

        $this->courses = $query->get();
    }

    public function render()
    {
        return view('livewire.course.course-livewire')
            ->layout('layouts.app');
    }
}
