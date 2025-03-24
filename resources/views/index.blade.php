@extends('layout')
@section('content')
    <div class="mx-2 mt-7 max-[680px]:m-0">
        @if (session('Success'))
            <div id="info"
                class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Success !</span> {{ session('Success') }}
                </div>
            </div>
        @elseif(session('Failed'))
            <div id="info"
                class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Failed !</span> {{ session('Failed') }}
                </div>
            </div>
        @endif
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-[3rem] max-[850px]:text-[2rem] p-2">Liste des Postes</h2>
            <button class="h-fit">
                <a class="text-lg md:border-2 md:border-white px-3 py-2 mr-4 flex justify-center items-center gap-2 hover:bg-white hover:text-black"
                    href={{ route('post.create') }}>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                        <path
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0" />
                    </svg>
                    <span class="max-[680px]:hidden">Add Post</span>
                </a>
            </button>
        </div>
        <div class="posts-container p-2.5 pr-3 h-[30.4rem] overflow-y-scroll">
            <ul class="ms-12 max-[680px]:ms-0">
                @if (empty($posts))
                    <li class="text-yellow-900">La table posts est vide</li>
                @else
                    @foreach ($posts as $pt)
                        <li
                            class="group text-white flex w-full p-2 items-center transition-all hover:bg-slate-100 hover:text-slate-900 focus:bg-slate-100 active:bg-slate-100">
                            <a class="relative text-[18px] w-full h-full" href={{ route('post-details', [$pt['id']]) }}>
                                <svg class="inline mr-2.5" xmlns="http://www.w3.org/2000/svg" fill="#444cf7" height="23px"
                                    width="23px" class="bi bi-postcard" viewBox="0 0 16 16">
                                    <path fill-rule="even"
                                        d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5M10.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM13 8h-2V6h2z" />
                                </svg>
                                <span>{{ $pt['title'] }}</span>
                                <span
                                    class="font-semibold float-end text-xs absolute bottom-1 right-0">{{ $pt['format_date'] }}</span>
                                <button class="hidden bg-black group-hover:block ms-3">
                                    <a class="text-white flex gap-0.5 p-2" href={{ route('post.delete', [$pt['id']]) }}>
                                        <svg class="mt-[4.5px]" xmlns="http://www.w3.org/2000/svg" width="18"
                                            height="18" fill="#FFFFFF" viewBox="0 0 16 16">
                                            <path
                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                        </svg>
                                        Delete
                                    </a>
                                </button>
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
    <script>
        setTimeout(() => {
            const info_bar = document.getElementById('info');
            if (info_bar) {
                info_bar.style.transition = 'ease-in .5s';
                info_bar.style.opacity = '0.5';
                setTimeout(() => {
                    info_bar.remove()
                }, 500);
            }
        }, 7000)
    </script>
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
