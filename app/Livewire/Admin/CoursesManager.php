<?php

namespace App\Livewire\Admin;

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
    public $courseId;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'teacher_id' => 'required|string|max:255',
        'info' => 'required|string',
        'price' => 'required|integer|min:0',
        'newImage' => 'nullable|image|max:2048',
    ];

    public function mount()
    {
        $this->teachers = Teacher::all();
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
    }

    public function save()
    {
        $this->validate();

        $imagePath = $this->image;

        if ($this->newImage) {
            $imagePath = $this->newImage->store('courses', 'public');
        }

        if ($this->isEditing) {
            // обновляем курс
            $course = Course::findOrFail($this->courseId);
            $course->update([
                'name' => $this->name,
                'teacher_id' => $this->teacher_id,
                'info' => $this->info,
                'price' => $this->price,
                'image' => $imagePath,
            ]);

            // сначала удалим старые навыки (если нужны новые)
            SkillCourse::where('course_id', $course->id)->delete();

            // добавим новые
            foreach ($this->skills as $skill) {
                if (!empty($skill)) {
                    SkillCourse::create([
                        'skill' => $skill,
                        'course_id' => $course->id,
                    ]);
                }
            }

            session()->flash('message', 'Курс успешно обновлён!');
        } else {
            // создаём новый курс
            $course = Course::create([
                'name' => $this->name,
                'teacher_id' => $this->teacher_id,
                'info' => $this->info,
                'price' => $this->price,
                'image' => $imagePath,
            ]);

            // создаём связанные навыки
            foreach ($this->skills as $skill) {
                if (!empty($skill)) {
                    SkillCourse::create([
                        'skill' => $skill,
                        'course_id' => $course->id,
                    ]);
                }
            }

            session()->flash('message', 'Курс добавлен!');
        }

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
