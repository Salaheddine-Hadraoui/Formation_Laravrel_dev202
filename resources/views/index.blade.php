@extends('layout')
@section('content')
    <h2 class="font-bold p-2">Liste des Postes</h2>
    <table class="p-2 table">
        <thead>
            <tr style="padding: 10px">
                <td>ID</td>
                <td>Title</td>
                <td>Content</td>
                <td>Slug</td>
                <td>Active</td>
            </tr>
        </thead>
        <tbody>
            @if (isset($posts))
                @foreach ($posts as $post)
                    <tr style="padding: 10px">
                        <td>{{ $post['id'] }}</td>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['content'] }}</td>
                        <td>{{ $post['slug'] }}</td>
                        <td>{{ $post['active'] }}</td>
                    </tr>
                @endforeach
            @else
                <tr style="padding: 10px" colspan=5>No posts</tr>
            @endif

        </tbody>
    </table>
@endsection
