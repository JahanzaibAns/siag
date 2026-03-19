@extends('layout.main')
@section('title')
Tenders | SIAG
@endsection
@section('meta_description')
Current tenders and procurement notices from SIAG. Sindh Institute of Advanced Endoscopy and Gastroenterology, Karachi.
@endsection
@section('content')
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Tenders</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
        <li class="breadcrumb-item active">Tenders</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->
  <!-- Start Service Section -->
  <section class="tenders-section">
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>S.No</th>
              <th>Ref No</th>
              <th>Description</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>OSR-06</td><td>PROVISION OF TRANSPORT SERVICES FOR PICK AND DROP FACILITY FOR SIAG STAFF</td><td>In Progress</td><td><a href="{{ asset('assets/tenders/OSR-06-PROVISION-OF-TRANSPORT-SERVICES-FOR-PICK-AND-DROP-FACILITY-FOR-SIAG-STAFF.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <tr><td>2</td><td>OSR-07</td><td>PROVISION OF FOOD SERVICES FOR STAFF LUNCH & TEA AT SIAG</td><td>In Progress</td><td><a href="{{ asset('assets/tenders/OSR-07-PROVISION-OF-FOOD-SERVICES-FOR-STAFF-LUNCH-TEA-AT-SIAG.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <!-- <tr><td>3</td><td>OTHERS-02</td><td>PROCUREMENT OF MISC. ITEMS, IT EQUIPMENT, AC EQUIPMENT & BUILDING MAINTENANCE ITEMS ON FRAMEWORK CONTRACT BASIS (SPPA RULE 15(B)) (2025-26)</td><td>Closed</td><td><a href="{{ asset('assets/tenders/OTHERS-02-PROCUREMENT-OF-MISC-ITEMS-IT-EQUIPMENT-AC-EQUIPMENT-BUILDING-MAINTENANCE-ITEMS-ON-FRAMEWORK-CONTRACT-BASIS-SPPA-RULE-15B-2025-26.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr> -->
            <!-- <tr><td>4</td><td>UP-01</td><td>PROCUREMENT OF UNIFORM & PROTECTIVE CLOTHING ON FRAMEWORK CONTRACT BASIS (SPPA RULE 15(B)) (2025-26)</td><td>Closed</td><td><a href="{{ asset('assets/tenders/UP-01-PROCUREMENT-OF-UNIFORM-AND-PROTECTIVE-CLOTHING-ON-FRAMEWORK-CONTRACT-BASIS-SPPA-RULE-15B-2025-26.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr> -->
            <tr><td>3</td><td>OSR-05</td><td>SBD PROVISION OF HEALTH TAKAFUL SERVICES (2025-26)</td><td>Closed</td><td><a href="{{ asset('assets/tenders/OSR-05-SBD-PROVISION-OF-HEALTH-TAKAFUL-SERVICES-2025-26.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <tr><td>4</td><td>OSR-04</td><td>PROVISION OF SECURITY SERVICES</td><td>Closed</td><td><a href="{{ asset('assets/tenders/OSR-04-PROVISION-OF-SECURITY-SERVICES-2025-26.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <tr><td>5</td><td>P&M-01</td><td>SBD Procurement of Machinery & Equipment FY 2025-26</td><td>Closed</td><td><a href="{{ asset('assets/tenders/PM-01-SBD-Procurement-of-Machinery-Equipment-FY-2025-26.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <tr><td>6</td><td>PROCSIAG (D&M-02)</td><td>24-25 & 25-26 LOCAL PURCHASE OF OF DRUGS/MEDICINES/SURGICAL/DISPOSABLES/ENDOSC</td><td>Closed</td><td><a href="{{ asset('assets/tenders/Ref.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <tr><td>7</td><td>PROC/SIAG/ (D&M-01)</td><td>24-25 & 25-26 PROCUREMENT OF DRUGS/MEDICINES/SURGICAL/ DISPOSABLES/ENDOSC</td><td>Closed</td><td><a href="{{ asset('assets/tenders/SBD-PROCUREMENT-OF-DRUGS-MEDICINES-SURGICAL.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <tr><td>8</td><td>PROC/SIAG/ (OSR-02)</td><td>24-25 & 25-26 PROVISION OF GROUP LIFE TAKAFUL SERVICES</td><td>Closed</td><td><a href="{{ asset('assets/tenders/OSR-02-SBD-PROVISION-OF-Group-LIFE-TAKAFUL-S.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <tr><td>9</td><td>PROC/SIAG/ (OSR-01)</td><td>24-25 & 25-26 PROVISION OF HEALTH TAKAFUL SERVICES</td><td>Closed</td><td><a href="{{ asset('assets/tenders/OSR-01-SBD-PROVISION-OF-HEALTH-TAKAFUL-SERVI.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <tr><td>10</td><td>OTHERS-01</td><td>SBD Procurement of General & Miscellaneous Items FY 2025-26</td><td>Closed</td><td><a href="{{ asset('assets/tenders/OTHERS-01-SBD-Procurement-of-General-Misce.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <tr><td>11</td><td>OSR-03</td><td>SBD PROVISION OF HEALTH TAKAFUL SERVICES FY 2025-26</td><td>Closed</td><td><a href="{{ asset('assets/tenders/OSR-03-SBD-PROVISION-OF-HEALTH-TAKAFUL-SERVI.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <tr><td>12</td><td>D&M-04</td><td>SBD LOCAL PURCHASE OF DRUGS MEDICINES DISPOSABLE ITEMS ON 247 EMERGENCY BASIS FY 2025-26</td><td>Closed</td><td><a href="{{ asset('assets/tenders/DM-04-SBD-LOCAL-PURCHASE-OF-DRUGS-MEDICINE.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
            <tr><td>13</td><td>D&M-03</td><td>SBD PROCUREMENT OF DRUGS AND MEDICINES FY 2025-26</td><td>Closed</td><td><a href="{{ asset('assets/tenders/DM-03-SBD-PROCUREMENT-OF-DRUGS-AND-MEDICINE.pdf') }}" target="_blank" class="btn btn-primary btn-sm">Download Now</a></td></tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Service Section -->
@endsection