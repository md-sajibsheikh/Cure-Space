@extends('user')

@section('main-content')

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="container">
    <div class="pt-3 mt-2 bg-info">
        <div class="bg-gradient p-1 rounded-top" style="background: linear-gradient(to right, #1a202c, #4a5568);">
            <h2 class="text-white text-center">Get in Touch</h2>
        </div>
    </div>

    <div class="bg-light  pb-1 rounded">
        <!-- Responsive Table Container -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Project</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contact as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->project}}</td>
                        <td>{{$data->subject}}</td>
                        <td>{{$data->message}}</td>
                        <td class="text-danger">{{$data->status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection