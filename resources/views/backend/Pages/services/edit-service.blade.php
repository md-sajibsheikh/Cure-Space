@extends('admin')

@section('main-content')

<body class="bg-gray-0">
    <div class="max-w-7xl mx-auto px-4 py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Image Preview -->
            <div class="flex justify-center">
                <img id="imagePreview" src="{{ asset($service->img) }}" alt="Service Image Preview" class="w-full h-auto object-cover rounded-lg shadow-lg">
            </div>

            <!-- Service Info -->
            <div class="col-span-2">
                <h2 class="text-2xl font-bold text-gray-800">Update Service</h2>
                <!-- Service Update Form -->
                <form class="mt-4" action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <!-- Image Upload -->
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                        <input type="file" id="image" name="img" accept="image/*" class="mt-1 block w-full text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" onchange="previewImage(event)">
                    </div>

                    <!-- Service Name -->
                    <div class="mb-4">
                        <label for="service" class="block text-sm font-medium text-gray-700">Service Name</label>
                        <input type="text" id="service" name="service_name" value="{{ $service->service_name }}" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                    <!-- Title -->
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" value="{{ $service->title }}" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                    <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow hover:bg-indigo-700">Update Service</button>
                </form>
            </div>
        </div>
    </div>

</body>

@endsection