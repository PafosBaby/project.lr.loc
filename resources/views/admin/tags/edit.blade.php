@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{ $tag->name }} {{__("editing")}}</h1>

    <form action="{{ route('tags.update', $tag) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group mb-3">
            <label for="name">{{__("Tags")}}</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $tag->name }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button class="btn btn-primary">{{__("To change")}}</button>
    </form>
@endsection
