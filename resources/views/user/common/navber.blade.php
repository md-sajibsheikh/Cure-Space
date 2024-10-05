<div class="content">

    <nav style="background-color:#dcd4dd;" class="navbar navbar-expand   sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none ">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>

        <div class="navbar-nav align-items-center ms-auto">


            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="{{ asset(Auth::user()->img) }}" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end  border-1 rounded-0 rounded-bottom m-0">
                    <a href="{{route('user.profile')}}" class="dropdown-item">My Profile</a>
                    <li>
                        <div class="dropdown-divider my-1"></div>
                    </li>
                    <a href="{{route('logout')}}" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>