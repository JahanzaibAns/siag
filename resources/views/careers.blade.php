@extends('layout.main')
@section('title')
Careers | SIAG
@endsection
@section('meta_description')
Join SIAG. View current job openings, fellowships, and careers in gastroenterology, endoscopy, and healthcare at Civil Hospital Karachi.
@endsection
@section('content')
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Careers</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
        <li class="breadcrumb-item active">Careers</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->

  <!-- Start Open Positions Section -->
  <section class="careers-open-positions-section">
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1">
        <div class="cs_section_heading_left">
          <p class="cs_section_subtitle cs_accent_color wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <span class="cs_shape_left"></span>OPEN POSITIONS
          </p>
          <h2 class="cs_section_title">Current Job Openings</h2>
        </div>
        <div class="cs_section_heading_right">
          <p class="cs_mb_0">Join our team of dedicated healthcare professionals at SIAG</p>
        </div>
      </div>
      <div class="cs_height_50 cs_height_lg_40"></div>

      <div class="careers-job-list">
        @forelse($jobs as $job)
          <div class="careers-job-item">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <h3 class="careers-job-title">{{ $job->title }}</h3>
                <div class="careers-job-company">{{ $job->company }}</div>
                <div class="careers-job-meta">
                  <span><i class="fa-solid fa-location-dot"></i> {{ $job->location }}</span>
                  <span><i class="fa-solid fa-clock"></i> {{ $job->job_type }}</span>
                  <span><i class="fa-regular fa-calendar"></i> Posted {{ $job->posted_date->diffForHumans() }}</span>
                </div>
              </div>
              <div class="col-lg-4 text-lg-end">
                <a href="{{ route('job.details', $job) }}" class="cs_btn cs_style_2">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        @empty
          <div class="careers-job-item">
            <div class="text-center py-5">
              <p>No job openings available at the moment. Please check back later.</p>
            </div>
          </div>
        @endforelse
      </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
  </section>
  <!-- End Open Positions Section -->
  <!-- Font Awesome 6 Kit (if not already included in layout) -->
  <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
  <!-- Fallback CDN if kit doesn't work -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection