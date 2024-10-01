<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - CureSpace</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-purple-400 to-blue-500">
    @include('sweetalert::alert')

    <div class="flex items-center justify-center min-h-screen px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md p-6 space-y-6 bg-white rounded-lg shadow-lg sm:p-8 lg:p-10">
            <h2 class="text-2xl font-bold text-center text-green-500">Signup for CureSpace</h2>
            <form action="{{ route('signupData') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Image Preview and Upload Input -->
                <div class="mt-4 text-center">
                    <label for="image" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                    <div class="mt-2">
                        <img id="preview-image" class="w-20 h-20 rounded-full mx-auto border border-gray-300" src="https://via.placeholder.com/150" alt="Preview">
                    </div>
                    <input type="file" name="img" id="image" class="w-full px-4 py-2 mt-4 text-gray-700 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" accept="image/*" onchange="previewImage(event)">
                </div>

                <!-- Other Form Fields -->
                <div class="mt-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" id="name" required class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                </div>
                <div class="mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                </div>
                <div class="mt-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" name="phone" id="phone" required class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                </div>
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                </div>
                <div class="mt-4">
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" required class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                </div>
                <button type="submit" class="w-full px-4 py-2 mt-6 font-semibold text-white bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Signup</button>
            </form>
            <p class="text-sm text-center text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-green-500 hover:underline">Login</a></p>
        </div>
    </div>

    <script>
        // Shortened function to preview the uploaded image
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = e => document.getElementById('preview-image').src = e.target.result;
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>

</html>