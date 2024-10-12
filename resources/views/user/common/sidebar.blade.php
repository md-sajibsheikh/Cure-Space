<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Custom styles for a professional look */
        .sidebar {
            background-color: #e9ecef;
            /* Lighter grey for a fresh look */
            border-right: 1px solid #dee2e6;
            /* Light border for separation */
            height: 100vh;
            /* Full height sidebar */
            padding: 1.5rem 1rem;
            /* Added padding for consistent spacing */
        }

        .app-brand-text {
            color: #0dcaf0;
            /* Bootstrap info color for the brand text */
            font-size: 1.25rem;
            /* Adjusted font size for better visibility */
        }

        .sidebar i {
            color: #0dcaf0;
            /* Bootstrap info color for icons */
            font-size: 1.5rem;
            /* Increased icon size for better visibility */
        }

        .nav-link {
            color: #495057;
            /* Dark grey for the text links */
            font-size: 1.1rem;
            /* Slightly larger text for better readability */
            padding: 0.75rem 1rem;
            /* Consistent padding for links */
            border-radius: 0.375rem;
            /* Slight border radius for softer corners */
        }

        .nav-link:hover {
            color: #0dcaf0;
            /* Change color on hover */
            background-color: rgba(13, 110, 253, 0.1);
            /* Light blue background on hover */
        }

        /* Adjust spacing for logo and CureSpace */
        .navbar a.d-flex.align-items-center {
            gap: 0.5rem;
            /* Closer spacing between icon and text */
        }

        .navbar-brand,
        .nav-item {
            margin-bottom: 1.25rem;
            /* More space between items for better readability */
        }
    </style>
</head>

<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar">
        <div class="d-flex align-items-center mb-4 ms-2">
            <a href="{{ url('/home') }}" class="d-flex align-items-center text-decoration-none">
                <i class="fas fa-star-of-life"></i> <!-- Adjusted icon size -->
                <span class="app-brand-text fw-bold">CureSpace</span> <!-- Adjusted text size -->
            </a>
        </div>

        <a href="{{route('index')}}" class="navbar-brand d-flex align-items-center">
            <i class="fa-solid fa-right-to-bracket"></i>
            <h5 class="text-dark ">Back Home</h5>
        </a>

        <div class="navbar-nav w-100">
            <!-- Dashboard Link -->
            <a href="{{route('user')}}" class="nav-item nav-link d-flex align-items-center">
                <i class="fas fa-home me-2"></i>
                <span>Dashboard</span>
            </a>

            <!-- Booking Link -->
            <a href="{{route('user.booking')}}" class="nav-item nav-link d-flex align-items-center">
                <i class="fas fa-calendar-check me-2"></i>
                <span>Booking</span>
            </a>

            <!-- Contact Link -->
            <a href="{{route('user.contact')}}" class="nav-item nav-link d-flex align-items-center">
                <i class="fas fa-envelope me-2"></i>
                <span>Contact</span>
            </a>

            <!-- Feedback Link -->
            <a href="{{route('user.feedback')}}" class="nav-item nav-link d-flex align-items-center">
                <i class="far fa-comment me-2"></i>
                <span>Feedback</span>
            </a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>