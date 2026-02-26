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
                                    <th>Location</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>test 1</td>
                                    <td>test@gmail.com</td>
                                    <td>03001212123</td>
                                    <td>ERCP</td>
                                    <td>Dr Ayesha</td>
                                    <td>02/27/2026</td>
                                </tr>
                                <!-- <tr>
                                    <td colspan="7">No records found.</td>
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
            $('#bookings').DataTable({
                order: [[0, 'desc']], // Order by the first column (ID) in descending order
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection
