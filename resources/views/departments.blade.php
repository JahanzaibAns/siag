@extends('layout.main')
@section('content')
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Our Departments</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
        <li class="breadcrumb-item active">Departments</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->
  <!-- Start Service Section -->
  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_type_1">
        <div class="cs_section_heading_left">
          <p class="cs_section_subtitle cs_accent_color">
            <span class="cs_shape_left"></span>
            SPECIALIZED DEPARTMENTS
          </p>
          <h2 class="cs_section_title">Our Medical Excellence</h2>
        </div>
        <div class="cs_section_heading_right">
          <i class="fas fa-quote-left cs_accent_color me-2"></i>
          We are privileged to work with hundreds of future-thinking medical professionals, 
          utilizing cutting-edge technology and advanced research to ensure our patients 
          feel safe, comfortable, and confident in our care.
          <i class="fas fa-quote-right cs_accent_color ms-2"></i>
        </div>
      </div>
      <div class="cs_height_50 cs_height_lg_50"></div>
      <div class="row cs_row_gap_30 cs_gap_y_30">
        <!-- Endoscopy Unit -->
        <div class="col-xl-4 col-lg-6 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_gray_bg cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <i class="fas fa-stethoscope fa-3x cs_accent_color"></i>
              </div>
              <h3 class="iconbox_index">01</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="{{ route('endoscopy.unit') }}">Endoscopy Unit</a></h3>
            <p class="cs_iconbox_subtitle m-0">Advanced diagnostic and therapeutic endoscopic procedures with precision</p>
          </div>
        </div>
        
        <!-- Advanced Diagnostic Technologies -->
        <div class="col-xl-4 col-lg-6 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_gray_bg cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <i class="fas fa-microscope fa-3x cs_accent_color"></i>
              </div>
              <h3 class="iconbox_index">02</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="{{ route('advanced.diagnostic.technologies') }}">Advanced Diagnostic Technologies</a></h3>
            <p class="cs_iconbox_subtitle m-0">State-of-the-art imaging and molecular diagnostics for accurate results</p>
          </div>
        </div>
        
        <!-- Innovation and Technology Lab -->
        <div class="col-xl-4 col-lg-6 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_gray_bg cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <i class="fas fa-flask fa-3x cs_accent_color"></i>
              </div>
              <h3 class="iconbox_index">03</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="{{ route('innovation.and.technology.lab') }}">Innovation and Technology Lab</a></h3>
            <p class="cs_iconbox_subtitle m-0">Pioneering medical breakthroughs through cutting-edge research</p>
          </div>
        </div>
        
        <!-- Sedation and Anesthesia Unit -->
        <div class="col-xl-4 col-lg-6 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_gray_bg cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <i class="fas fa-syringe fa-3x cs_accent_color"></i>
              </div>
              <h3 class="iconbox_index">04</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="{{ route('sedation.and.anesthesia.unit') }}">Sedation and Anesthesia Unit</a></h3>
            <p class="cs_iconbox_subtitle m-0">Patient-centered sedation and pain management by expert anesthesiologists</p>
          </div>
        </div>
        
        <!-- Clinical Research and Trials -->
        <div class="col-xl-4 col-lg-6 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_gray_bg cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <i class="fas fa-dna fa-3x cs_accent_color"></i>
              </div>
              <h3 class="iconbox_index">05</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="{{ route('clinical.research.and.trials') }}">Clinical Research and Trials</a></h3>
            <p class="cs_iconbox_subtitle m-0">Advancing medicine through innovative clinical research programs</p>
          </div>
        </div>
      </div>
      
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Service Section -->
@endsection