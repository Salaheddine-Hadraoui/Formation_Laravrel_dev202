@extends('layout')
@section('content')
    <div class="mx-auto mt-12">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-[3rem] p-2">Liste des Postes</h2>
            <button class="h-fit">
                <a class="text-lg border-2 border-white px-3 py-2 mr-4 flex justify-center items-center gap-2 hover:bg-white hover:text-black" href={{route('post.create')}}>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                    </svg>
                    Add Post
                </a>
            </button>
        </div>
        <div class="posts-container p-2.5 pr-3 h-[30.4rem] w-fit overflow-y-scroll">
            <ul class="ms-12">
                @if (empty($posts))
                    <li class="text-yellow-900">La table posts est vide</li>
                @else
                    @foreach ($posts as $pt)
                        <li
                            class="text-white flex w-full p-2 items-center transition-all hover:bg-slate-100 hover:text-slate-900 focus:bg-slate-100 active:bg-slate-100 md:w-[50rem]">
                            <a class="relative text-[18px] w-full h-full" href={{ route('post-details', [$pt['id']]) }}>
                                <svg class="inline mr-2.5" xmlns="http://www.w3.org/2000/svg" fill="#444cf7" height="23px"
                                    width="23px" class="bi bi-postcard" viewBox="0 0 16 16">
                                    <path fill-rule="even"
                                        d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5M10.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM13 8h-2V6h2z" />
                                </svg>
                                <span>{{ $pt['title'] }}</span>
                                <span class="float-end text-xs absolute bottom-1 right-0">{{$pt['format_date']}}</span>
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endsection


















{{-- <table class="p-2 table">
        <thead>
            <tr class="bg-green-800">
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
                    <tr class="bg-green-800" style="padding: 10px">
                        <td class="p-2" >{{ $post['title'] }}</td>
                        <td class="p-2" >{{ $post['id'] }}</td>
                        <td class="p-2" >{{ $post['content'] }}</td>
                        <td class="p-2" >{{ $post['slug'] }}</td>
                        <td class="p-2" >{{ $post['active'] }}</td>
                    </tr>
                @endforeach
            @else
                <tr class="bg-green-800" style="padding: 10px" colspan=5>No posts</tr>
            @endif

        </tbody>
    </table> --}}
