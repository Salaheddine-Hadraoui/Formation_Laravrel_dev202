@extends('layout')
@section('content')
<form class="max-w-sm mx-auto" method="POST" action={{route('store')}} enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  
    <div class="mb-5">
      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Title</label>
      <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter post title" required />
    </div>
  
    <div class="mb-5">
      <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Content</label>
      <textarea id="content" name="content" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your post content here..." required></textarea>
    </div>
  
    <div class="mb-5">
      <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author</label>
      <input type="text" id="author" name="author" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter author name" required />
    </div>
  
    <div class="mb-5">
      <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
      <input type="text" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter slug (URL-friendly identifier)" required />
    </div>
  
    <div class="mb-5">
      <label for="langues" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language</label>
      <select id="langues" name="langues" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        <option value="" disabled selected>Select a language</option>
        <option value="en">English</option>
        <option value="ar">Arabic</option>
        <option value="fr">French</option>
      </select>
    </div>
  
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit Post</button>
  </form>
  
@endsection