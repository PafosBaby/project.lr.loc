@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{ $user->name . '(ред.)' }}</h1>



    <form action="{{ route('admin.permission.store') }}" method="POST">
        @csrf
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
            <div class="form-check mb-3">
                @foreach ($roles as $role)
                    <input class="form-check-input" type="checkbox" value="{{ $role->name }}" id="{{'role_'.$role->id}}"
                        checked>
                    <label class="form-check-label" for="{{'role_'.$role->id}}" >
                        {{ $role->name }}
                    </label>
                @endforeach
            </div>
        @endif
        <button class="btn btn-primary">{{ __('Add a Genre') }}</button>
    </form>
@endsection
