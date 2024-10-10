<head>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Other head content -->
</head>

<div style="background-color:#87CEEB;" class="sidebar pe-4 pb-3 navbar-light">
    <nav class="navbar text-dark">
        <div id="a" class="d-flex align-items-center mb-4 ms-4">
            <a href="{{ url('/user/home') }}" class="d-flex align-items-center text-decoration-none">
                <i id="b" class="fas fa-star-of-life me-3"></i>
                <span class="app-brand-text fw-bold" style="font-size: 1.75rem;">CureSpace</span>
            </a>
        </div>

        <a href="{{route('index')}}" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
            <i class="fas fa-arrow-left me-1"></i>
            <h5 class="mt-[-4px]">Back Home</h5>
        </a>

        <div class="navbar-nav w-100">
            <!-- Dashboard Link -->
            <a href="{{route('user')}}" class="nav-item mt-2 nav-link d-flex align-items-center">
                <i class="fas fa-home mr-2"></i>
                <span>Dashboard</span>
            </a>

            <!-- Booking Link -->
            <a href="{{route('user.booking')}}" class="nav-item mt-2 nav-link d-flex align-items-center">
                <i class="fas fa-calendar-check "></i>
                <span style="margin-top: -10px;">Booking</span>
            </a>

            <!-- Contact Link -->
            <a href="{{route('user.contact')}}" class="nav-item mt-2 nav-link d-flex align-items-center">
                <i class="fas fa-envelope mr-2"></i>
                <span>Contact</span>
            </a>


            <a href="{{route('user.feedback')}}" class="nav-item mt-2 nav-link d-flex align-items-center">
                <i class="fa-regular fa-comment "></i>
                <span>Feedback</span>
            </a>
        </div>
    </nav>
</div>

<style>
    #b {
        font-size: 30px;
        /* Size of the logo icon */
    }

    .app-brand-text {
        font-size: 1.75rem;
        /* Adjust size of CureSpace text */

        /* Ensure text color is gray */
    }
</style>