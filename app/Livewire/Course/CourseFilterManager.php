<?php

namespace App\Livewire\Course;

use App\Models\Category;
use App\Models\Course;
use App\Models\Rating;
use App\Models\SkillCourse;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class CourseFilterManager extends Component
{
    public $courses;
    public $skills = [];
    public $reviews=[];
    public $lcourses;
    public $categories = [];

    public $selectedSkills = [];
    public $selectedCategories = []; // ← добавлено
    public $courseName;

    public function mount()
    {
        $this->lcourses = Course::select('name')->get();
        $this->reviews = Rating::all();
        $this->categories = Category::all();
        $this->skills = SkillCourse::all();

        $this->courseName = Request::get('courseName', '');
        $skills = Request::get('skills', []);
        $categories = Request::get('categories', []);

        $this->selectedSkills = is_array($skills) ? $skills : explode(',', (string)$skills);
        $this->selectedCategories = is_array($categories) ? $categories : explode(',', (string)$categories);

        $this->selectedSkills = array_map('intval', $this->selectedSkills);
        $this->selectedCategories = array_map('intval', $this->selectedCategories);

        $this->save();
    }

    public function save()
    {
        $courses = Course::with(['teacher', 'skills', 'categories'])
            ->where('name', 'like', '%' . $this->courseName . '%');

        if ($this->selectedSkills) {
            $courses->whereHas('skills', fn($q) =>
            $q->whereIn('skills.id', $this->selectedSkills)
            );
        }

        if ($this->selectedCategories) {
            $courses->whereHas('categories', fn($q) =>
            $q->whereIn('categories.id', $this->selectedCategories)
            );
        }

        $this->courses = $courses->get();
    }

    public function render()
    {
        return view('livewire.course.course-filter-manager')
            ->layout('layouts.app');
    }
}
