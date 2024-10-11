@extends('admin')

@section('main-content')
<div class="container-fluid pt-4 px-4">
    <div class="flex flex-wrap gap-4">

        <!-- Total Bookings Card -->
        <div class="w-full sm:w-1/2 xl:w-1/5">
            <div class="bg-white rounded-lg shadow-md flex items-center justify-between p-6">
                <i class="fa fa-calendar-check fa-3x text-green-500"></i>
                <div class="ms-3">
                    <p class="text-gray-600 mb-2">Total Bookings</p>
                    <h6 class="text-2xl font-semibold text-gray-900">{{ $totalBookings }}</h6> <!-- Display Total Bookings -->
                </div>
            </div>
        </div>

        <!-- Total Contact Us Card -->
        <div class="w-full sm:w-1/2 xl:w-1/5">
            <div class="bg-white rounded-lg shadow-md flex items-center justify-between p-6">
                <i class="fa fa-address-book fa-3x text-indigo-500"></i>
                <div class="ms-3">
                    <p class="text-gray-600 mb-2">Total Contact Us</p>
                    <h6 class="text-2xl font-semibold text-gray-900">{{ $totalContacts ?? 0 }}</h6> <!-- Display Total Contacts -->
                </div>
            </div>
        </div>

        <!-- Total Team Members Card -->
        <div class="w-full sm:w-1/2 xl:w-1/5">
            <div class="bg-white rounded-lg shadow-md flex items-center justify-between p-6">
                <i class="fa fa-users fa-3x text-blue-500"></i>
                <div class="ms-3">
                    <p class="text-gray-600 mb-2">Total Members</p>
                    <h6 class="text-2xl font-semibold text-gray-900">{{ $totalMembers ?? 0 }}</h6> <!-- Display Total Members -->
                </div>
            </div>
        </div>

        <!-- Total Services Card -->
        <div class="w-full sm:w-1/2 xl:w-1/5">
            <div class="bg-white rounded-lg shadow-md flex items-center justify-between p-6">
                <i class="fa fa-cogs fa-3x text-purple-500"></i>
                <div class="ms-3">
                    <p class="text-gray-600 mb-2">Total Services</p>
                    <h6 class="text-2xl font-semibold text-gray-900">{{ $totalServices ?? 0 }}</h6> <!-- Display Total Services -->
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
