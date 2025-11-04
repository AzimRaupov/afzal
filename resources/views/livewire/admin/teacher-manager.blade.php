<div class="p-6">

    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title">Учителя</h1>
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
                {{ $isEditing ? 'Редактировать' : 'Добавить' }}
            </h5>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="save" wire:key="create-course-form">
                <div class="mb-3">
                    <label class="form-label">Имя</label>
                    <input type="text" wire:model="name" class="form-control">
                    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Информатсия</label>
                    <textarea wire:model="info" class="form-control"></textarea>
                    @error('info') <div class="text-danger">{{ $message }}</div> @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Телефон</label>
                    <input type="text" wire:model="phone" class="form-control" placeholder="+998..." />
                    @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Фото</label>
                    <input type="file" wire:model="newPhoto" class="form-control">
                    @if ($photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/'.$photo) }}" alt="Image" width="120" class="rounded">
                        </div>
                    @endif
                    @error('newPhoto') <div class="text-danger">{{ $message }}</div> @enderror
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
    <h4 class="mb-3">Список Учителов</h4>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                <tr>
                    <th>Имя</th>
                    <th>Информатсия</th>
                    <th>Номер</th>
                    <th>Дествия</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->info }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td>
                            <button wire:click="edit({{ $teacher->id }})" class="btn btn-sm btn-warning">Изменить</button>
                            <button wire:click="delete({{ $teacher->id }})" class="btn btn-sm btn-danger">Удалить</button>
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
