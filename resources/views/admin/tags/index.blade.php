@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{__("All tags")}}</h1>
    @if ($tags->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>{{__("Tags")}}</th>
                    <th>{{__("Action")}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td class="d-flex">
                            <a href="{{ route('tags.edit', $tag) }}"class='btn btn-sm btn-warning'>{{__("Edit")}}</a>
                            <form action="{{ route('tags.destroy', $tag) }}" method="POST" class="mx-2">
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
        <h2>{{("There is not a single tag yet")}}!</h2>
    @endif()
@endsection

@section('scripts')
    @include('layouts.admin-templates.script')
@endsection
