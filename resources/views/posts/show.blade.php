@extends('layout')
@section('content')
    <div>
        <h1 class="font-2xl">Show Post : {{ $ShowPost['title'] }}</h1>
        <p>{{ $ShowPost['content'] }}</p>
        <p>{{ $ShowPost['slug'] }}</p>
        @if ( $ShowPost['active'] === 0 )
            <p class="text-green-500">
                <span cl ass="w-10 h-10 rounded-full bg-green-500"></span>
                True
            </p>
        @else
            <p class="text-green-500">
                <span cl ass="w-10 h-10 rounded-full bg-green-500"></span>
                True
            </p>
        @endif
    </div>
@endsection
