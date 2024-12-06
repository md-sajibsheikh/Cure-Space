@extends('admin')

@section('main-content')

<div class=" p-5">
    <h1 class="text-2xl font-bold bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-2 min-w-full text-center rounded-t-lg">All Choose </h1>

    <div class="overflow-x-auto min-w-full">
        <table class="min-w-full bg-white rounded-lg text-center">
            <thead>
                <tr>
                    <th class="py-2 px-4 border w-1/6">Image</th>
                    <th class="py-2 px-4 border w-1/4">Title</th>
                    <th class="py-2 px-4 border w-1/4">Subtitle</th>
                    <th class="py-2 px-4 border w-1/6">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4 border text-center">
                        <img src="{{ asset($data->img) }}" alt="Image" class="h-12 w-12 rounded mx-auto">
                    </td>
                    <td class="py-2 px-4 border break-words">{{ $data->title }}</td>
                    <td class="py-2 px-4 border break-words">{{ $data->subtitle }}</td>
                    <td class="py-2 px-4 border text-center">
                        <div class="flex items-center justify-center text-xl space-x-2">
                            <!-- Edit -->
                            <a href="{{ route('edit', $data->id) }}" class="text-blue-600 text-2xl hover:text-blue-700 text-xs sm:text-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <span class="text-gray-600 text-xs sm:text-sm">|</span>

                            <!-- Delete -->
                            <div> <a class="text-danger  " href="{{ route('whyus.detele', $data->id) }}">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a> </div>


                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection