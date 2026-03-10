@extends('layout.main')
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
        <!-- Job Item 1 - Gastroenterologist -->
        <div class="careers-job-item">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3 class="careers-job-title">Gastroenterologist</h3>
              <div class="careers-job-company">Sindh Institute of Advance Endoscopy & Gastroenterology</div>
              <div class="careers-job-meta">
                <span><i class="fa-solid fa-location-dot"></i> Karachi</span>
                <span><i class="fa-solid fa-clock"></i> Full Time</span>
                <span><i class="fa-regular fa-calendar"></i> Posted 3 days ago</span>
              </div>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="{{ route('job.details')}}" class="cs_btn cs_style_2">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Job Item 2 - Human Resource Officer -->
        <div class="careers-job-item">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3 class="careers-job-title">Human Resource Officer</h3>
              <div class="careers-job-company">Sindh Institute of Advance Endoscopy & Gastroenterology</div>
              <div class="careers-job-meta">
                <span><i class="fa-solid fa-location-dot"></i> Karachi</span>
                <span><i class="fa-solid fa-clock"></i> Full Time</span>
                <span><i class="fa-regular fa-calendar"></i> Posted 1 month ago</span>
              </div>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="{{ route('job.details')}}" class="cs_btn cs_style_2">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Job Item 3 - Procurement Officer -->
        <div class="careers-job-item">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3 class="careers-job-title">Procurement Officer</h3>
              <div class="careers-job-company">Sindh Institute of Advance Endoscopy & Gastroenterology</div>
              <div class="careers-job-meta">
                <span><i class="fa-solid fa-location-dot"></i> Karachi</span>
                <span><i class="fa-solid fa-clock"></i> Full Time</span>
                <span><i class="fa-regular fa-calendar"></i> Posted 1 month ago</span>
              </div>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="{{ route('job.details')}}" class="cs_btn cs_style_2">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Job Item 4 - Store Helper -->
        <div class="careers-job-item">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3 class="careers-job-title">Store Helper Required!</h3>
              <div class="careers-job-company">Sindh Institute of Advance Endoscopy & Gastroenterology</div>
              <div class="careers-job-meta">
                <span><i class="fa-solid fa-location-dot"></i> Karachi</span>
                <span><i class="fa-solid fa-clock"></i> Full Time</span>
                <span><i class="fa-regular fa-calendar"></i> Posted 5 months ago</span>
              </div>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="{{ route('job.details')}}" class="cs_btn cs_style_2">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Job Item 5 - Clinical Research Nurse -->
        <div class="careers-job-item">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3 class="careers-job-title">Clinical Research Nurse Required!</h3>
              <div class="careers-job-company">Sindh Institute of Advance Endoscopy & Gastroenterology</div>
              <div class="careers-job-meta">
                <span><i class="fa-solid fa-location-dot"></i> Karachi</span>
                <span><i class="fa-solid fa-clock"></i> Full Time</span>
                <span><i class="fa-regular fa-calendar"></i> Posted 5 months ago</span>
              </div>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="{{ route('job.details')}}" class="cs_btn cs_style_2">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Job Item 6 - Manager Finance -->
        <div class="careers-job-item">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3 class="careers-job-title">Manager Finance Required!</h3>
              <div class="careers-job-company">Sindh Institute of Advance Endoscopy & Gastroenterology</div>
              <div class="careers-job-meta">
                <span><i class="fa-solid fa-location-dot"></i> Karachi</span>
                <span><i class="fa-solid fa-clock"></i> Full Time</span>
                <span><i class="fa-regular fa-calendar"></i> Posted 5 months ago</span>
              </div>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="{{ route('job.details')}}" class="cs_btn cs_style_2">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Job Item 7 - Chief Financial Officer -->
        <div class="careers-job-item">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3 class="careers-job-title">Chief Financial Officer Required!</h3>
              <div class="careers-job-company">SIAG</div>
              <div class="careers-job-meta">
                <span><i class="fa-solid fa-location-dot"></i> Karachi</span>
                <span><i class="fa-solid fa-clock"></i> Full Time</span>
                <span><i class="fa-regular fa-calendar"></i> Posted 5 months ago</span>
              </div>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="{{ route('job.details')}}" class="cs_btn cs_style_2">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Job Item 8 - Quality Assurance Officer -->
        <div class="careers-job-item">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3 class="careers-job-title">Quality Assurance Officer</h3>
              <div class="careers-job-company">SIAG</div>
              <div class="careers-job-meta">
                <span><i class="fa-solid fa-location-dot"></i> Karachi</span>
                <span><i class="fa-solid fa-clock"></i> Full Time</span>
                <span><i class="fa-regular fa-calendar"></i> Posted 5 months ago</span>
              </div>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="{{ route('job.details')}}" class="cs_btn cs_style_2">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Job Item 9 - Store Helper -->
        <div class="careers-job-item">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3 class="careers-job-title">Store Helper Required</h3>
              <div class="careers-job-company">SIAG</div>
              <div class="careers-job-meta">
                <span><i class="fa-solid fa-location-dot"></i> Karachi</span>
                <span><i class="fa-solid fa-clock"></i> Full Time</span>
                <span><i class="fa-regular fa-calendar"></i> Posted 8 months ago</span>
              </div>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="{{ route('job.details')}}" class="cs_btn cs_style_2">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
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