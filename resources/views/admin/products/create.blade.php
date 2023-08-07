@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Новый товар</h1>



    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Категория</label>
            <select name="category_id" id="category_id" class="form-select">
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="name">Название</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="description">Описание</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="price">Цена</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="image">Фото</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>


        <button class="btn btn-primary">{{ __('Add') }}</button>
    </form>
@endsection
