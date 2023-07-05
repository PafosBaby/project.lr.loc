@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Все жарнры</h1>
    @if ($categories->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Жанр книги</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name }}</td>
                        <td class="d-flex">
                            <a href="{{ route('edit.category', $cat) }}"class='btn btn-sm btn-warning'>Редактировать</a>
                            <form action="{{ route('delete.category', $cat) }}" method="POST" class="mx-2">
                                @csrf
                                @method('DELETE')
                                <button class='btn btn-sm btn-danger btn-remove'>Удалить</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else()
        <h2>Пока нет не одного жанра!</h2>
    @endif()
@endsection

@section('scripts')
    <script>
        $(".btn-remove").on('click', function(e) {
            e.preventDefault();
            if (confirm("Запись будет удалена! Продолжить?")) {
                $(this).closest('form').submit();
            }
        });
    </script>
@endsection
