<?php

namespace App\Livewire\Admin;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Course;

class TeacherManager extends Component
{
    use WithFileUploads;

    public $teachers;
    public $name;
    public $info;
    public $photo;
    public $phone;
    public $teacher_id;
    public $newPhoto;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'info' => 'required|string',

    ];

    public function mount()
    {
        $this->loadTeachers();
    }

    public function loadTeachers()
    {
        $this->teachers = Teacher::latest()->get();
    }

    public function resetForm()
    {
        $this->name = '';
        $this->info = '';
        $this->newPhoto= null;
        $this->photo = null;
        $this->teacher_id = null;
        $this->isEditing = false;
        $this->phone='';
    }

    public function save()
    {
        $this->validate();

        $photoPath = $this->photo;

        if ($this->newPhoto) {
            $photoPath = $this->newPhoto->store('teachers', 'public');
        }

        if ($this->isEditing) {
            $course = Teacher::findOrFail($this->teacher_id);
            $course->update([
                'name' => $this->name,
                'info' => $this->info,
                'photo' => $photoPath,
                'phone'=> $this->phone
            ]);
            session()->flash('message', 'Курс успешно обновлён!');
        } else {
            Teacher::create([
                'name' => $this->name,
                'info' => $this->info,
                'phone' => $this->phone,
                'photo' => $photoPath,
            ]);
            session()->flash('message', 'Курс добавлен!');
        }

        $this->resetForm();
        $this->loadTeachers();
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        $this->teacher_id = $id;
        $this->name = $teacher->name;
        $this->info = $teacher->info;
        $this->photo = $teacher->photo;
        $this->phone = $teacher->phone;

        $this->isEditing = true;
    }

    public function delete($id)
    {
        Teacher::findOrFail($id)->delete();
        session()->flash('message', 'Курс удалён!');
        $this->loadTeachers();
    }

    public function render()
    {
        return view('livewire.admin.teacher-manager')
            ->layout('layouts.admin');
    }
}

