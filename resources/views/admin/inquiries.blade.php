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
                                    <th>Subject</th>
                                    <th>Phone</th>
                                    <th class="w-50">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>test</td>
                                    <td>test@gmail.com</td>
                                    <td>03000000002</td>
                                    <td>Subject</td>
                                    <td>this is dummy text message</td>
                                </tr>
                                <!-- <tr>
                                    <td colspan="6">No records found.</td>
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
            var table = $('#inquiries').DataTable({
                order: [[0, 'desc']],
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection
