@extends('user')

@section('main-content')

<head>
    <title>Booking List</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="container mt-5">
    <!-- Header Section -->
    <div class="pt-3 bg-info">
        <div class="bg-gradient p-3 rounded">
            <h2 class="text-dark text-center">Booking List</h2>
        </div>
    </div>

    <div class="bg-light pb-3 mt-3">
        <!-- Table Design -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>User Name & email</th>
                        <th>Gender</th>
                        <th>Date</th>
                        <th>Department</th>
                        <th>Comments</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @forelse($Book as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->user->name }}<br>{{ $data->user->email }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->department }}</td>
                        <td>{{ $data->comments }}</td>
                        <td class="text-center">

                            @if($data->status == 'accepted')
                            <span class="badge badge-success">Accepted</span>
                            @else
                            <span class="badge badge-danger">Rejected</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10" class="text-center">No bookings found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection