<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Teacher;
use Livewire\Component;

class TeacherShowManager extends Component
{

    public $teacher;
    public $lcourses;

    public function mount($id){

        $this->teacher=Teacher::with('courses','reviews')->find($id);
        $this->lcourses=$this->teacher->courses;


    }
    public function save(){
        dd($this->all());
    }
    public function render()
    {
        return view('livewire.teacher-show-manager')->layout('layouts.app');
    }
}
