@extends('admin')

@section('main-content')

<div class="p-5">
    <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-500 to-purple-600 p-2 text-center rounded-lg">Service List</h1>

    <div class="overflow-x-auto">
        <div class="rounded-lg shadow-md">
            <table class="min-w-full bg-white shadow-md rounded-lg text-center">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border">Image</th>
                        <th class="py-2 px-4 border">Service Name</th>
                        <th class="py-2 px-4 border">Service Fee</th>
                        <th class="py-2 px-4 border">Title</th>
                        <th class="py-2 px-4 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $data)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border text-center">
                            <img src="{{ asset($data->img) }}" alt="Service Image" class="h-12 w-12 rounded mx-auto">
                        </td>
                        <td class="py-2 px-4 border break-words">{{ $data->service_name }}</td>
                        <td class="py-2 px-4 border break-words">{{ $data->service_fee }}</td>
                        <td class="py-2 px-4 border break-words">{{ $data->title }}</td>
                        <td class="py-2 px-4 border text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <a href="{{ route('service.edit', ['id' => $data->id]) }}" class="text-blue-600 hover:text-blue-700 text-xs sm:text-sm">
                                    <i class="fas fa-edit"></i> <!-- Edit icon -->
                                </a>
                                <span class="text-gray-600 text-xs sm:text-sm">|</span>
                                <a href="{{ route('service.delete', ['id' => $data->id]) }}" class="text-red-600 hover:text-red-700 text-xs sm:text-sm">
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
</div>

@endsection