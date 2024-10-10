@extends('admin')

@section('main-content')

<div class="bg-gray-100 p-4">
    <div class="w-full overflow-x-auto mt-6">
        <h1 class="bg-gradient-to-r from-blue-500 to-indigo-500 font-black text-xl p-3 text-white text-center rounded">Members</h1>
        <table class="min-w-full bg-white border rounded-lg mt-2">
            <thead>
                <tr>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white text-left">#</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white text-left">Image</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white text-left">Full Name</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white text-left">Services</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white text-left">Facebook</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white text-left">Twitter</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white text-left">Instagram</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white text-left">LinkedIn</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $added)
                <tr class="hover:bg-gray-100">
                    <td class="border px-4 py-2">{{$added->id}}</td>
                    <td class="border px-4 py-2">
                        <img src="{{ asset($added->img) }}" alt="Profile Image" class="w-12 h-12 rounded-full mx-auto">
                    </td>
                    <td class="border px-4 py-2">{{$added->full_name}}</td>
                    <td class="border px-4 py-2">{{$added->services}}</td>
                    <td class="border px-4 py-2"><a href="{{$added->facebook}}" target="_blank" class="text-blue-500">Facebook</a></td>
                    <td class="border px-4 py-2"><a href="{{$added->twitter}}" target="_blank" class="text-blue-500">Twitter</a></td>
                    <td class="border px-4 py-2"><a href="{{$added->instagram}}" target="_blank" class="text-pink-500">Instagram</a></td>
                    <td class="border px-4 py-2"><a href="{{$added->linkedin}}" target="_blank" class="text-blue-700">LinkedIn</a></td>
                    <td class="py-2 px-4 border text-center">
                        <div class="flex items-center justify-center space-x-2">
                            <a href="{{ route('delete', ['id' => $added->id]) }}" class="text-red-600 hover:text-red-700 text-xs sm:text-sm">
                                <i class="fas fa-trash"></i> <!-- Delete icon -->
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection