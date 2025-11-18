<div class="p-6">

    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title">Достижения</h1>
            </div>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="card mb-5">
        <div class="card-header">
            <h5 class="card-title mb-0">
                {{ $isEditing ? 'Редактировать' : 'Добавить' }}
            </h5>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="save">

                <div class="mb-3">
                    <label class="form-label">Имя ученика / учителя</label>
                    <input type="text" wire:model="name" class="form-control">
                    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Название Олимпиады</label>
                    <input type="text" wire:model="olymp_name" class="form-control">
                    @error('olymp_name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Описание</label>
                    <textarea class="form-control" wire:model="description"></textarea>
                    @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Место (Place)</label>
                    <input type="text" wire:model="place" class="form-control">
                    @error('place') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Фото</label>
                    <input type="file" wire:model="newPhoto" class="form-control">

                    @if ($photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $photo) }}" alt="Image" width="120" class="rounded">
                        </div>
                    @endif

                    @error('newPhoto')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
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

    <h4 class="mb-3">Список Достижений</h4>

    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                <tr>
                    <th>Имя</th>
                    <th>Олимпиада</th>
                    <th>Описание</th>
                    <th>Действия</th>
                </tr>
                </thead>

                <tbody>
                @forelse ($achievements as $ach)
                    <tr>
                        <td>{{ $ach->name }}</td>
                        <td>{{ $ach->olymp_name }}</td>
                        <td>{{ $ach->description }}</td>
                        <td>
                            <button wire:click="edit({{ $ach->id }})" class="btn btn-warning btn-sm">Изменить</button>
                            <button wire:click="delete({{ $ach->id }})" class="btn btn-danger btn-sm">Удалить</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Достижений пока нет</td>
                    </tr>
                @endforelse
                </tbody>

            </table>
        </div>
    </div>

</div>
