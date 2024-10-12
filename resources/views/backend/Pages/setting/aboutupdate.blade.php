@extends('admin')

@section('main-content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CureSpace - Input Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        .img-preview {
            width: 100%;
            height: auto;
            max-height: 200px;
            object-fit: cover;
            margin-top: 10px;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-5 p-5 bg-white rounded-lg shadow-lg shadow-gray-400">
        <h2 class="text-2xl font-bold text-center text-indigo-600 mb-4">About Page Update</h2>

        <!-- Display success message -->
        @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

        <!-- Display validation errors (SweetAlert popup for each input field) -->
        @if ($errors->any())
        
        @endif

        <form id="inputForm" action="{{ route('site.aboutstore') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Experience Input Field -->
            <div class="mb-4">
                <label for="experience" class="block text-gray-700">Experience (Years):</label>
                <input type="number" id="experience" name="experience" value="{{ old('experience', $about->experience ?? '') }}"
                    class="mt-1 block w-full md:w-1/4 p-2 border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>

                <!-- Show field-specific validation error -->
                @if ($errors->has('experience'))
                <span class="text-red-500 text-sm">{{ $errors->first('experience') }}</span>
                @endif
            </div>

            <!-- Title Input Field -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title:</label>
                <input type="text" id="title" name="title" value="{{ old('title', $about->title ?? '') }}"
                    class="mt-1 p-2 block w-full md:w-3/4 border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>

                <!-- Show field-specific validation error -->
                @if ($errors->has('title'))
                <span class="text-red-500 text-sm">{{ $errors->first('title') }}</span>
                @endif
            </div>

            <!-- Description Input Field -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea id="description" name="description" rows="4"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>{{ old('description', $about->description ?? '') }}</textarea>

                <!-- Show field-specific validation error -->
                @if ($errors->has('description'))
                <span class="text-red-500 text-sm">{{ $errors->first('description') }}</span>
                @endif
            </div>

            <!-- Options Input Fields (Checkboxes) -->
            <fieldset class="mb-4">
                <legend class="block text-gray-700 font-bold">Personal Touch:</legend>

                <div class="flex items-center">
                    <input type="checkbox" id="option1" name="touch1" value="Refreshing to get such a personal touch"
                        class="mr-2" {{ old('touch1', $about->touch1 ?? '') ? 'checked' : '' }}>
                    <label for="option1" class="text-gray-700">Refreshing to get such a personal touch</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="option2" name="touch2" value="Duis aute irure dolor in reprehenderit in voluptate."
                        class="mr-2" {{ old('touch2', $about->touch2 ?? '') ? 'checked' : '' }}>
                    <label for="option2" class="text-gray-700">Duis aute irure dolor in reprehenderit in voluptate.</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="option3" name="touch3" value="Velit esse cillum dolore eu fugiat nulla pariatur."
                        class="mr-2" {{ old('touch3', $about->touch3 ?? '') ? 'checked' : '' }}>
                    <label for="option3" class="text-gray-700">Velit esse cillum dolore eu fugiat nulla pariatur.</label>
                </div>
            </fieldset>

            <!-- Image Upload Fields -->
            <div class="mb-4">
                <label for="img" class="block text-gray-700">Upload Image:</label>
                <input type="file" id="img" name="img" accept="image/*"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" onchange="previewImage(event, 'imgPreview')">

                <!-- Show field-specific validation error -->
                @if ($errors->has('img'))
                <span class="text-red-500 text-sm">{{ $errors->first('img') }}</span>
                @endif
            </div>

            <div class="mb-4">
                <label for="img_hero" class="block text-gray-700">Upload Hero Image:</label>
                <input type="file" id="img_hero" name="img_hero" accept="image/*"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" onchange="previewImage(event, 'imgHeroPreview')">

                <!-- Show field-specific validation error -->
                @if ($errors->has('img_hero'))
                <span class="text-red-500 text-sm">{{ $errors->first('img_hero') }}</span>
                @endif
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
            </div>
        </form>
    </div>

    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

@endsection