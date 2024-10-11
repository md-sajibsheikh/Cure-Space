@extends('user')

@section('main-content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    @include('sweetalert::alert')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body" style="margin-left: 40px;">
                        <h2 class="text-center text-info">Profile Settings</h2>

                        <div class="text-center">
                            <img class="img-fluid rounded-circle border border-3 border-gray-300"
                                src="{{ $user->img ? asset($user->img) : 'https://via.placeholder.com/150' }}"
                                alt="Profile Picture" style="width: 100px; height: 100px;">
                        </div>

                        <div class="mt-4">
                            <label class="form-label">Full Name:</label>
                            <span class="text-dark">{{ $user->name }}</span>
                        </div>

                        <div class="mt-2">
                            <label class="form-label">Email:</label>
                            <span class="text-dark">{{ $user->email }}</span>
                        </div>

                        <div class="mt-2">
                            <label class="form-label">Phone:</label>
                            <span class="text-dark">{{ $user->phone }}</span>
                        </div>

                        <div class="mt-4 d-flex justify-content-center">
                            <button onclick="toggleProfileForm()" class="btn btn-primary me-2">
                                Update Profile
                            </button>

                            <button onclick="togglePasswordForm()" class="btn btn-primary">
                                Change Password
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Forms -->
            <div class="col-md-6">
                <!-- Profile Update Form -->
                <div id="profile-form" class="mt-4 card shadow-sm" style="display: none;">
                    <div class="card-body">
                        <h3 class="text-center text-info">Update Profile</h3>
                        <form action="{{ route('user.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="img" class="form-label">Profile Picture</label>
                                <input type="file" name="img" accept="image/*" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-info w-100">
                                Save Changes
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Password Update Form -->
                <div id="password-form" class="mt-4 card shadow-sm" style="display: none;">
                    <div class="card-body">
                        <h3 class="text-center text-info">Change Password</h3>
                        <form action="{{ route('user.password.update', $user->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="password" name="current_password" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="new_password" class="form-label">New Password</label>
                                <input type="password" name="new_password" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm New Password</label>
                                <input type="password" name="confirm_password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-info w-100">
                                Update Password
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleProfileForm() {
            const profileForm = document.getElementById('profile-form');
            const passwordForm = document.getElementById('password-form');

            if (profileForm.style.display === "none") {
                profileForm.style.display = "block";
                passwordForm.style.display = "none";
            } else {
                profileForm.style.display = "none";
            }
        }

        function togglePasswordForm() {
            const profileForm = document.getElementById('profile-form');
            const passwordForm = document.getElementById('password-form');

            if (passwordForm.style.display === "none") {
                passwordForm.style.display = "block";
                profileForm.style.display = "none";
            } else {
                passwordForm.style.display = "none";
            }
        }
    </script>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection