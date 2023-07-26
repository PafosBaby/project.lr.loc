@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Все пользователи</h1>
    @if ($users->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Роли</th>
                    <th>Права</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td class="d-flex">
                            <a href="{{route('admin.users.edit',$user)}}"class='btn btn-sm btn-warning'>Редактировать</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else()
        <h2>Пока нет пользователей!</h2>
    @endif()
@endsection

@section('scripts')
    @include('layouts.admin-templates.script')
@endsection
