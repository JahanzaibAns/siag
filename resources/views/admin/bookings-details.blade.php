@extends('admin.layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Appointment Details</h5>
                    <a href="{{ route('admin.bookings') }}" class="btn btn-sm btn-outline-secondary">Back to Appointments</a>
                </div>
                <div class="card-body">
                    <div class="boxStyle">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $appointment->name }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $appointment->email }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ $appointment->phone }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="procedure">Procedure</label>
                                    <input type="text" class="form-control" id="procedure" name="procedure" value="{{ $appointment->procedure }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="doctor">Doctor</label>
                                    <input type="text" class="form-control" id="doctor" name="doctor" value="{{ $appointment->doctor }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="date">Appointment Date</label>
                                    <input type="text" class="form-control" id="date" name="date" value="{{ $appointment->appointment_date->format('M d, Y') }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <form action="{{ route('admin.bookings.update-status', $appointment) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" class="form-control" onchange="this.form.submit()">
                                            <option value="pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                            <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>Booked On</label>
                                    <input type="text" class="form-control" value="{{ $appointment->created_at->format('M d, Y h:i A') }}" disabled>
                                </div>
                            </div>
                            @if($appointment->notes)
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label>Notes</label>
                                    <textarea class="form-control" rows="3" disabled>{{ $appointment->notes }}</textarea>
                                </div>
                            </div>
                            @endif
                        </div>
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
            var table = $('#bookings').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection
