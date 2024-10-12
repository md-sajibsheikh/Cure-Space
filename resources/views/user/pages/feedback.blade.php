@extends('user')

@section('main-content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">

    <div class="card shadow-lg mt-8 px-4 mx-8" style="margin-top: 40px; margin-left: 22%; border-radius: 10px; width: 100%; max-width: 600px;">
        <div class="card-body">
            <h2 class="card-title text-center text-primary">Feedback Form</h2>

            <form action="{{ route('feedback.store') }}" method="POST">
                @csrf

                <!-- Location Input -->
                <input type="hidden" name="user_name" value="{{ Auth::user()->name ?? '0' }}">
                <input type="hidden" name="user_img" value="{{ Auth::user()->img ?? '0' }}">
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location" value="{{ old('location') }}" placeholder="Enter your location"
                        class="form-control @error('location') is-invalid @enderror" required>
                    @error('location')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Star Rating -->
                <div class="form-group">
                    <label>Rating</label>
                    <div class="d-flex">
                        <input type="radio" id="star1" name="rating" value="1" class="d-none" {{ old('rating') == 1 ? 'checked' : '' }} required>
                        <label for="star1" class="star" onclick="selectRating(1);">&#9733;</label>

                        <input type="radio" id="star2" name="rating" value="2" class="d-none" {{ old('rating') == 2 ? 'checked' : '' }} required>
                        <label for="star2" class="star" onclick="selectRating(2);">&#9733;</label>

                        <input type="radio" id="star3" name="rating" value="3" class="d-none" {{ old('rating') == 3 ? 'checked' : '' }} required>
                        <label for="star3" class="star" onclick="selectRating(3);">&#9733;</label>

                        <input type="radio" id="star4" name="rating" value="4" class="d-none" {{ old('rating') == 4 ? 'checked' : '' }} required>
                        <label for="star4" class="star" onclick="selectRating(4);">&#9733;</label>

                        <input type="radio" id="star5" name="rating" value="5" class="d-none" {{ old('rating') == 5 ? 'checked' : '' }} required>
                        <label for="star5" class="star" onclick="selectRating(5);">&#9733;</label>
                    </div>
                    @error('rating')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Feedback Input -->
                <div class="form-group">
                    <label for="feedback">Feedback</label>
                    <textarea id="feedback" name="feedback" placeholder="Enter your feedback" rows="4"
                        class="form-control @error('feedback') is-invalid @enderror" required>{{ old('feedback') }}</textarea>
                    @error('feedback')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                        Submit Feedback
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
@endsection