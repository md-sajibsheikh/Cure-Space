@extends('admin')

@section('main-content')

<body class="bg-sky-150">
    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Get in Touch</h2>

            <form action="{{ route('aboutstore') }}" method="POST">
                @csrf
                <!-- Address Field -->
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-semibold mb-2">Address</label>
                    <input type="text" id="address" name="address" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" placeholder="Enter your address" value="{{ old('address', $about['address'] ?? '') }}" required>
                </div>

                <!-- Mobile Field -->
                <div class="mb-4">
                    <label for="mobile" class="block text-gray-700 font-semibold mb-2">Phone</label>
                    <input type="text" id="mobile" name="phone" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" placeholder="Enter your phone number" required value="{{ old('phone', $about['phone'] ?? '') }}">
                    <input type="text" id="phone1" name="phone1" class="w-full p-3 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" placeholder="Enter your phone number"  value="{{ old('phone1', $about['phone1'] ?? '') }}">
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" placeholder="Enter your email" required value="{{ old('email', $about['email'] ?? '') }}">
                    <input type="email" id="email1" name="email1" class="w-full p-3 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" placeholder="Enter your email" value="{{ old('email1', $about['email1'] ?? '') }}">
                </div>

                <!-- Facebook Field -->
                <div class="mb-4">
                    <label for="facebook" class="block text-gray-700 font-semibold mb-2">Facebook</label>
                    <input type="url" id="facebook" name="facebook" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" placeholder="Enter your Facebook URL" required value="{{ old('facebook', $about['facebook'] ?? '') }}">
                </div>

                <!-- LinkedIn Field -->
                <div class="mb-4">
                    <label for="linkedin" class="block text-gray-700 font-semibold mb-2">Linkedin</label>
                    <input type="url" id="linkedin" name="linkedin" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" placeholder="Enter your Linkedin URL" required value="{{ old('linkedin', $about['linkedin'] ?? '') }}">
                </div>

                <!-- Instagram Field -->
                <div class="mb-4">
                    <label for="instagram" class="block text-gray-700 font-semibold mb-2">Instagram</label>
                    <input type="url" id="instagram" name="instagram" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" placeholder="Enter your Instagram URL" required value="{{ old('instagram', $about['instagram'] ?? '') }}">
                </div>

                <!-- Contact Us Field -->
                <div class="mb-4">
                    <label for="contact-us" class="block text-gray-700 font-semibold mb-2">Contact Us</label>
                    <textarea id="contact-us" name="contactus" rows="4" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" placeholder="Enter your contact us details" required>{{ old('contactus', $about['contactus'] ?? '') }}</textarea>
                </div>

                <!-- Get in Touch Field -->
                <div class="mb-4">
                    <label for="getintouch" class="block text-gray-700 font-semibold mb-2">Get in Touch</label>
                    <textarea id="getintouch" name="getintouch" rows="4" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" placeholder="Enter your get in touch details" required>{{ old('getintouch', $about['getintouch'] ?? '') }}</textarea>
                </div>

                <!-- Submit Button -->
                <div class="mb-4">
                    <button type="submit" class="w-full bg-sky-500 text-white p-3 rounded-md shadow-md hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-opacity-50">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection