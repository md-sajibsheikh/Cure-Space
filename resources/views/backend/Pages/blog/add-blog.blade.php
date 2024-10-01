@extends('admin')

@section('main-content')

<div class=" mt-8 p-2 rounded-lg shadow-lg">

    <form action="{{ route('blog-store') }}" method="POST" enctype="multipart/form-data" class="mx-auto p-4 bg-white rounded-lg shadow-md max-w-2/4">
        @csrf <!-- CSRF Token -->
        <div class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-6 py-4">
            <h3 class="text-lg text-white font-bold rounded-lg">Add Blog</h3>
        </div>

        <label for="image" class="block mb-2 text-sm font-medium text-gray-700">Image:</label>
        <input type="file" id="image" name="img" accept="image/*" required class="block w-full p-2 border border-gray-300 rounded-md" />

        <label for="date" class="block mt-4 mb-2 text-sm font-medium text-gray-700">Date:</label>
        <input type="date" id="date" name="date" required class="block w-full p-2 border border-gray-300 rounded-md" />

        <label for="title" class="block mt-4 mb-2 text-sm font-medium text-gray-700">Title:</label>
        <input type="text" id="title" name="title" required class="block w-full p-2 border border-gray-300 rounded-md" />

        <label for="subtitle" class="block mt-4 mb-2 text-sm font-medium text-gray-700">Sub-title:</label>
        <input type="text" id="subtitle" name="subtitle" required class="block w-full p-2 border border-gray-300 rounded-md" />

        <button type="submit" class="mt-6 w-full py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">Add Blog</button>
    </form>
</div>

@endsection