@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{ $category->name }} {{__("editing")}}</h1>

    <form action="{{route('update.category', $category )}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group mb-3">
            <label for="name">{{__("Genre")}}</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button class="btn btn-primary">{{__("To change")}}</button>
    </form>
@endsection
