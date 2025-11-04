<div class="p-6">

    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title">Курсы</h1>
            </div>
        </div>
    </div>

    {{-- Сообщение об успехе --}}
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    {{-- Форма добавления / редактирования курса --}}
    <div class="card mb-5">
        <div class="card-header">
            <h5 class="card-title mb-0">
                {{ $isEditing ? 'Редактировать курс' : 'Добавить новый курс' }}
            </h5>
        </div>
        <div class="card-body">

            <form wire:submit.prevent="save" wire:key="create-course-form">
                <div class="mb-3">
                    <label class="form-label">Название курса</label>
                    <input type="text" wire:model="name" class="form-control">
                    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Преподаватель</label>
                    <select wire:model="teacher_id" class="form-select">
                        <option value="">— Выберите преподавателя —</option>
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                    @error('teacher_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Описание курса</label>
                    <textarea wire:model="info" class="form-control"></textarea>
                    @error('info') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Цена</label>
                    <input type="number" wire:model="price" class="form-control">
                    @error('price') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Изображение</label>
                    <input type="file" wire:model="newImage" class="form-control">
                    @if ($image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/'.$image) }}" alt="Image" width="120" class="rounded">
                        </div>
                    @endif
                    @error('newImage') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label">Навыки</label>

                    @foreach($skills as $index => $skill)
                        <div class="d-flex align-items-center mb-2">
                            <input
                                type="text"
                                wire:model="skills.{{ $index }}"
                                class="form-control me-2"
                                placeholder="Введите навык"
                            >
                            <button type="button" wire:click="removeSkill({{ $index }})" class="btn btn-outline-danger btn-sm">
                                <i class="bi-x"></i>
                            </button>
                        </div>
                    @endforeach

                    <button type="button" wire:click="addSkill" class="btn btn-outline-primary btn-sm">
                        <i class="bi-plus-circle me-1"></i> Добавить навык
                    </button>
                </div>


                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        {{ $isEditing ? 'Обновить' : 'Добавить' }}
                    </button>

                    @if ($isEditing)
                        <button type="button" wire:click="resetForm" class="btn btn-secondary">
                            Отмена
                        </button>
                    @endif
                </div>
            </form>
        </div>
    </div>

    {{-- Таблица курсов --}}
    <h4 class="mb-3">Список курсов</h4>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Преподаватель</th>
                    <th>Цена</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->teacher->name }}</td>
                        <td>{{ $course->price }} см</td>
                        <td>
                            <button wire:click="edit({{ $course->id }})" class="btn btn-sm btn-warning">Изменить</button>
                            <button wire:click="delete({{ $course->id }})" class="btn btn-sm btn-danger">Удалить</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Курсы пока не добавлены</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
