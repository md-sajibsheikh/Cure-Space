@extends('admin')

@section('main-content')
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-purple-600 text-white flex flex-col">
        <div class="px-4 py-4">
            <h2 class="text-2xl font-bold">CureSpace</h2>
        </div>
        <nav class="mt-10">
            <ul>
                <li class="mb-4">
                    <a href="#"
                        class="flex items-center px-4 py-2 text-lg font-medium hover:bg-purple-700 rounded-lg">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h3.8a2 2 0 012 2v1a2 2 0 01-2 2H4a1 1 0 01-1-1V4zm7 7a2 2 0 100-4 2 2 0 000 4zm5 8h3.5a1 1 0 001-1V4a1 1 0 00-1-1H7.8a2 2 0 00-2 2v2a2 2 0 002 2h10v12a2 2 0 01-2 2zM5 12h.01M4 16h.01M8 16h.01"></path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#"
                        class="flex items-center px-4 py-2 text-lg font-medium hover:bg-purple-700 rounded-lg">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 9a2 2 0 012 2m-2 2a2 2 0 11-4 0m0 0a2 2 0 104 0m1-8a8 8 0 11-8 0 8 8 0 018 0zM4 13h16m-6 4v1a2 2 0 01-4 0v-1"></path>
                        </svg>
                        Profile
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#"
                        class="flex items-center px-4 py-2 text-lg font-medium hover:bg-purple-700 rounded-lg">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M12 5v14"></path>
                        </svg>
                        Settings
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#"
                        class="flex items-center px-4 py-2 text-lg font-medium hover:bg-purple-700 rounded-lg">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2a4 4 0 014-4V7l3 3-3 3v1m0 4h-2a4 4 0 01-4-4V5a2 2 0 012-2h8a2 2 0 012 2v8a4 4 0 01-4 4z"></path>
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <h1 class="text-3xl font-semibold text-gray-800">Welcome to CureSpace</h1>
        <p class="mt-4 text-gray-600">Here is your main content section.</p>
    </div>
</div>
@endsection