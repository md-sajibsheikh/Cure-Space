<body class="text-center text-black"> <!-- Light sky blue background for body -->
    <!-- Layout wrapper -->
    <div class="mt-2">
        <div class="flex">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-sky-200" style="max-height: 100vh; overflow-y: auto;"> <!-- Light gradient sidebar background -->
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
                        <a href="{{route('admin')}}" class="menu-link flex items-center">
                            <i class="fas fa-tachometer-alt text-gray-500 text-xl mr-2"></i>
                            <div class="text-truncate font-bold">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <i class="fas fa-concierge-bell text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">Our Services</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="hidden dropdown-container">
                            <a href="{{route('add.service')}}" class="menu-link flex items-center">
                                <i class="fas fa-plus-circle text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">Add Service</div>
                            </a>
                            <a href="{{route('service.list')}}" class="menu-link flex items-center">
                                <i class="fas fa-list-alt text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">All Services</div>
                            </a>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="{{route('bookingList')}}" class="menu-link flex items-center">
                            <i class="fas fa-calendar-check text-gray-500 text-xl mr-2"></i>
                            <div class="text-truncate font-bold">Appointments</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <i class="fas fa-users text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">Our Team</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="hidden dropdown-container">
                            <a href="{{route('add.team')}}" class="menu-link flex items-center">
                                <i class="fas fa-user-plus text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">Add Team</div>
                            </a>
                            <a href="{{route('team.list')}}" class="menu-link flex items-center">
                                <i class="fas fa-users-cog text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">All Members</div>
                            </a>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="{{route('contact.list')}}" class="menu-link flex items-center">
                            <i class="fas fa-envelope text-gray-500 text-xl mr-2"></i>
                            <div class="text-truncate font-bold">Get in Touch</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <i class="fas fa-question-circle text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">Why Us</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="hidden dropdown-container">
                            <a href="{{route('add-choose')}}" class="menu-link flex items-center">
                                <i class="fas fa-plus-circle text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">Add Choose</div>
                            </a>
                            <a href="{{route('all-choose')}}" class="menu-link flex items-center">
                                <i class="fas fa-th-list text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">All Choose</div>
                            </a>
                        </div>
                    </li>

                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <i class="fas fa-blog text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">Our Blog</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="hidden dropdown-container">
                            <a href="{{route('add-blog')}}" class="menu-link flex items-center">
                                <i class="fas fa-pencil-alt text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">Add Blog</div>
                            </a>
                            <a href="{{route('all-blog')}}" class="menu-link flex items-center">
                                <i class="fas fa-file-alt text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">All Blog</div>
                            </a>
                        </div>
                    </li>

                    <!-- Settings Section with Profile and Logo Dropdown -->
                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <i class="fas fa-cog text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">Settings</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>

                        <div class="hidden dropdown-container">
                            <!-- Profile Link -->
                            <a href="{{route('profile')}}" class="menu-link flex items-center">
                                <i class="fas fa-user text-gray-500 text-xl mr-2"></i>
                                <div class="text-truncate font-bold">Profile</div>
                            </a>

                            <!-- Logo Settings Dropdown with button toggle -->
                            <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleLogoDropdown(this)">
                                <div class="flex items-center">
                                    <i class="fas fa-file text-gray-500 text-xl mr-2"></i>
                                    <div class="text-truncate font-bold">Pages</div>
                                </div>
                                <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="hidden logo-dropdown-container">
                                <a href="{{route('site.home')}}" class="menu-link flex items-center">
                                    <div class="text-truncate font-bold">Home</div>
                                </a>
                                <a href="{{route('site.contact')}}" class="menu-link flex items-center">
                                    <div class="text-truncate font-bold">Contact</div>
                                </a>
                                <a href="{{route('site.about')}}" class="menu-link flex items-center">
                                    <div class="text-truncate font-bold">About</div>
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