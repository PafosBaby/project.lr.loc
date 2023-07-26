@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Все права</h1>
    @if ($permissions->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Права</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $perm)
                    <tr>
                        <td>{{ $perm->name }}</td>
                        <td class="d-flex">
                            ...
                            {{-- <a href="{{ route('edit.category', $cat) }}"class='btn btn-sm btn-warning'>{{___("Edit")}}</a>
                            <form action="{{ route('delete.category', $cat) }}" method="POST" class="mx-2">
                                @csrf
                                @method('DELETE')
                                <button class='btn btn-sm btn-danger btn-remove'>{{__("Delite")}}</button>
                            </form> --}}

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else()
        <h2>Нет не одного разрешения!</h2>
    @endif()
@endsection

@section('scripts')
    @include('layouts.admin-templates.script')
@endsection
