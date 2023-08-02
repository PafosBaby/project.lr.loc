@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{ $user->name . '(ред.)' }}</h1>



    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf @method('put')
        <div class="form-group mb-3">
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control"
                value="{{ old('email', $user->email) }}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        @if ($roles->count())
            <h4>Роли</h4>
            <div class="form-group mb-3">
                @foreach ($roles as $role)
                    <div class="form-check" @if ($user->id == auth()->user()->id && $user->hasRole('admin') && $role->name == 'admin') style="display: none" @endif>
                        <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->name }}"
                            id="{{ 'role_' . $role->id }}" @if ($user->hasRole($role->name)) checked @endif>
                        <label class="form-check-label" for="{{ 'role_' . $role->id }}">
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        @endif
        @if ($permissions->count())
            <h4>Права</h4>
            <div class="form-group mb-3">
                @foreach ($permissions as $permission)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="permissions[]"
                            value="{{ $permission->name }}" id="{{ 'permission_' . $permission->id }}"
                            @if ($user->hasPermissionTo($permission->name)) checked @endif>
                        <label class="form-check-label" for="{{ 'permission_' . $permission->id }}">
                            {{ $permission->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        @endif
        <button class="btn btn-primary">Изменить</button>
    </form>
@endsection
