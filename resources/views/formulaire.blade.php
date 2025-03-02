<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blue-700">

    <div class="p-8 bg-black rounded-md shadow-md max-w-2xl mx-auto">
        <form action="{{route('store')}}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-lg font-semibold">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required class="mt-1 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="password" class="block text-lg font-semibold">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required class="mt-1 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="bio" class="block text-lg font-semibold">Bio:</label>
                <textarea id="bio" name="bio" class="mt-1 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tell us about yourself"></textarea>
            </div>
    
            <!-- Submit Button -->
            <button type="submit" class="bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700">Create Profile</button>
        </form>
    </div>
</body>
</html>
