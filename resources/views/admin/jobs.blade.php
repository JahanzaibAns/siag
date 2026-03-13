@extends('admin.layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="{{ route('admin.add.job') }}" class="btn theme_btn">Add Job</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="jobs" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Job Type</th>
                                    <th>Applicants</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($jobs as $index => $job)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->location }}</td>
                                        <td>{{ $job->job_type }}</td>
                                        <td>
                                            <a href="{{ route('admin.applicants', ['job' => $job->id]) }}" class="badge bg-primary" style="text-decoration: none;">
                                                {{ $job->applications_count }} {{ $job->applications_count == 1 ? 'Applicant' : 'Applicants' }}
                                            </a>
                                        </td>
                                        <td>
                                            <div class="icon_flex">
                                                <a href="{{ route('admin.edit.job', $job) }}" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.jobs.destroy', $job) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this job?');">
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
                                        <td colspan="6" class="text-center">No jobs found.</td>
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
                order: [[0, 'desc']],
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection
