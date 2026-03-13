@extends('admin.layouts.main')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="inquiries" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Submitted</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($inquiries as $index => $inquiry)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $inquiry->name }}</td>
                                        <td><a href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a></td>
                                        <td><a href="tel:{{ $inquiry->phone }}">{{ $inquiry->phone }}</a></td>
                                        <td>{{ $inquiry->subject ?? 'N/A' }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($inquiry->message, 100) }}</td>
                                        <td>
                                            <span title="{{ $inquiry->created_at->format('F d, Y h:i A') }}">
                                                {{ $inquiry->created_at->format('M d, Y') }}
                                            </span>
                                            <br>
                                            <small class="text-muted">{{ $inquiry->created_at->diffForHumans() }}</small>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No inquiries found.</td>
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
            var table = $('#inquiries').DataTable({
                order: [[6, 'desc']], // Sort by Submitted Date column (index 6) in descending order
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection
