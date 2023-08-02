@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{__("All Permissions")}}</h1>
    @if ($permissions->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{__("Permissions")}}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $perm)
                    <tr>
                        <td>{{ $perm->name }}</td>
                        <td class="d-flex">

                             <form action="{{ route('admin.permission.delite', $perm) }}" method="POST" class="mx-2">
                                @csrf
                                @method('DELETE')
                                <button class='btn btn-sm btn-danger btn-remove'>{{__("Delite")}}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else()
        <h2>{{__("No Permissions")}}!</h2>
    @endif()
@endsection

@section('scripts')
    @include('layouts.admin-templates.script')
@endsection
