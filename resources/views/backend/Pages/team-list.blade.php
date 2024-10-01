@extends('admin')

@section('main-content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Members</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-2">


    <div class="w-full overflow-x-auto mt-6">
        <table class=" bg-white border rounded-lg w-full">
            <h1 class="bg-gradient-to-r from-blue-500 to-indigo-500 font-black text-xl p-3 text-white text-center   rounded ">Members</h1>
            <thead>
                <tr>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white">#</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white">Image</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white">Full Name</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white">Services</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white">Facebook</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white">Twitter</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white">Instagram</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white">LinkedIn</th>
                    <th class="px-4 py-3 border-b bg-gray-800 text-white">Action</th>
                </tr>
            </thead>


            @foreach($data as $added)
            <tbody>
                <tr class="hover:bg-gray-100">
                    <td class="border px-4 py-2">{{$added->id}}</td>
                    <td class="border px-4 py-2">
                        <img src="{{ asset($added->img) }}" alt="Profile Image" class="w-12 h-12 rounded-full mx-auto">
                    </td>

                    <td class="border px-4 py-2">{{$added->full_name}}</td>
                    <td class="border px-4 py-2">{{$added->services}}</td>
                    <td class="border px-4 py-2"><a href="{{$added->facebook}}" target="_blank" class="text-blue-500"> Facebook</a></td>
                    <td class="border px-4 py-2"><a href="{{$added->twitter}}" target="_blank" class="text-blue-500"> Twitter</a></td>
                    <td class="border px-4 py-2"><a href="{{$added->instagram}}" target="_blank" class="text-pink-500"> Instagram</a></td>
                    <td class="border px-4 py-2"><a href="{{$added->linkedin}}" target="_blank" class="text-blue-700">Linkedin</a></td>
                    <td class="py-2 px-4 border text-center">
                        <div class="flex items-center justify-center space-x-2">
                            <a href="{{route('delete')}}" class="text-red-600 hover:text-red-700 text-xs sm:text-sm">
                                <i class="fas fa-trash"></i> <!-- Delete icon -->
                            </a>
                        </div>
                    </td>

                </tr>


            </tbody>
            @endforeach

        </table>
    </div>

</body>

</html>


@endsection