<?php

namespace App\Livewire;

use App\Models\SkillCourse;
use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Course;

class CourseLivewire extends Component
{
    public $courses;
    public $skills;
    public $teachers;

    public $search = '';           // Поиск по названию
    public $selectedSkills = [];   // Массив выбранных навыков

    public function mount()
    {
        $this->teachers = Teacher::all();
        $this->loadCourses();
    }

    public function updatedSearch()
    {
        $this->loadCourses();
    }

    public function updatedSelectedSkills()
    {
        $this->loadCourses();
    }

    public function loadCourses()
    {
        dd($this->all());
        $query = Course::with('teacher', 'skills')->latest();

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }


        if (!empty($this->selectedSkills)) {
            $query->whereHas('skills', function($q){
                $q->whereIn('id', $this->selectedSkills);
            });
        }

        $this->courses = $query->get();
        $this->skills = SkillCourse::all();
    }

    public function render(){
        return view('livewire.course.course-manager')->layout('layouts.app');
    }
}

