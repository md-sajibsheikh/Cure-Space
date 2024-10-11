@extends('user')

@section('main-content')

<head>
    <title>Get in Touch</title>
    <!-- Bootstrap 5 CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        .header-section {
            background-color: #bae6fd;
            /* sky-150 color equivalent */
            padding: 1rem;
            border-radius: 0.5rem;
        }

        .header-section h2 {
            color: #1e293b;
            /* Dark color for text */
        }

        .table th {
            background-color: #bae6fd;
            /* sky-150 color for the table header */
            color: #1e293b;
            /* Dark text for the table header */
        }

        .table td {
            background-color: #fff;
            /* White background for table cells */
            color: #1e293b;
            /* Dark text color for table cells */
            vertical-align: middle;
            /* Center align table text */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {

            .table th,
            .table td {
                font-size: 0.85rem;
                /* Adjust font size for smaller screens */
                padding: 0.75rem;
                /* Reduce padding */
            }

            .header-section h2 {
                font-size: 1.5rem;
                /* Adjust header font size for small screens */
            }
        }
    </style>
</head>

<div class="container mt-3">
    <!-- Header Section -->
    <div class="header-section text-center ">
        <h2>Get in Touch</h2>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <!-- Table Design -->
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Project</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contact as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->project }}</td>
                            <td>{{ $data->subject }}</td>
                            <td>{{ $data->message }}</td>
                            <td>
                                @if ($data->status == 'accepted')
                                <span class="badge bg-success">Accepted</span>
                                @elseif ($data->status == 'rejected')
                                <span class="badge bg-danger">Rejected</span>
                                @else
                                <span class="badge bg-warning text-dark">Pending</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">No contact information available.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

@endsection