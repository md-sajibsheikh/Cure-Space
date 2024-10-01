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
        <div class="bg-gradient p-1 rounded-top" style="background: linear-gradient(to right, #1a202c, #4a5568);">
            <h2 class="text-white text-center">Booking List</h2>
        </div>
    </div>

    <div class="bg-light pb-1">
        <!-- Table Design -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Date</th>
                        <th>Department</th>
                        <th>Comments</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Book as $data)
                    <tr>
                        <td class="text-center">{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->gender}}</td>
                        <td>{{$data->date}}</td>
                        <td>{{$data->department}}</td>
                        <td>{{$data->comments}}</td>
                        <td class="text-center">
                            @if($data->status == 'Confirmed')
                            <span class="badge badge-success">Confirmed</span>
                            @else
                            <span class="badge badge-danger">Pending</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <!-- Edit Icon -->
                            <a href="{{ url('/edit/'.$data->id) }}" class="text-primary mr-3">
                                <i class="fas fa-edit"></i>
                            </a>
                            <!-- Delete Icon -->
                            <a href="{{ url('/delete/'.$data->id) }}" class="text-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection