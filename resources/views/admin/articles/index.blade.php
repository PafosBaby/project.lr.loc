@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{__('All News')}}</h1>
    @if ($articles->count())
        <table class="table table-striped">
            <th>
                <tr>
                    <th>{{__("Image")}}</th>
                    <th>{{__("Title")}}</th>
                    <th>{{__("Categories")}}</th>
                    <th>{{__("Tags")}}</th>
                    <th>{{__("Published")}}</th>
                    <th>{{__("Displayed")}}</th>
                    @hasallroles('admin|author')
                    <th>{{__("Action")}}</th>
                    @endhasallroles
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
                            @can('edit news')
                            <a href="{{ route('articles.edit', $article) }}"class='btn btn-sm btn-warning'>{{__("To change")}}</a>
                            @endcan
                            @can('delete news')
                            <form action="{{ route('articles.destroy', $article) }}" method="POST" class="mx-2">
                                @csrf
                                @method('DELETE')
                                <button class='btn btn-sm btn-danger btn-remove'>{{__("Delite")}}</button>
                            </form>
                            @endcan
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>{{__('There is no news yet!')}}</h2>
    @endif
@endsection

@section('scripts')
    @include('layouts.admin-templates.script')
@endsection
