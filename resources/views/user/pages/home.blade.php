@extends('user')

@section('main-content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <!-- First Card with Counter and Icon (Total Contacts) -->
        <div class="col-sm-6 col-xl-3 mb-4 animate-card">
            <div class="card bg-light rounded shadow-sm p-4">
                <div class="card-body text-center">
                    <i class="bi bi-person-lines-fill fs-2 text-primary mb-3"></i> <!-- Bootstrap Icon for Contacts -->
                    <h5 class="card-title">Total Contacts</h5>
                    <p class="card-text">
                        <span class="counter" data-target="{{ $totalContacts }}">0</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Second Card with Counter and Icon (Total Members) -->
        <div class="col-sm-6 col-xl-3 mb-4 animate-card">
            <div class="card bg-light rounded shadow-sm p-4">
                <div class="card-body text-center">
                    <i class="bi bi-person-circle fs-2 text-success mb-3"></i> <!-- Bootstrap Icon for Members -->
                    <h5 class="card-title">Available Therapist</h5>
                    <p class="card-text">
                        <span class="counter" data-target="{{ $totalMembers }}">0</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Third Card with Counter and Icon (Total Bookings) -->
        <div class="col-sm-6 col-xl-3 mb-4 animate-card">
            <div class="card bg-light rounded shadow-sm p-4">
                <div class="card-body text-center">
                    <i class="bi bi-calendar-check fs-2 text-warning mb-3"></i> <!-- Bootstrap Icon for Bookings -->
                    <h5 class="card-title">Total Bookings</h5>
                    <p class="card-text">
                        <span class="counter" data-target="{{ $totalBookings }}">0</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Fourth Card with Counter and Icon (Total Services) -->
        <div class="col-sm-6 col-xl-3 mb-4 animate-card">
            <div class="card bg-light rounded shadow-sm p-4">
                <div class="card-body text-center">
                    <i class="bi bi-gear fs-2 text-info mb-3"></i> <!-- Bootstrap Icon for Services -->
                    <h5 class="card-title">Available Therapy</h5>
                    <p class="card-text">
                        <span class="counter" data-target="{{ $totalServices }}">00</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<script>
    // Counter animation
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const updateCounter = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;

            const increment = target / 100; // Control speed of the counter

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCounter, 20); // Update every 20ms
            } else {
                counter.innerText = target;
            }
        };
        updateCounter();
    });
</script>

<style>
    /* Animation using CSS keyframes */
    .animate-card {
        opacity: 0;
        transform: translateY(150px) scale(0.8);
        /* Initial position (further down and smaller) */
        margin-bottom: 1rem;
        /* Initially set the margin-bottom to 1rem */
        animation: slideIn 1s ease-out forwards;
        /* Applying keyframe animation */
    }

    /* Keyframes for slide-in and scale-up animation */
    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateY(150px) scale(0.8);
            margin-bottom: 1rem;
            /* Initial margin */
        }

        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
            /* Final position */
            margin-bottom: 0;
            /* Final margin when animation finishes */
        }
    }

    /* Custom CSS for icon size */
    .fs-2 {
        font-size: 2rem;
    }
</style>
@endsection