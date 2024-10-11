@extends('user')

@section('main-content')

<head>
    <title>Booking List</title>
    <!-- Bootstrap 5 CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        .header-section {
            background-color: #bae6fd;
            padding: 1rem;
            border-radius: 0.5rem;
        }

        .header-section h2 {
            color: #1e293b;
        }

        .table th {
            background-color: #bae6fd;
            color: #1e293b;
        }

        .table td {
            color: #1e293b;
            vertical-align: middle;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {

            .table th,
            .table td {
                font-size: 0.85rem;
                padding: 0.75rem;
            }

            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<div class="container mt-3">
    <!-- Header Section -->
    <div class="header-section text-center">
        <h2>All Bookings</h2>
    </div>

    <div class="table-responsive">
        <!-- Table Design -->
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Date</th>
                    <th>Department</th>
                    <th>Comments</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($Book as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ ucfirst($data->gender) }}</td>
                    <td>{{ $data->date }}</td>
                    <td>{{ $data->department }}</td>
                    <td>{{ $data->comments }}</td>
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
                    <td colspan="10">No bookings found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

@endsection