@extends('layout')
@section('content')
    <div>
        <a class="border-b-2 border-white" href={{ route('index') }}>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-left inline" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
            </svg>
            <span>Return to Homepage</span>
        </a>
        <h1 class="text-[3rem]">Add Post</h1>
        <form class="mx-auto py-2.5 px-5 w-[600px] max-sm:w-[350px]" method="POST" action={{ route('post.store') }}>
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="mb-5 flex items-center flex-wrap gap-3">
                <div class="flex-grow">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                        Title</label>
                    <input type="text" id="title" name="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter post title" required />
                    @error('title')
                        <p class="text-sm font-light my-0 text-red-600 flex items-center gap-2 mt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0000"
                                class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="flex-grow">
                    <label for="author"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author</label>
                    <input type="text" id="author" name="author"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter author name" required />
                    @error('author')
                        <p class="text-sm font-light my-0 text-red-600 flex items-center gap-2 mt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0000"
                                class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>

            <div class="mb-5">
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                    Content</label>
                <textarea id="content" name="content" rows="4"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your post content here..." required></textarea>
                @error('content')
                    <p class="text-sm font-light my-0 text-red-600 flex items-center gap-2 mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0000"
                            class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                        </svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-5 flex items-center flex-wrap gap-3">
                <div class="mb-5 flex-grow">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                    <input type="text" id="slug" name="slug"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter slug (URL-friendly identifier)" required />
                    @error('slug')
                        <p class="text-sm font-light my-0 text-red-600 flex items-center gap-2 mt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0000"
                                class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="langues"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language</label>
                    <select id="langues" name="language"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option value="" disabled selected>Select a language</option>
                        <option value="en">English</option>
                        <option value="ar">Arabic</option>
                        <option value="fr">French</option>
                    </select>
                    @error('language')
                        <p class="text-sm font-light my-0 text-red-600 flex items-center gap-2 mt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0000"
                                class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
                Post
            </button>
        </form>
    </div>
@endsection
