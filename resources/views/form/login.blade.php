<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CureSpace</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-purple-400 to-blue-500 flex items-center justify-center min-h-screen">

    @include('sweetalert::alert')

    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-800">Login to CureSpace</h2>
        <form action="{{route('login.check')}}" method="POST">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500">
            </div>
            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500">
            </div>
            <div class="flex items-center justify-between mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="text-purple-500 form-checkbox focus:ring-purple-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
                <a href="#" class="text-sm text-purple-500 hover:underline">Forgot password?</a>
            </div>
            <button type="submit"
                class="w-full px-4 py-2 mt-6 font-semibold text-white bg-purple-600 rounded-lg hover:bg-purple-700">Login</button>
        </form>
        <p class="text-sm text-center text-gray-600">Don't have an account? <a href="{{route('signup')}}"
                class="text-purple-500 hover:underline">Sign up</a></p>
    </div>
</body>

</html>