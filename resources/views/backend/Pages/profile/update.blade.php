@extends('admin')

@section('main-content')

<body>
    @include('sweetalert::alert')

    <div class="flex items-center justify-center mt-4 px-4 sm:px-6 lg:px-8 ">
        <div class="w-3/4 text-center pb-32 bg-white rounded-lg shadow-lg sm:p-8 lg:p-10">
            <h2 class="text-2xl font-bold text-center text-green-500">Profile Settings</h2>
            <div class="mt-4 text-center">
                <img class="w-24 h-24 rounded-full mx-auto border border-gray-300"
                    src="{{ $user->img ? asset($user->img) : 'https://via.placeholder.com/150' }}"
                    alt="Profile Picture">
            </div>
            <div class="mt-2 text-center">
                <label class="block text-lg font-medium text-gray-700">Full Name: <span class="ml-2">{{ $user->name }}</span></label>
            </div>
            <div class="mt-2">
                <label class="block text-lg font-medium text-gray-700">Email: <span class="ml-2">{{ $user->email }}</span></label>
            </div>
            <div class="mt-2">
                <label class="block text-lg font-medium text-gray-700">Phone: <span class="ml-2">{{ $user->phone }}</span></label>
            </div>
            <div class="mt-6 flex space-x-4 justify-center">
                <button onclick="toggleProfileForm()"
                    class="px-4 py-2 text-center font-semibold text-white bg-gradient-to-r from-blue-400 to-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Update Profile
                </button>
                <button onclick="togglePasswordForm()"
                    class="px-4 py-2 text-center font-semibold text-white bg-gradient-to-r from-blue-400 to-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Change Password
                </button>
            </div>
        </div>

        <!-- Hidden Forms Section -->
        <div id="profile-form" class="hidden w-full max-w-md mt-6 p-6 bg-white rounded-lg shadow-lg" aria-hidden="true">
            <h3 class="text-xl font-semibold text-center text-gray-800">Update Profile</h3>
            <form action="{{ route('user.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Form Fields for Updating Profile -->
                <div class="mt-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" required
                        class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                        class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" required
                        class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="img" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                    <input type="file" name="img" accept="image/*"
                        class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('img') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="w-full px-4 py-2 mt-6 font-semibold text-white bg-gradient-to-r from-blue-400 to-blue-600 rounded-lg hover:bg-blue-700">
                    Save Changes
                </button>
            </form>
        </div>

        <div id="password-form" class="hidden w-full max-w-md mt-6 p-6 bg-white rounded-lg shadow-lg" aria-hidden="true">
            <h3 class="text-xl font-semibold text-center text-gray-800">Change Password</h3>
            <form action="{{ route('user.password.update', $user->id) }}" method="POST">
                @csrf

                <!-- Form Fields for Changing Password -->
                <div class="mt-4">
                    <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                    <input type="password" name="current_password" required
                        class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('current_password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                    <input type="password" name="new_password" required
                        class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('new_password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                    <input type="password" name="confirm_password" required
                        class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('confirm_password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="w-full px-4 py-2 mt-6 font-semibold text-white bg-gradient-to-r from-blue-400 to-blue-600 rounded-lg hover:bg-blue-700">
                    Update Password
                </button>
            </form>
        </div>
    </div>

    <script>
        function toggleProfileForm() {
            const profileForm = document.getElementById('profile-form');
            const passwordForm = document.getElementById('password-form');

            profileForm.classList.toggle('hidden');
            profileForm.setAttribute('aria-hidden', profileForm.classList.contains('hidden'));

            passwordForm.classList.add('hidden');
            passwordForm.setAttribute('aria-hidden', 'true');
        }

        function togglePasswordForm() {
            const passwordForm = document.getElementById('password-form');
            const profileForm = document.getElementById('profile-form');

            passwordForm.classList.toggle('hidden');
            passwordForm.setAttribute('aria-hidden', passwordForm.classList.contains('hidden'));

            profileForm.classList.add('hidden');
            profileForm.setAttribute('aria-hidden', 'true');
        }
    </script>

</body>

@endsection