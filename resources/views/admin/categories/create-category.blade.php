@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Новый Жанр</h1>



    <form action="{{ route('store.category') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Жанр</label>
            <input type="text" id="name" name="name" class="form-control">
            @error('name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button class="btn btn-primary">Добавить Жанр</button>
    </form>
@endsection
