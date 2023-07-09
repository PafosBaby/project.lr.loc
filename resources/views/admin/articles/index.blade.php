@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Все статьи</h1>
    @if ($articles->count())
        <table class="table table-striped">
            <th>
                <tr>
                    <th>Изображение</th>
                    <th>Название</th>
                    <th>Категории</th>
                    <th>Опубликована</th>
                    <th>Отображается</th>
                    <th>Действие</th>
                </tr>
            </th>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td style="max-width: 150px">
                            <img src="{{ asset($article->getImage()) }}" alt="" class="img-fluid">
                        </td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category->name }}</td>
                        <td>{{ $article->getTags()}}</td>
                        <td>{{ $article->publich_at }}</td>
                        <td>{{ $article->isShowing() }}</td>

                        <td class="d-flex">
                            <a href="{{ route('articles.edit', $article) }}"class='btn btn-sm btn-warning'>Изменить</a>
                            <form action="{{ route('articles.destroy', $article) }}" method="POST" class="mx-2">
                                @csrf
                                @method('DELETE')
                                <button class='btn btn-sm btn-danger btn-remove'>Удалить</button>
                            </form>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>Пока нет ни одной Статьи!</h2>
    @endif
@endsection

@section('scripts')
    @include('layouts.admin-templates.script')
@endsection
