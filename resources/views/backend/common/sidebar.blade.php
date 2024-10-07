<body class=""> <!-- Light sky blue background for body -->
    <!-- Layout wrapper -->
    <div class="mt-2">
        <div class="flex">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-gradient-to-l from-sky-100 to-sky-100 text-gray-900" style="max-height: 100vh; overflow-y: auto;"> <!-- Light gradient sidebar background -->
                <div class="app-brand demo">
                    <a href="{{route('admin')}}" class="app-brand-link">
                        <span class="app-brand-logo demo"></span>
                        <span id="logo" class="app-brand-text text-gray-900 demo menu-text fw-bold ms-2">
                            <i class="fas fa-star-of-life me-3"></i>CureSpace
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Sidebar Items -->
                    <li class="menu-item">
                        <a href="{{route('admin')}}" class="menu-link">
                            <img src="{{ asset('backend/assets/img/icons/team/house.png') }}" width="35px" alt="">
                            <div class="text-truncate pl-1 mt-2 fw-bold">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <img src="{{ asset('backend/assets/img/icons/team/our-services.png') }}" width="40px" alt="">
                                <div class="text-truncate pl-1 mt-2 fw-bold">Our Service</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="hidden dropdown-container">
                            <a href="{{route('add.service')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/healthcare.png') }}" width="35px" alt="">
                                <div class="text-truncate pl-1 mt-2 fw-bold">Add Service</div>
                            </a>
                            <a href="{{route('service.list')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/medical-list.png') }}" width="35px" alt="">
                                <div class="text-truncate pl-1 mt-2 fw-bold">All Services</div>
                            </a>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="{{route('bookingList')}}" class="menu-link">
                            <img src="{{ asset('backend/assets/img/icons/team/appointment.png') }}" width="35px" alt="">
                            <div class="text-truncate pl-1 mt-2 fw-bold">Appointment</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <img src="{{ asset('backend/assets/img/icons/team/team.png') }}" width="40px" alt="">
                                <div class="text-truncate pl-1 mt-2 fw-bold">Our Team</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="hidden dropdown-container">
                            <a href="{{route('add.team')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/add.png') }}" width="35px" alt="">
                                <div class="text-truncate pl-1 mt-2 fw-bold">Add Team</div>
                            </a>
                            <a href="{{route('team.list')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/team-list.png') }}" width="32px" alt="team.png">
                                <div class="text-truncate pl-1 mt-2 fw-bold">All Members</div>
                            </a>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="{{route('contact.list')}}" class="menu-link">
                            <img src="{{ asset('backend/assets/img/icons/team/email.png') }}" width="35px" alt="contact.png">
                            <div class="text-truncate pl-1 mt-2 fw-bold">Get in Touch</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <img src="{{ asset('backend/assets/img/icons/team/questioning.png') }}" width="40px" alt="question.png">
                                <div class="text-truncate pl-1 mt-2 fw-bold">Why Us</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="hidden dropdown-container">
                            <a href="{{route('add-choose')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/add (2).png') }}" width="35px" alt="add-choose.png">
                                <div class="text-truncate pl-1 mt-2 fw-bold">Add Choose</div>
                            </a>
                            <a href="{{route('all-choose')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/choose-topic.png') }}" width="35px" alt="choose.png">
                                <div class="text-truncate pl-1 mt-2 fw-bold">All Choose</div>
                            </a>
                        </div>
                    </li>

                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <img src="{{ asset('backend/assets/img/icons/team/blog.png') }}" width="40px" alt="blog.png">
                                <div class="text-truncate pl-1 mt-0 fw-bold">Our Blog</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="hidden dropdown-container">
                            <a href="{{route('add-blog')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/add-blog.png') }}" width="35px" alt="add-blog.png">
                                <div class="text-truncate pl-1 mt-2 fw-bold">Add Blog</div>
                            </a>
                            <a href="{{route('all-blog')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/all-blog.png') }}" width="32px" alt="all-blog.png">
                                <div class="text-truncate pl-1 mt-2 fw-bold">All Blog</div>
                            </a>
                        </div>
                    </li>

                    <!-- Settings Section with Profile and Logo Dropdown -->
                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <img src="{{ asset('backend/assets/img/icons/team/settings.png') }}" width="40px" alt="settings.png">
                                <div class="text-truncate pl-1 mt-0 fw-bold">Settings</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>

                        <div class="hidden dropdown-container">
                            <!-- Profile Link -->
                            <a href="{{route('profile')}}" class="menu-link">
                                <div class="flex items-center">
                                    <img src="{{ asset('backend/assets/img/icons/team/profile.png') }}" width="35px" alt="profile.png">
                                    <div class="text-truncate pl-1 mt-2 fw-bold">Profile</div>
                                </div>
                            </a>

                            <!-- Logo Settings Dropdown with button toggle -->
                            <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleLogoDropdown(this)">
                                <div class="flex items-center">
                                    <img src="{{ asset('backend/assets/img/icons/team/logo.png') }}" width="40px" alt="logo.png">
                                    <div class="text-truncate pl-1 mt-2 fw-bold">Pages</div>
                                </div>
                                <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="hidden logo-dropdown-container">
                                <a href="{{route('site.home')}}" class="menu-link">
                                    <div class="text-truncate pl-1 mt-2 fw-bold">Home page</div>
                                </a>
                                <a href="{{route('site.about')}}" class="menu-link">
                                    <div class="text-truncate pl-1 mt-2 fw-bold">About page</div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </aside>

            <script>
                function toggleDropdown(button) {
                    const dropdown = button.nextElementSibling;
                    dropdown.classList.toggle("hidden");
                }

                function toggleLogoDropdown(button) {
                    const logoDropdown = button.nextElementSibling;
                    logoDropdown.classList.toggle("hidden");
                }
            </script>
        </div>
    </div>
</body>