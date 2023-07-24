@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{__("New Article")}}</h1>



    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="category_id">{{__("Category")}}</label>

            <select name="category_id" id="category_id" class="form-select">
                <option value="">{{__("Select a category")}}</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" @if ($cat->id == old('category_id')) selected @endif>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>


            <div class="form-group mb-3">
                <label for="title">{{__("Title")}}</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="short_description">{{__("Short description")}}</label>
                <textarea name="short_description" id="short_description" class="form-control">{{ old('short_description') }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="description">{{__("Description")}}</label>
                <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
            </div>


            <div class="form-group mb-3">
                <label for="title">{{__("Article Image")}}</label>
                <input type="file" id="image_path" name="image_path" class="form-control">
            </div>

            <div class="form-group mb-3">
                <p>{{__("Tags")}}</p>
                <div class="d-flex">
                    @foreach ($tags as $tag)
                        <div class="form-check mb-3 mx-3">
                            <input class="form-check-input" type="checkbox" name="tags[]" id="{{ 'tag-' . $tag->id }}"
                                value="{{ $tag->id }}" @if (old('tag-' . $tag->id) == $tag->id) checked @endif>
                            <label class="form-check-label" for="{{ 'tag-' . $tag->id }}">
                                {{ $tag->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                    @if (old('is_active') == 1) checked @endif>
                <label class="form-check-label" for="is_active">
                   {{__("Show article")}}
                </label>
            </div>
        </div>
        <button class="btn btn-primary">{{__("To create")}}</button>
    </form>
@endsection
