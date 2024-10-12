@extends('admin')

@section('main-content')

<form action="{{ route('blog-update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="mx-auto p-4 bg-white rounded-lg shadow-md max-w-lg">
    @csrf

    <label for="image" class="block mb-2 text-sm font-medium text-gray-700">Image:</label>
    <input type="file" id="image" name="img" accept="image/*" class="block w-full p-2 border border-gray-300 rounded-md" onchange="previewImage(event)">

    <img id="imagePreview" src="{{ asset($blog->img) }}" alt="Current Image" class="mt-2 w-32 h-32 object-cover rounded-md" />


    <label for="title" class="block mt-4 mb-2 text-sm font-medium text-gray-700">Title:</label>
    <input type="text" id="title" name="title" value="{{ $blog->title }}" required class="block w-full p-2 border border-gray-300 rounded-md" />

    <label for="subtitle" class="block mt-4 mb-2 text-sm font-medium text-gray-700">Sub-title:</label>
    <input type="text" id="subtitle" name="subtitle" value="{{ $blog->subtitle }}" required class="block w-full p-2 border border-gray-300 rounded-md" />

    <button type="submit" class="mt-6 w-full py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">Update Blog</button>
</form>



<script>
    function previewImage(event) {
        const imagePreview = document.getElementById('imagePreview');
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        } else {
            imagePreview.src = "{{ asset($blog->img) }}"; // পুরানো ছবি দেখানো
        }
    }
</script>

@endsection