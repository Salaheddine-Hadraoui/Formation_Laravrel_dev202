@extends('layout')
@section('post-show')
 @if($ShowPost) 
    <div class="flex">
        <div class="relative flex flex-col  my-6  shadow-sm border border-white rounded-lg w-6/12 max-[950px]:flex-grow">      
            <div class="mx-3 mb-0 border-b border-white pt-3 pb-2 px-1 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ffffff" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
                <span class="text-sm font-medium text-white">
                    {{$ShowPost['author']}}
                </span>
            </div>
            
            <div class="p-4">
              <h5 class="mb-2 text-white text-xl font-semibold">
                {{$ShowPost['title']}}
              </h5>
              <p class="text-white leading-normal">
                {{$ShowPost['content']}}
            </p>
            </div>
            <div class="mr-3 flex items-center justify-between border-t border-white pb-3 pt-2 px-1">
              <div class="text-sm text-white font-medium">
                <svg class="inline mr-2" viewBox="0 0 24 24" width="16" height="16" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.219 11.784 11.784 22.219c-.407.407-.407 1.068 0 1.476.407.407 1.068.407 1.476 0L23.695 13.26c.407-.408.407-1.069 0-1.476-.408-.407-1.069-.407-1.476 0ZM20.132.305.305 20.132c-.407.407-.407 1.068 0 1.476.408.407 1.069.407 1.476 0L21.608 1.781c.407-.407.407-1.068 0-1.476-.408-.407-1.069-.407-1.476 0Z"/>
                </svg>
                {{$ShowPost['slug']}}
              </div>
              <div class="text-sm text-white font-medium">
                {{$ShowPost['format_date']}}
              </div>
            </div>
          </div>
@endif
@endsection
