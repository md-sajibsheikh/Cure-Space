<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CureSpace</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class=" flex items-center bg-gray-100 justify-center min-h-screen">
    @include('sweetalert::alert')

    <div class="w-full max-w-md p-8   space-y-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center  text-gray-800">Login to CureSpace</h2>
        <form action="{{route('login.check')}}" method="POST">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500">
                @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4 relative">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500">
                <!-- Eye Icon for Password Toggle -->
                <button type="button" class="absolute inset-y-0 mt-4 right-0 flex items-center pr-3" onclick="togglePassword()">
                    <i id="togglePassword" class="fas fa-eye cursor-pointer"></i>
                </button>
                @error('password')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="text-purple-500 form-checkbox focus:ring-purple-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <button type="submit"
                class="w-full px-4 py-2 mt-6 font-semibold text-white bg-sky-400 rounded-lg">Login</button>
        </form>

        <p class="text-sm text-center text-gray-600">Don't have an account? <a href="{{route('signup')}}"
                class="text-sky-500 hover:underline">Sign up</a></p>
    </div>

    <!-- Password Toggle Script -->
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.getElementById('togglePassword');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // Toggle between eye and eye-slash icon
            if (type === 'password') {
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        }
    </script>
</body>

</html>