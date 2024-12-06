@extends('user')

@section('main-content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <!-- Total Bookings Card -->
        <div class="col-sm-6 col-md-4 col-xl-3 mb-4 animate-card">
            <div class="card bg-light rounded shadow-sm p-4">
                <div class="card-body text-center">
                    <i class="bi bi-calendar-check fs-2 text-warning mb-3"></i> <!-- Icon for Bookings -->
                    <h5 class="card-title">Total Bookings</h5>
                    <p class="card-text">
                        <span class="counter" data-target="{{ $totalBookings }}">0</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Total Services Card -->
        <div class="col-sm-6 col-md-4 col-xl-3 mb-4 animate-card">
            <div class="card bg-light rounded shadow-sm p-4">
                <div class="card-body text-center">
                    <i class="bi bi-gear fs-2 text-info mb-3"></i> <!-- Icon for Services -->
                    <h5 class="card-title">Total Services</h5>
                    <p class="card-text">
                        <span class="counter" data-target="{{ $totalServices }}">00</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Total Doctor Card -->
        <div class="col-sm-6 col-md-4 col-xl-3 mb-4 animate-card">
            <div class="card bg-light rounded shadow-sm p-4">
                <div class="card-body text-center">
                    <i class="bi bi-person-circle fs-2 text-success mb-3"></i> <!-- Icon for Doctors -->
                    <h5 class="card-title">Total Doctors</h5>
                    <p class="card-text">
                        <span class="counter" data-target="{{ $totalMembers }}">0</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Total Contacts Card -->
        <div class="col-sm-6 col-md-4 col-xl-3 mb-4 animate-card">
            <div class="card bg-light rounded shadow-sm p-4">
                <div class="card-body text-center">
                    <i class="bi bi-person-lines-fill fs-2 text-primary mb-3"></i> <!-- Icon for Contacts -->
                    <h5 class="card-title">Total Contacts</h5>
                    <p class="card-text">
                        <span class="counter" data-target="{{ $totalContacts }}">0</span>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Sale & Revenue End -->

<!-- Bootstrap JS (Bundle includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<!-- Counter Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Target all elements with the 'counter' class
        const counters = document.querySelectorAll('.counter');

        // Iterate over each counter element
        counters.forEach(counter => {
            const updateCounter = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;

                // Speed control (increment rate)
                const increment = target / 100;

                if (count < target) {
                    // Update the counter's inner text
                    counter.innerText = Math.ceil(count + increment);
                    requestAnimationFrame(updateCounter); // Smooth animation
                } else {
                    counter.innerText = target; // Final value
                }
            };

            updateCounter(); // Start counter animation
        });
    });
</script>

<!-- Custom CSS for Animation and Layout -->
<style>
    /* Slide-in animation for cards */
    .animate-card {
        opacity: 0;
        transform: translateY(150px) scale(0.8);
        margin-bottom: 1rem;
        animation: slideIn 1s ease-out forwards;
    }

    /* Keyframes for card sliding and scaling */
    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateY(150px) scale(0.8);
            margin-bottom: 1rem;
        }

        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
            margin-bottom: 0;
        }
    }

    /* Custom icon size */
    .fs-2 {
        font-size: 2rem;
    }

    /* Hover effect for cards */
    .card-body:hover {
        background-color: #f8f9fa;
        cursor: pointer;
    }
</style>
@endsection