@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{ __('All genres') }}</h1>
    @if ($categories->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>{{ __('Genre') }}</th>
                    @role('admin')
                    <th>{{ __('Action') }}</th>
                    @endrole
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name }}</td>
                        @role('admin')
                        <td class="d-flex">
                            @can('edit genres')
                                <a href="{{ route('edit.category', $cat) }}"class='btn btn-sm btn-warning'>{{ __('Edit') }}</a>
                            @endcan
                            @can('delete genres')
                                <form action="{{ route('delete.category', $cat) }}" method="POST" class="mx-2">
                                    @csrf
                                    @method('DELETE')
                                    <button class='btn btn-sm btn-danger btn-remove'>{{ __('Delite') }}</button>
                                </form>
                            @endcan

                        </td>
                        @endrole
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else()
        <h2>{{ __('There is not one genre yet') }}!</h2>
    @endif()
@endsection

@section('scripts')
    @include('layouts.admin-templates.script')
@endsection
