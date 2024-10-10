@extends('admin')

@section('main-content')

<head>
    <title>Booking List</title>
</head>

<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold text-center rounded-tl-[2px] rounded-tr-[0px] rounded-br-[0px] rounded-bl-[2px] mt-4 bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-1.5">Booking List</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">#</th>
                        <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">User Name & Email</th>
                        <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Patient Name</th>
                        <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Email</th>
                        <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Phone</th>
                        <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Gender</th>
                        <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Date</th>
                        <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Department</th>
                        <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Comments</th>
                        <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Status</th>
                        <th class="py-3 px-4 bg-gray-100 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Book as $data)
                    <tr class="border-b border-gray-200">
                        <td class="py-4 px-4 text-center">{{$data->id}}</td>
                        <td class="py-4 px-4 text-center">{{$data->user->name}} <br>{{$data->user->email}}</td>
                        <td class="py-4 px-4 text-center">{{$data->name}}</td>
                        <td class="py-4 px-4 text-center">{{$data->email}}</td>
                        <td class="py-4 px-4 text-center">{{$data->phone}}</td>
                        <td class="py-4 px-4 text-center">{{$data->gender}}</td>
                        <td class="py-4 px-4 text-center">{{$data->date}}</td>
                        <td class="py-4 px-4 text-center">{{$data->department}}</td>
                        <td class="py-4 px-4 text-center">{{$data->comments}}</td>
                        <td class="py-4 px-6 text-center">
                            @if ($data->status == 'accepted')
                            <span class="inline-block px-3 py-1 text-sm font-semibold bg-green-100 text-green-600 rounded-full">Accepted</span>
                            @elseif ($data->status == 'rejected')
                            <span class="inline-block px-3 py-1 text-sm font-semibold bg-red-100 text-red-600 rounded-full">Rejected</span>
                            @else
                            <span class="inline-block px-3 py-1 text-sm font-semibold bg-yellow-100 text-yellow-600 rounded-full">Pending</span>
                            @endif
                        </td>
                        <td class="py-4 px-6 text-center">
                            <div class="flex justify-center space-x-2">
                                @if ($data->status !== 'accepted')
                                <form action="{{ route('contact.accept', $data->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded shadow-sm text-sm">Accept</button>
                                </form>
                                @endif
                                @if ($data->status !== 'rejected')
                                <form action="{{ route('contact.reject', $data->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded shadow-sm text-sm">Reject</button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

@endsection