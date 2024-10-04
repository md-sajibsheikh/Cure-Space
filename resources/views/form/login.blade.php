<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CureSpace</title>
    <script src="https://cdn.tailwindcss.com"></script>

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gradient-to-r from-purple-400 to-blue-500 flex items-center justify-center min-h-screen">

    @include('sweetalert::alert')

    

    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-800">Login to CureSpace</h2>
        <form action="{{ route('login.check') }}" method="POST">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500">
            </div>

            <!-- Password Input with Show/Hide Button -->
            <div class="mt-4 relative">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500">

                <!-- Show/Hide Password Button -->
                <button type="button" onclick="togglePasswordVisibility('password')"
                    class="absolute right-3 top-9 text-gray-600 focus:outline-none">
                    <i class="fas fa-eye" id="eye-icon"></i>
                </button>
            </div>



            <button type="submit"
                class="w-full px-4 py-2 mt-6 font-semibold text-white bg-purple-600 rounded-lg hover:bg-purple-700">Login</button>
        </form>
        <p class="text-sm text-center text-gray-600">Don't have an account?
            <a href="{{ route('signup') }}" class="text-purple-500 hover:underline">Sign up</a>
        </p>
    </div>

    <script>
        // Toggle Password Visibility Function
        function togglePasswordVisibility(inputId) {
            const input = document.getElementById(inputId);
            const eyeIcon = document.getElementById('eye-icon');

            if (input.type === 'password') {
                input.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>