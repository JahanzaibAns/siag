@extends('layout.main')
@section('title')
Hands-on EUS Workshop | SIAG
@endsection
@section('meta_description')
SIAG EUS workshop: knobology, anatomy, staging, FNA/FNB. Didactic and hands-on endoscopic ultrasound training in Karachi.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Hands-on EUS Workshop</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('workshop') }}">Workshop</a></li>
        <li class="breadcrumb-item active">Hands-on EUS Workshop</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Hands-on EUS Workshop</h2>
          </div>
          <p class="cs_service_subtitle">Didactic sessions, live case observation, and hands-on EUS practice at SIAG.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What you’ll learn</h3>
            <ul class="cs_list">
              <li>Knobology and handling of EUS scopes</li>
              <li>Anatomy of GI tract, pancreas, bile ducts, and liver on EUS</li>
              <li>Staging of GI and hepatobiliary cancers</li>
              <li>Submucosal and rectal EUS techniques</li>
              <li>FNB/FNA techniques for tissue acquisition</li>
            </ul>

            <h3 class="cs_service_heading">Why choose SIAG?</h3>
            <p class="cs_service_subtitle">Our EUS course combines didactic sessions, live case observation, and hands-on practice. Participants are guided through structured learning — from basic anatomy to advanced diagnostic interventions — making SIAG the preferred platform for EUS training in the region.</p>

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
