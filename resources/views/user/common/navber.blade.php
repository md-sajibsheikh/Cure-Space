<div class="content">

    <nav style=" background-color: #90cdf4;" class="navbar navbar-expand  sticky-top px-4 py-0">
        <a href="{{url('/')}}" class="navbar-brand d-flex d-lg-none ">
            <h2 class=" mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars  "></i>
        </a>

        <div class="navbar-nav align-items-center ms-auto">

            <div class="nav-item dropdown relative">
                <a href="#" class="nav-link dropdown-toggle flex items-center" data-bs-toggle="dropdown">
                    <img class="rounded-full border border-gray-300 me-2" src="{{ asset(Auth::user()->img) }}" alt="" style="width: 40px; height: 40px;">
                    <span class="hidden lg:inline-flex text-gray-800 font-semibold">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end border border-gray-300 rounded-lg shadow-lg mt-1">
                    <a href="{{route('user.profile')}}" class="dropdown-item text-gray-800 hover:bg-gray-200">My Profile</a>
                    <div class="dropdown-divider my-1"></div>
                    <a href="{{route('logout')}}" class="dropdown-item text-gray-800 hover:bg-gray-200">Log Out</a>
                </div>
            </div>
        </div>

    </nav>