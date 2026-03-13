@extends('admin.layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="bookings" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Procedure</th>
                                    <th>Doctor</th>
                                    <th>Appointment Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($appointments as $index => $appointment)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $appointment->name }}</td>
                                        <td><a href="mailto:{{ $appointment->email }}">{{ $appointment->email }}</a></td>
                                        <td><a href="tel:{{ $appointment->phone }}">{{ $appointment->phone }}</a></td>
                                        <td>{{ $appointment->procedure }}</td>
                                        <td>{{ $appointment->doctor }}</td>
                                        <td>{{ $appointment->appointment_date->format('M d, Y') }}</td>
                                        <td>
                                            <span class="badge 
                                                @if($appointment->status == 'confirmed') bg-success
                                                @elseif($appointment->status == 'cancelled') bg-danger
                                                @else bg-warning
                                                @endif">
                                                {{ ucfirst($appointment->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="icon_flex">
                                                <a href="{{ route('admin.bookings.details', $appointment) }}" title="View Details">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <form action="{{ route('admin.bookings.destroy', $appointment) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;" title="Delete">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No appointments found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#bookings').DataTable({
                order: [[6, 'desc']], // Order by Appointment Date column (index 6) in descending order
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection
