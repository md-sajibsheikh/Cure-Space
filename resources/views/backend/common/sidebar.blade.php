<body>
    <!-- Layout wrapper -->
    <div class="">
        <div class="">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-gradient-to-l from-blue-500 to-purple-600 text-white">
                <div class="app-brand demo">
                    <a href="{{route('admin')}}" class="app-brand-link">
                        <span class="app-brand-logo demo"></span>
                        <span id="logo" class="app-brand-text text-white demo menu-text fw-bold ms-2">
                            <i class="fas fa-star-of-life me-3"></i>CureSpace
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- side-bar -->
                    <li class="menu-item">
                        <a href="{{route('admin')}}" class="menu-link">
                            <img src="{{ asset('backend/assets/img/icons/team/house.png') }}" width="35px" alt="">
                            <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Dashboards">Dashboard</div>
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
                                <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Booking list">Add Service</div>
                            </a>
                            <a href="{{route('service.list')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/medical-list.png') }}" width="35px" alt="">
                                <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Booking list">All Services</div>
                            </a>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="{{route('bookingList')}}" class="menu-link">
                            <img src="{{ asset('backend/assets/img/icons/team/appointment.png') }}" width="35px" alt="">
                            <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Booking list">Appointment</div>
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
                                <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Get in Touch">Add Team</div>
                            </a>
                            <a href="{{route('team.list')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/team-list.png') }}" width="32px" alt="team.png">
                                <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Get in Touch">All Members</div>
                            </a>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="{{route('contact.list')}}" class="menu-link">
                            <img src="{{ asset('backend/assets/img/icons/team/email.png') }}" width="35px" alt="">
                            <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Get in Touch">Get in Touch</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <img src="{{ asset('backend/assets/img/icons/team/questioning.png') }}" width="40px" alt="">
                                <div class="text-truncate pl-1 mt-2 fw-bold">Why Us</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="hidden dropdown-container">
                            <a href="{{route('add-choose')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/add (2).png') }}" width="35px" alt="">
                                <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Booking list">Add Choose</div>
                            </a>
                            <a href="{{route('all-choose')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/choose-topic.png') }}" width="35px" alt="">
                                <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Booking list">All Choose</div>
                            </a>
                        </div>
                    </li>

                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <img src="{{ asset('backend/assets/img/icons/team/blog.png') }}" width="40px" alt="">
                                <div class="text-truncate pl-1 mt-0 fw-bold">Our Blog</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="hidden dropdown-container">
                            <a href="{{route('add-blog')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/add-blog.png') }}" width="35px" alt="">
                                <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Get in Touch">Add Blog</div>
                            </a>
                            <a href="{{route('all-blog')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/all-blog.png') }}" width="32px" alt="team.png">
                                <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Get in Touch">All Blog</div>
                            </a>
                        </div>
                    </li>

                    <li class="menu-item">
                        <button class="menu-link flex justify-between items-center w-3/4" onclick="toggleDropdown(this)">
                            <div class="flex items-center">
                                <img src="{{ asset('backend/assets/img/icons/team/blog.png') }}" width="40px" alt="">
                                <div class="text-truncate pl-1 mt-0 fw-bold">Settings</div>
                            </div>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="hidden dropdown-container">
                            <a href="{{route('profile')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/add-blog.png') }}" width="35px" alt="">
                                <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Get in Touch">Profile</div>
                            </a>
                            <a href="{{route('site.settings')}}" class="menu-link">
                                <img src="{{ asset('backend/assets/img/icons/team/all-blog.png') }}" width="32px" alt="team.png">
                                <div class="text-truncate pl-1 mt-2 fw-bold" data-i18n="Get in Touch">Site Settings</div>
                            </a>
                        </div>
                    </li>
                </ul>
            </aside>

            <script>
                function toggleDropdown(button) {
                    const dropdown = button.nextElementSibling;
                    dropdown.classList.toggle("hidden");
                }
            </script>
        </div>
    </div>
</body>