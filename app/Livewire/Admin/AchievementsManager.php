<?php

namespace App\Livewire\Admin;

use App\Models\Achievement;
use Livewire\Component;
use Livewire\WithFileUploads;

class AchievementsManager extends Component
{
    use WithFileUploads;

    public $name, $olymp_name, $description, $place;
    public $photo;        // текущее фото
    public $newPhoto;     // новое загружаемое
    public $newId;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'olymp_name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'place' => 'required|string|max:255',
        'newPhoto' => 'nullable|image|max:2048',
    ];

    public function save()
    {
        $this->validate();

        // Загружаем новое фото
        $photoPath = $this->photo;

        if ($this->newPhoto) {
            // удалить старое
            if ($this->photo && file_exists(public_path('storage/' . $this->photo))) {
                unlink(public_path('storage/' . $this->photo));
            }

            $photoPath = $this->newPhoto->store('achievements', 'public');
        }

        if ($this->isEditing) {
            Achievement::find($this->newId)->update([
                'name' => $this->name,
                'olymp_name' => $this->olymp_name,
                'description' => $this->description,
                'place' => $this->place,
                'photo' => $photoPath,
            ]);

            session()->flash('message', 'Данные успешно обновлены!');
        } else {
            Achievement::create([
                'name' => $this->name,
                'olymp_name' => $this->olymp_name,
                'description' => $this->description,
                'place' => $this->place,
                'photo' => $photoPath,
            ]);

            session()->flash('message', 'Достижение добавлено!');
        }

        $this->resetForm();
    }

    public function edit($id)
    {
        $ach = Achievement::find($id);

        $this->newId = $ach->id;
        $this->name = $ach->name;
        $this->olymp_name = $ach->olymp_name;
        $this->description = $ach->description;
        $this->place = $ach->place;
        $this->photo = $ach->photo;

        $this->isEditing = true;
    }

    public function delete($id)
    {
        $ach = Achievement::find($id);

        if ($ach->photo && file_exists(public_path('storage/' . $ach->photo))) {
            unlink(public_path('storage/' . $ach->photo));
        }

        $ach->delete();

        session()->flash('message', 'Удалено!');
    }

    public function resetForm()
    {
        $this->reset(['name', 'olymp_name', 'description', 'place', 'photo', 'newPhoto', 'newId']);
        $this->isEditing = false;
    }

    public function render()
    {
        return view('livewire.admin.achievements-manager', [
            'achievements' => Achievement::latest()->get(),
        ])->layout('layouts.admin');
    }
}
