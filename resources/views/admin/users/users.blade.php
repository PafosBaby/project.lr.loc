@extends('layouts.admin')

@section('content')
<h1 class="mb-4">{{__("All Users")}}</h1>
@if ($users->count())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{__("Name")}}</th>
                <th>Email</th>
                <th>{{__("Role")}}</th>
                <th>{{__("Permissions")}}</th>
                <th>{{__("Action")}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->roles->count())
                            {{$user->getRoles()}}
                        @endif
                    </td>

                    <td>
                        {{$user->getPermissions()}}
                    </td>
                    <td class="d-flex">
                            <a href="{{ route('admin.users.edit', $user) }}"class='btn btn-sm btn-warning'>{{__("Edit")}}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else()
    <h2> {{__("No Users")}}</h2>
@endif()
@endsection

@section('scripts')
@include('layouts.admin-templates.script')
@endsection
