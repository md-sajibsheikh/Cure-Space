@extends('user')

@section('main-content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .star {
            font-size: 2rem;
            cursor: pointer;
            color: gray;
            /* Default color for unselected stars */
        }

        .star.selected {
            color: gold;
            /* Color for selected stars */
        }
    </style>
    <script>
        function selectRating(rating) {
            const stars = document.querySelectorAll('.star');
            stars.forEach((star, index) => {
                star.classList.toggle('selected', index < rating);
                document.getElementById(`star${index + 1}`).checked = index < rating;
            });
        }
    </script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white p-6 ml-28 rounded-lg shadow-lg w-3/4">
        <h2 class="text-2xl font-bold mb-4 text-center text-purple-600">Feedback Form</h2>

        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf

            <!-- Location Input -->
            <input type="hidden" name="user_name" value="{{ Auth::user()->name ?? '0' }}">
            <input type="hidden" name="user_img" value="{{ Auth::user()->img ?? '0' }}">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="location">Location</label>
                <input type="text" id="location" name="location" value="{{ old('location') }}" placeholder="Enter your location" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                @error('location')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Star Rating -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Rating</label>
                <div class="flex space-x-2">
                    <input type="radio" id="star1" name="rating" value="1" class="hidden" {{ old('rating') == 1 ? 'checked' : '' }}>
                    <label for="star1" class="star" onclick="selectRating(1);">&#9733;</label>

                    <input type="radio" id="star2" name="rating" value="2" class="hidden" {{ old('rating') == 2 ? 'checked' : '' }}>
                    <label for="star2" class="star" onclick="selectRating(2);">&#9733;</label>

                    <input type="radio" id="star3" name="rating" value="3" class="hidden" {{ old('rating') == 3 ? 'checked' : '' }}>
                    <label for="star3" class="star" onclick="selectRating(3);">&#9733;</label>

                    <input type="radio" id="star4" name="rating" value="4" class="hidden" {{ old('rating') == 4 ? 'checked' : '' }}>
                    <label for="star4" class="star" onclick="selectRating(4);">&#9733;</label>

                    <input type="radio" id="star5" name="rating" value="5" class="hidden" {{ old('rating') == 5 ? 'checked' : '' }}>
                    <label for="star5" class="star" onclick="selectRating(5);">&#9733;</label>
                </div>
                @error('rating')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Feedback Input -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="feedback">Feedback</label>
                <textarea id="feedback" name="feedback" placeholder="Enter your feedback" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">{{ old('feedback') }}</textarea>
                @error('feedback')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50">
                    Submit Feedback
                </button>
            </div>
        </form>
    </div>

</body>

</html>
@endsection