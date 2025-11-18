<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\CourseCategory;
use App\Models\CourseTopic;
use App\Models\SkillCourse;
use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Course;

class CoursesManager extends Component
{
    use WithFileUploads;

    public $courses;
    public $name;
    public $skills = [];

    public $teachers;
    public $teacher_id;
    public $info;
    public $price;
    public $image;
    public $newImage;
    public $selectCategory=[];
    public $categories;
    public $topics=[];
    public $courseId;
    public $isEditing = false;

    protected $rules = [
        'name'               => 'required|string|max:255',
        'teacher_id'         => 'required|integer|exists:teachers,id',
        'info'               => 'required|string|min:5',
        'price'              => 'required|integer|min:0',
        'newImage'           => 'nullable|image|max:2048',

    ];

    public function mount()
    {
        $this->teachers = Teacher::all();
        $this->categories = Category::all();
        $this->loadCourses();
    }

    public function loadCourses()
    {
        $this->courses = Course::latest()->with('teacher')->get();
    }
    public function addSkill()
    {
        $this->skills[] = '';
    }
    public function addTopic()
    {
        $this->topics[] = '';

    }
    public function removeTopic($index){
        unset($this->topics[$index]);
        $this->topics = array_values($this->topics);
    }
    public function removeSkill($index)
    {
        unset($this->skills[$index]);
        $this->skills = array_values($this->skills);
    }
    public function resetForm()
    {
        $this->name = '';
        $this->teacher_id = '';
        $this->info = '';
        $this->price = '';
        $this->newImage = null;
        $this->image = null;
        $this->courseId = null;
        $this->isEditing = false;
        $this->topics = [];

    }

    public function save()
    {
        $this->validate();

        $imagePath = $this->image;

        if ($this->newImage) {
            $imagePath = $this->newImage->store('courses', 'public');
        }

        if ($this->isEditing) {

            $course = Course::findOrFail($this->courseId);

            $course->update([
                'name' => $this->name,
                'teacher_id' => $this->teacher_id,
                'info' => $this->info,
                'price' => $this->price,
                'image' => $imagePath,
            ]);

            // УДАЛЯЕМ старые категории
            CourseCategory::where('course_id', $course->id)->delete();

        } else {

            $course = Course::create([
                'name' => $this->name,
                'teacher_id' => $this->teacher_id,
                'info' => $this->info,
                'price' => $this->price,
                'image' => $imagePath,
            ]);
        }

        CourseTopic::where('course_id', $course->id)->delete();

        foreach ($this->topics as $topic) {
            if (!empty($topic)) {
                CourseTopic::create([
                    'topic' => $topic,
                    'course_id' => $course->id,
                ]);
            }
        }

        SkillCourse::where('course_id', $course->id)->delete();
        foreach ($this->skills as $skill) {
            if (!empty($skill)) {
                SkillCourse::create([
                    'skill' => $skill,
                    'course_id' => $course->id,
                ]);
            }
        }

        foreach ($this->selectCategory as $categoryId) {
            CourseCategory::create([
                'course_id' => $course->id,
                'category_id' => $categoryId,
            ]);
        }

        session()->flash('message', $this->isEditing ? 'Курс обновлён!' : 'Курс добавлен!');

        $this->resetForm();
        $this->loadCourses();
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);

        $this->courseId = $course->id;
        $this->name = $course->name;
        $this->teacher_id = $course->teacher_id;
        $this->info = $course->info;
        $this->price = $course->price;
        $this->image = $course->image;
        $this->isEditing = true;

        $this->topics = CourseTopic::where('course_id', $course->id)
            ->pluck('topic')
            ->toArray();

        $this->selectCategory = CourseCategory::where('course_id', $course->id)
            ->pluck('category_id')
            ->toArray();

        $this->skills = SkillCourse::where('course_id', $course->id)
            ->pluck('skill')
            ->toArray();
    }


    public function delete($id)
    {
        Course::findOrFail($id)->delete();
        session()->flash('message', 'Курс удалён!');
        $this->loadCourses();
    }

    public function render()
    {
        return view('livewire.admin.courses-manager')
            ->layout('layouts.admin');
    }
}
