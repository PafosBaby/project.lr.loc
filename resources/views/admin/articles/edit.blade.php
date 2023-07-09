@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{$article->title.' (РЕД.)'}}</h1>



    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="form-group mb-3">
            <label for="category_id">Категория</label>

            <select name="category_id" id="category_id" class="form-select">
                <option value="">Выберите категорию</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" @if ($cat->id == old('category_id', $article->category_id)) selected @endif>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>

            <div class="form-group mb-3">
                <label for="title">Название</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $article->title) }}">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="short_description">Короткое описание</label>
                <textarea name="short_description" id="short_description" class="form-control">{{ old('short_description', $article->short_description) }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="description">Описание</label>
                <textarea name="description" id="description" class="form-control">{{ old('description', $article->description) }}</textarea>
            </div>


            <div class="form-group mb-3">
                <label for="title">Изображение статьи</label>
                <input type="file" id="image_path" name="image_path" class="form-control">

                @if($article->image_path)
                <div class="my-3" style="max-width:200px">
                    <img src="{{$article->getImage()}}" alt="" class="img-fluid" >
                    <a href="{{route('admin.articles.remove-img', $article)}}">Удалить изображение</a>
                </div>
                @endif
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                    @if (old('is_active', $article->is_active) == 1) checked @endif>
                <label class="form-check-label" for="is_active">
                    Показать статью
                </label>
            </div>
        </div>
        <button class="btn btn-primary">Изменить</button>
    </form>
@endsection
