@extends('admin.layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="boxStyle">
                        <div class="row">
                            <!-- Existing Fields -->
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="Test" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="test@gmail.com" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="030012121212" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="procedure">Procedure</label>
                                    <input type="text" class="form-control" id="procedure" name="procedure" value="ERCP" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="doctor">Doctor</label>
                                    <input type="text" class="form-control" id="doctor" name="doctor" value="Dr. Ayesha" disabled>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="date">Booking Date</label>
                                    <input type="text" class="form-control" id="date" name="date" value="02/27/2026" disabled>
                                </div>
                            </div>
                            
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
