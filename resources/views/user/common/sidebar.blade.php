<div class="sidebar  pe-4 pb-3 bg-info bg-opacity-90 navbar-light">

    <nav class="navbar text-white ">

        <a href="{{route('index')}}" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
            <img class="me-2" src="/user/img/left.png" width="25px" alt="">
            <h5 class="text-dark ">Back Home</h5>
        </a>

        <div class="align-items-center ms-4 ">
            <div class="position-relative">
                <img class="rounded-circle " src="{{ asset(Auth::user()->img) }}" alt="" width="65px" height="65px" style="margin-left:25%; margin-bottom:1px; ">
            </div>
            <div class="ms-3">
                <h5 class="text-dark">{{ Auth::user()->name }}</h5>

            </div>
        </div>
        <div class="navbar-nav w-100">
            <!-- Dashboard Link -->
            <a href="{{route('user')}}" class="nav-item mt-2 nav-link flex items-center active">
                <img class="mr-2" src="/user/img/home.png" width="32px" alt="">
                <span>Dashboard</span>
            </a>

            <!-- Booking Link -->
            <a href="{{route('user.booking')}}" class="nav-item mt-2 nav-link flex items-center active">
                <img class="mr-2" src="/user/img/booking.png" width="32px" alt="">
                <span>Booking</span>
            </a>

            <!-- Contact Link -->
            <a href="{{route('user.contact')}}" class="nav-item mt-2 nav-link flex items-center active">
                <img class="mr-2" src="/user/img/email.png" width="33px" alt="">
                <span>Contact</span>
            </a>
        </div>





</div>
</div>
</nav>
</div>