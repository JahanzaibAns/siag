@extends('layout.main')
@section('title')
Dr. Farooqui Babar Matin | SIAG
@endsection
@section('meta_description')
Profile of Dr. Babar Matin, COO SIAG, In-Charge GI Motility. High-resolution manometry, FibroScan, and healthcare administration.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{ asset('assets/img/banners/our-doctors-bg.jpg') }}">
    <div class="container">
      <h1 class="cs_page_title">Dr. Farooqui Babar Matin</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('our.doctors') }}">Our Doctors</a></li>
        <li class="breadcrumb-item active">Dr. Babar Matin</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_doctor_details_thumbnail position-relative mb-4 mb-lg-5 h-auto">
            <div class="team-thumb">
              <img src="{{ asset('assets/img/team/dr-babar.jpg') }}" alt="Dr. Farooqui Babar Matin" class="img-fluid dr-saad-width">
            </div>
            <div class="team-details-box">
              <h3 class="cs_doctor_title">Dr. Farooqui Babar Matin</h3>
              <h6 class="cs_doctor_subtitle">MBBS (Dow) | Chief Operating Officer (SIAG) | In-Charge, GI Motility, Ultrasound &amp; Fibroscan</h6>
              <p>
                Chief Operating Officer, Sindh Institute of Advanced Gastroenterology (SIAG)<br>
                In-Charge, GI Motility, Ultrasound &amp; Fibroscan Facility, SIAG
              </p>
            </div>
          </div>

          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Profile</h2>
          </div>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">Profile Overview</h3>
            <p class="cs_service_subtitle">Dr. Farooqui Babar Matin is an experienced medical professional and healthcare administrator currently serving as the Chief Operating Officer (COO) at the Sindh Institute of Advanced Gastroenterology (SIAG). In addition to his administrative leadership, he oversees the Gastrointestinal (GI) Motility Unit, including high-resolution oesophageal and anorectal manometry, 24-hour ambulatory pH monitoring, Fibroscan, and interventional ultrasound.</p>
            <p class="cs_service_subtitle">With a strong background in both diagnostic and procedural gastroenterology, Dr. Matin has been performing and supervising GI motility and diagnostic studies since 2008, contributing to the establishment of standardized and high-quality diagnostic services at SIAG. His role integrates clinical expertise with operational management to ensure excellence in patient care and institutional performance.</p>

            <h3 class="cs_service_heading">Areas of Expertise</h3>
            <ul class="cs_list">
              <li>High-resolution oesophageal and anorectal manometry</li>
              <li>24-hour ambulatory pH monitoring</li>
              <li>Fibroscan and interventional ultrasound</li>
              <li>GI motility diagnostics and functional bowel assessment</li>
              <li>Operational leadership and healthcare administration</li>
              <li>Implementation of advanced diagnostic protocols in gastroenterology</li>
            </ul>

            <h3 class="cs_service_heading">Academic &amp; Professional Contributions</h3>
            <p class="cs_service_subtitle">Dr. Matin is part of the national faculty in gastroenterology and has contributed to the training and mentoring of medical professionals in diagnostic GI procedures. His career reflects a sustained commitment to innovation, patient-centered diagnostics, and continuous service improvement in gastroenterology and hepatology care.</p>

            <h3 class="cs_service_heading">Leadership &amp; Affiliations</h3>
            <ul class="cs_list">
              <li>Chief Operating Officer, Sindh Institute of Advanced Gastroenterology (SIAG)</li>
              <li>In-Charge, GI Motility, Ultrasound &amp; Fibroscan Facility, SIAG</li>
              <li>Member, National Faculty (Gastroenterology)</li>
              <li>Former Administrative Officer, Civil Hospital Karachi (since 2006)</li>
            </ul>

            <div class="mt-4">
              <a href="{{ route('our.doctors') }}" class="cs_btn cs_style_1 cs_color_1"><span>Back to Our Doctors</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_110 cs_height_lg_70"></div>
  </section>
@endsection
