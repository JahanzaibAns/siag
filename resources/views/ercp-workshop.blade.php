@extends('layout.main')
@section('title')
Hands-on ERCP Workshop | SIAG
@endsection
@section('meta_description')
SIAG ERCP workshop: fluoroscopy, cannulation, live cases, complication management. Few in Pakistan offering live ERCP exposure in public sector.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Hands-on ERCP Workshop</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('workshop') }}">Workshop</a></li>
        <li class="breadcrumb-item active">Hands-on ERCP Workshop</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Hands-on ERCP Workshop</h2>
          </div>
          <p class="cs_service_subtitle">Live-case ERCP training with internationally trained faculty at SIAG.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What you’ll learn</h3>
            <ul class="cs_list">
              <li>Basics of fluoroscopy, radiology safety, and scope handling</li>
              <li>Cannulation techniques and accessory use</li>
              <li>Hands-on practice with real cases under senior faculty supervision</li>
              <li>Managing complications such as bleeding, perforation, and pancreatitis</li>
              <li>Scope cleaning, documentation, and reporting standards</li>
            </ul>

            <h3 class="cs_service_heading">Why choose SIAG?</h3>
            <p class="cs_service_subtitle">SIAG’s ERCP workshop is among the few in Pakistan offering live case exposure in a heritage-public setup, guided by internationally trained endoscopists. With small group sizes and focused teaching, participants master practical skills that directly translate into safer, more effective patient care.</p>

            <div class="cs_alert cs_alert_info mt-3">
              <p class="mb-0">⚠ <strong>Note:</strong> Dates are not fixed in advance. Please check this page regularly for upcoming workshop announcements.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_110 cs_height_lg_70"></div>
  </section>
@endsection
