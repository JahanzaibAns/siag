@extends('admin.layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            @if($selectedJob)
                                <h5 class="mb-0">Applicants for: <strong>{{ $selectedJob->title }}</strong></h5>
                                <a href="{{ route('admin.applicants') }}" class="btn btn-sm btn-outline-secondary mt-2">View All Applicants</a>
                            @else
                                <h5 class="mb-0">All Job Applicants</h5>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="jobs" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Job Title</th>
                                    <th>Subject</th>
                                    <th>Applied Date</th>
                                    <th>CV</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($applications as $index => $application)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $application->name }}</td>
                                        <td><a href="mailto:{{ $application->email }}">{{ $application->email }}</a></td>
                                        <td><a href="tel:{{ $application->phone }}">{{ $application->phone }}</a></td>
                                        <td>
                                            @if($application->job)
                                                <a href="{{ route('admin.edit.job', $application->job) }}">{{ $application->job->title }}</a>
                                            @else
                                                <span class="text-muted">N/A</span>
                                            @endif
                                        </td>
                                        <td>{{ $application->subject ?? 'N/A' }}</td>
                                        <td>
                                            @if($application->created_at)
                                                <span title="{{ $application->created_at->format('F d, Y h:i A') }}">
                                                    {{ $application->created_at->format('M d, Y') }}
                                                </span>
                                                <br>
                                                <small class="text-muted">{{ $application->created_at->diffForHumans() }}</small>
                                            @else
                                                <span class="text-muted">N/A</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($application->hasCv())
                                                <a href="{{ route('admin.applicants.download-cv', $application) }}" title="Download CV" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-download"></i> Download CV
                                                </a>
                                            @else
                                                <span class="text-muted">CV not available</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No applications found.</td>
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
            var table = $('#jobs').DataTable({
                order: [[6, 'desc']], // Sort by Applied Date column (index 6) in descending order
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection
