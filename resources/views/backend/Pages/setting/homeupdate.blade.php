@extends('admin')

@section('main-content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page Update</title>
</head>

<body class="bg-gray-100 w-full h-4/4">

    <!-- Form Section -->
    <section class="mt-8 container mx-auto p-6 bg-white shadow-md rounded-lg max-w-lg">
        <h2 class="text-2xl font-bold text-center text-indigo-600 mb-4">
            Home page Update
        </h2>

        <form action="{{ route('datastore') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Logo Image -->
            <div class="mb-4">
                <label for="logo_img" class="block text-gray-700 font-medium">Upload Logo Image</label>
                <input type="file" id="logo_img" name="img" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" onchange="previewImage(event, 'logoPreview')">

                <!-- Logo Image Preview -->
                <img id="logoPreview" class="mt-4 w-40 h-40 object-cover"
                    src="{{ asset($NavbarView['img'] ?? '') }}" alt="Logo Preview">
            </div>

            <!-- Site Name -->
            <div class="mb-4">
                <label for="site_name" class="block text-gray-700 font-medium">Site Name</label>
                <input type="text" id="site_name" name="site_name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" placeholder="Enter your site name" value="{{ old('site_name', $NavbarView['site_name'] ?? '') }}">
            </div>

            <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Title</label>
                <input type="text" id="title" name="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" placeholder="Enter your site title" value="{{ old('title', $NavbarView['title'] ?? '') }}">
            </div>

            <!-- Subtitle -->
            <div class="mb-4">
                <label for="subtitle" class="block text-gray-700 font-medium">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" placeholder="Enter your site subtitle" value="{{ old('subtitle', $NavbarView['subtitle'] ?? '') }}">
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium">Description</label>
                <textarea id="description" name="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" placeholder="Enter title description">{{ old('description', $NavbarView['description'] ?? '') }}</textarea>
            </div>

            <!-- Hero Images -->
            <div class="mb-4 flex justify-around">
                <div>
                    <!-- Hero Image 1 Preview -->
                    <img id="heroPreview1" class="m-2 w-full h-40 object-cover"
                        src="{{ asset($NavbarView['heroimg_1'] ?? '') }}" alt="Hero Image 1 Preview"
                        >
                </div>
                <hr class="h-40 border border-black">
                <div>
                    <!-- Hero Image 2 Preview -->
                    <img id="heroPreview2" class="m-2 w-full h-40 object-cover"
                        src="{{ asset($NavbarView['heroimg_2'] ?? '') }}" alt="Hero Image 2 Preview">
                </div>
            </div>

            <div class="flex">
                <!-- Hero Image 1 -->
                <div class="mb-4 w-1/2 pr-2">
                    <label for="heroimg_1" class="block text-gray-700 font-medium">Upload Hero 1 Image</label>
                    <input type="file" id="heroimg_1" name="heroimg_1" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" onchange="previewImage(event, 'heroPreview1')">
                </div>

                <!-- Hero Image 2 -->
                <div class="mb-4 w-1/2 pl-2">
                    <label for="heroimg_2" class="block text-gray-700 font-medium">Upload Hero 2 Image</label>
                    <input type="file" id="heroimg_2" name="heroimg_2" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" onchange="previewImage(event, 'heroPreview2')">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700">Submit</button>
            </div>

        </form>
    </section>

    <!-- JavaScript for Image Preview -->
    <script>
        function previewImage(event, previewId) {
            var input = event.target;
            var reader = new FileReader();

            // Check if there is a file selected
            if (input.files && input.files[0]) {
                reader.onload = function(e) {
                    var preview = document.getElementById(previewId);
                    preview.src = e.target.result;
                    preview.style.display = 'block'; // Make the preview visible
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>

</html>
@endsection