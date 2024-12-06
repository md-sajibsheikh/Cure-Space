<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        @foreach($home as $homes)
        <a href="{{ route('index') }}" class="navbar-brand p-0">
            <h1 class="text-primary "><img src="{{asset($homes->img)}}" alt="" style="margin-top: -10px;"></i>{{$homes->site_name}}</h1>
        </a>
        @endforeach
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{ route('index') }}" class="nav-item nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('service') }}" class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('appointment') }}" class="dropdown-item {{ request()->routeIs('appointment') ? 'active' : '' }}">Appointment</a>
                        <a href="{{ route('feature') }}" class="dropdown-item {{ request()->routeIs('feature') ? 'active' : '' }}">Features</a>
                        <a href="{{ route('blog') }}" class="dropdown-item {{ request()->routeIs('blog') ? 'active' : '' }}">Our Blog</a>
                        <a href="{{ route('team') }}" class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Our Team</a>
                        <a href="{{ route('testimonial') }}" class="dropdown-item {{ request()->routeIs('testimonial') ? 'active' : '' }}">Testimonial</a>
                    </div>
                </div>

                @if(Auth::user())
                <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
                @if(Auth::user()->is_admin == 1)
                <a href="{{ route('admin') }}" class="nav-item nav-link {{ request()->routeIs('admin') ? 'active' : '' }}">Dashboard</a>
                @else
                <a href="{{ route('user') }}" class="nav-item nav-link {{ request()->routeIs('user') ? 'active' : '' }}">Dashboard</a>
                @endif

                @else
                <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
                @endif
            </div>

            @if(Auth::user())
            <a href="{{ route('logout') }}" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Logout</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Login</a>
            <a href="{{ route('signup') }}" class="btn btn-primary border-2 rounded-pill ms-1 text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Signup</a>
            @endif
        </div>
    </nav>
</div>