@extends('admin')

@section('main-content')

<head>
    <title>Booking List</title>
</head>

<body class=" p-8">

    <div class="container mx-auto">
        <h2 class="text-2xl font-bold text-center mt-4 bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-1.5 ">Get in Touch</h2>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">#</th>
                    <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Name</th>
                    <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Email</th>
                    <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Phone</th>
                    <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Project</th>
                    <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Subject</th>
                    <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Message</th>
                    <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Status</th>
                    <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contact as $data)
                <tr class="border-b border-gray-200">
                    <td class="py-4 px-4">{{$data->id}}</td>
                    <td class="py-4 px-4">{{$data->name}}</td>
                    <td class="py-4 px-4">{{$data->email}}</td>
                    <td class="py-4 px-4">{{$data->phone}}</td>
                    <td class="py-4 px-4">{{$data->project}}</td>
                    <td class="py-4 px-4">{{$data->subject}}</td>
                    <td class="py-4 px-4">{{$data->message}}</td>
                    <td class="py-4 px-4 text-green-500">{{$data->status}}</td>
                    <td class="py-7 px-4 flex space-x-5">
                        <i class="fa-regular fa-calendar-check text-blue-500 cursor-pointer" title="View Details"></i>
                        <i class="fa-solid fa-pen text-yellow-500 cursor-pointer" title="Edit Booking"></i>
                        <i class="fa-solid fa-trash text-red-500 cursor-pointer" title="Delete Booking"></i>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>

@endsection