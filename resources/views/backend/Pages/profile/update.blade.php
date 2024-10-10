@extends('admin')

@section('main-content')

<body class="bg-sky-100">
    @include('sweetalert::alert')

    <div class="flex items-center mt-2 p-4">
        <div class="w-full max-w-lg bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-6">
                <h2 class="text-3xl font-bold text-white text-center">Profile Settings</h2>
                <div class="mt-4 text-center">
                    <img id="profileImage" class="w-28 h-28 rounded-full border-4 border-white shadow-lg"
                        src="{{ $user->img ? asset($user->img) : 'https://via.placeholder.com/150' }}"
                        alt="Profile Picture">
                </div>
            </div>
            <div class="p-6">
                <div class="text-center mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Hello, {{ $user->name }}</h3>
                </div>
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Email: <span class="font-normal">{{ $user->email }}</span></label>
                    <label class="block text-sm font-medium text-gray-700">Phone: <span class="font-normal">{{ $user->phone }}</span></label>
                </div>
                <div class="mt-6 flex justify-center space-x-4">
                    <button onclick="toggleForm('profile')"
                        class="px-5 py-2 text-white bg-blue-500 rounded-lg shadow hover:bg-blue-600 transition duration-200">
                        Update Profile
                    </button>
                    <button onclick="toggleForm('password')"
                        class="px-5 py-2 text-white bg-blue-500 rounded-lg shadow hover:bg-blue-600 transition duration-200">
                        Change Password
                    </button>
                </div>
            </div>
        </div>

        <!-- Flex container for forms -->
        <div class="ml-2 flex flex-col w-full max-w-lg space-y-4">
            <!-- Profile Update Form -->
            <div id="profile-form" class="hidden p-6 bg-gray-100 rounded-lg shadow-md relative" aria-hidden="true">
                <!-- Close button -->
                <button onclick="toggleForm('profile')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                    &times;
                </button>
                <h3 class="text-xl font-semibold text-center text-gray-800">Update Profile</h3>
                <form action="{{ route('user.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}" required
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" required
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="img" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                        <input type="file" name="img" accept="image/*" onchange="previewImage(event)"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        @error('img') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <img id="imgPreview" class="w-28 h-28 rounded-full border-4 border-gray-300 shadow-lg hidden" alt="Image Preview">
                    </div>
                    <button type="submit" class="w-full px-4 py-2 mt-6 text-white bg-blue-500 rounded-lg hover:bg-blue-600 transition duration-200">
                        Save Changes
                    </button>
                </form>
            </div>

            <!-- Password Change Form -->
            <div id="password-form" class="hidden p-6 bg-gray-100 rounded-lg shadow-md relative" aria-hidden="true">
                <!-- Close button -->
                <button onclick="toggleForm('password')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                    &times;
                </button>
                <h3 class="text-xl font-semibold text-center text-gray-800">Change Password</h3>
                <form action="{{ route('user.password.update', $user->id) }}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                        <input type="password" name="current_password" required
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        @error('current_password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                        <input type="password" name="new_password" required
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        @error('new_password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                        <input type="password" name="confirm_password" required
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        @error('confirm_password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="w-full px-4 py-2 mt-6 text-white bg-blue-500 rounded-lg hover:bg-blue-600 transition duration-200">
                        Update Password
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleForm(formType) {
            const profileForm = document.getElementById('profile-form');
            const passwordForm = document.getElementById('password-form');

            if (formType === 'profile') {
                profileForm.classList.toggle('hidden');
                passwordForm.classList.add('hidden');
            } else {
                passwordForm.classList.toggle('hidden');
                profileForm.classList.add('hidden');
            }
        }

        function previewImage(event) {
            const imgPreview = document.getElementById('imgPreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imgPreview.src = e.target.result;
                    imgPreview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                imgPreview.classList.add('hidden');
            }
        }
    </script>
</body>

@endsection