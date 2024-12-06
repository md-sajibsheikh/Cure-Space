@extends('admin')

@section('main-content')
<div class="container-fluid pt-4 px-4 text-center">
    <!-- Style for custom animations -->
    <style>
        /* Fade-in animation on page load */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Slide-in from the bottom animation */
        @keyframes slideInFromBottom {
            0% {
                transform: translateY(20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Apply the animations */
        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        .slide-in-bottom {
            animation: slideInFromBottom 0.8s ease-out forwards;
        }
    </style>

    <div class="flex flex-wrap gap-6 ml-12">

        <!-- Total Bookings Card -->
        <div class="w-full sm:w-1/2 xl:w-1/5 mb-4 transform transition duration-300 hover:scale-105 hover:shadow-xl fade-in slide-in-bottom">
            <div class="bg-white rounded-lg shadow-md flex items-center justify-between p-8">
                <i class="fa fa-calendar-check fa-3x text-green-500"></i>
                <div class="ms-3">
                    <p class="text-gray-600 mb-2">Total Bookings</p>
                    <h6 class="text-2xl font-semibold text-gray-900">{{ $totalBookings }}</h6> <!-- Display Total Bookings -->
                </div>
            </div>
        </div>

        <!-- Total Contact Us Card -->
        <div class="w-full sm:w-1/2 xl:w-1/5 mb-4 transform transition duration-300 hover:scale-105 hover:shadow-xl fade-in slide-in-bottom">
            <div class="bg-white rounded-lg shadow-md flex items-center justify-between p-8">
                <i class="fa fa-address-book fa-3x text-indigo-500"></i>
                <div class="ms-3">
                    <p class="text-gray-600 mb-2">Total Contacts</p>
                    <h6 class="text-2xl font-semibold text-gray-900">{{ $totalContacts ?? 0 }}</h6> <!-- Display Total Contacts -->
                </div>
            </div>
        </div>

        <!-- Total Team Members Card -->
        <div class="w-full sm:w-1/2 xl:w-1/5 mb-4 transform transition duration-300 hover:scale-105 hover:shadow-xl fade-in slide-in-bottom">
            <div class="bg-white rounded-lg shadow-md flex items-center justify-between p-8">
                <i class="fa fa-users fa-3x text-blue-500"></i>
                <div class="ms-3">
                    <p class="text-gray-600 mb-2">Available Members</p>
                    <h6 class="text-2xl font-semibold text-gray-900">{{ $totalMembers ?? 0 }}</h6> <!-- Display Total Members -->
                </div>
            </div>
        </div>

        <!-- Total Services Card -->
        <div class="w-full sm:w-1/2 xl:w-1/5 mb-4 transform transition duration-300 hover:scale-105 hover:shadow-xl fade-in slide-in-bottom">
            <div class="bg-white rounded-lg shadow-md flex items-center justify-between p-8">
                <i class="fa fa-cogs fa-3x text-purple-500"></i>
                <div class="ms-3">
                    <p class="text-gray-600 mb-2">Available Services</p>
                    <h6 class="text-2xl font-semibold text-gray-900">{{ $totalServices ?? 0 }}</h6> <!-- Display Total Services -->
                </div>
            </div>
        </div>

    </div>
</div>
@endsection