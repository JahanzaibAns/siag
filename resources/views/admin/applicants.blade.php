@extends('admin.layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <!-- <div class="card-header">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="{{ route('admin.add.job') }}" class="btn theme_btn">Add Job</a>
                        </div>
                    </div>
                </div> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="jobs" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>CV</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ubaid</td>
                                        <td><a href="mailto:s.u.shah@gmail.com">s.u.shah@gmail.com</a></td>
                                        <td><a href="tel:+9230000000">+9230000000</a></td>
                                        <td>Applying Position</td>
                                        <td>
                                            <a href="http://127.0.0.1:8000/contact-us" title="download CV">Download CV</a>
                                        </td>
                                    </tr>
                                
                                    <!-- <tr>
                                        <td colspan="5">No records found.</td>
                                    </tr> -->
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
