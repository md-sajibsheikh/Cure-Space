@extends('admin')

@section('main-content')

<body class="bg-sky-150">
    <div class="flex justify-center items-center mt-3 min-h-screen">
        <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-center text-indigo-600 mb-4">
                Contact Page Update
            </h2>

            @if (session('success'))
            <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
            <div class="bg-red-200 text-red-800 p-4 rounded mb-4">
                {{ session('error') }}
            </div>
            @endif

            <form action="{{ route('contactstore') }}" method="POST">
                @csrf

                <!-- Address Field -->
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-semibold mb-2">Address</label>
                    <input type="text" id="address" name="address" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Enter your address" value="{{ old('address', $about['address'] ?? '') }}" required>
                </div>

                <!-- Phone Fields -->
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
                    <input type="text" id="phone" name="phone" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Enter your phone number" required value="{{ old('phone', $about['phone'] ?? '') }}">
                </div>
                <div class="mb-4">
                    <label for="phone1" class="block text-gray-700 font-semibold mb-2">Phone (optional)</label>
                    <input type="text" id="phone1" name="phone1" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Enter your optional phone number" value="{{ old('phone1', $about['phone1'] ?? '') }}">
                </div>

                <!-- Email Fields -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Enter your email" required value="{{ old('email', $about['email'] ?? '') }}">
                </div>
                <div class="mb-4">
                    <label for="email1" class="block text-gray-700 font-semibold mb-2">Email (optional)</label>
                    <input type="email" id="email1" name="email1" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Enter your optional email" value="{{ old('email1', $about['email1'] ?? '') }}">
                </div>

                <!-- Social Links -->
                <div class="mb-4">
                    <label for="facebook" class="block text-gray-700 font-semibold mb-2">Facebook</label>
                    <input type="url" id="facebook" name="facebook" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Enter your Facebook URL" required value="{{ old('facebook', $about['facebook'] ?? '') }}">
                </div>
                <div class="mb-4">
                    <label for="linkedin" class="block text-gray-700 font-semibold mb-2">LinkedIn</label>
                    <input type="url" id="linkedin" name="linkedin" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Enter your LinkedIn URL" required value="{{ old('linkedin', $about['linkedin'] ?? '') }}">
                </div>
                <div class="mb-4">
                    <label for="instagram" class="block text-gray-700 font-semibold mb-2">Instagram</label>
                    <input type="url" id="instagram" name="instagram" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Enter your Instagram URL" required value="{{ old('instagram', $about['instagram'] ?? '') }}">
                </div>

                <!-- Contact Us Field -->
                <div class="mb-4">
                    <label for="contact_us" class="block text-gray-700 font-semibold mb-2">Contact Us</label>
                    <textarea id="contact_us" name="contactus" rows="3" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Contact Us Content" required>{{ old('contactus', $about['contactus'] ?? '') }}</textarea>
                </div>

                <!-- Get in Touch Field -->
                <div class="mb-4">
                    <label for="getintouch" class="block text-gray-700 font-semibold mb-2">Get In Touch</label>
                    <textarea id="getintouch" name="getintouch" rows="3" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Get In Touch Content" required>{{ old('getintouch', $about['getintouch'] ?? '') }}</textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-indigo-600 text-white w-full px-6 py-2 rounded-lg hover:bg-indigo-700">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection