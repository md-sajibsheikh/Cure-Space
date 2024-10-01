@extends('admin')

@section('main-content')
<div class="content-wrapper bg-gray-100 min-h-screen p-6">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-4">
                <div></div>
                <div>
                    <nav class="flex space-x-2 mt-1 text-gray-500">
                        <a href="#" class="hover:text-gray-900">Home</a>
                        <span>/</span>
                        <span class="text-gray-800">Add Team</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content section -->
    <div class="content">
        <div class="container mx-auto mt-2">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <!-- Form Header -->
                <div class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-6 py-4">
                    <h3 class="text-lg font-semibold">Add Team Member</h3>
                </div>

                <!-- Form start -->
                <form action="{{route('teamAdded')}}" method="post" enctype="multipart/form-data" class="p-8 space-y-6">
                    @csrf
                    <!-- Profile Photo Upload -->
                    <div>

                        <label for="exampleInputFile" class="block text-sm font-medium text-gray-700">Upload Profile Photo</label>
                        <div class="flex items-center mt-2">
                            <input type="file" name="img" class="hidden" id="exampleInputFile" onchange="previewImage(event)">
                            <label for="exampleInputFile" class="block px-4 py-2 bg-gray-200 text-gray-700 cursor-pointer rounded-lg shadow-inner transition duration-200 ease-in-out transform hover:bg-gray-300">Choose file</label>
                        </div>
                        <!-- Image preview -->
                        <img id="imagePreview" class="mt-4 hidden border border-gray-300 rounded-lg shadow-lg" style="max-width: 150px; max-height: 150px;" />
                    </div>

                    <!-- Full Name Input -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" name="name" class="form-control w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 ease-in-out" id="title" placeholder="Full Name">
                    </div>

                    <!-- Social Links Inputs -->
                    <div>
                        <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                        <input type="link" name="facebook" class="form-control w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 ease-in-out" id="facebook" placeholder="Enter Facebook link">
                    </div>

                    <div>
                        <label for="twitter" class="block text-sm font-medium text-gray-700">Twitter</label>
                        <input type="text" name="twitter" class="form-control w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 ease-in-out" id="twitter" placeholder="Enter Twitter link">
                    </div>

                    <div>
                        <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                        <input type="text" name="instagram" class="form-control w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 ease-in-out" id="instagram" placeholder="Enter Instagram link">
                    </div>

                    <div>
                        <label for="linkedin" class="block text-sm font-medium text-gray-700">Linkedin</label>
                        <input type="text" name="linkedin" class="form-control w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 ease-in-out" id="linkedin" placeholder="Enter Linkedin link">
                    </div>

                    <!-- Service Selection -->
                    <h5 class="text-lg font-semibold mt-4 mb-2">Services</h5>
                    <div class="p-1">
                        <select class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 ease-in-out" name="services">
                            <option disabled selected value="Select Services">Select Services</option>
                            <option value="Message Physio Therapist">Message Physio Therapist</option>
                            <option value="Rehabilitation Therapist">Rehabilitation Therapist</option>
                            <option value="Doctor of Physical therapy">Doctor of Physical therapy</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-right">
                        <button type="submit" class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-6 py-2 rounded-lg shadow-lg hover:shadow-xl transition duration-200 ease-in-out hover:bg-indigo-600">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    // Image preview function
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.classList.remove('hidden');
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>