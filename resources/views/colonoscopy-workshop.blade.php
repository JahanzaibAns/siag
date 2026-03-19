@extends('layout.main')
@section('title')
Hands-on Colonoscopy Workshop | SIAG
@endsection
@section('meta_description')
SIAG hands-on colonoscopy workshop: scope handling, sedation, simulation, live cases. Dates and registration for gastroenterology training.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Hands-on Colonoscopy Workshop</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('workshop') }}">Workshop</a></li>
        <li class="breadcrumb-item active">Hands-on Colonoscopy Workshop</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Hands-on Colonoscopy Workshop</h2>
          </div>
          <p class="cs_service_subtitle">Structured simulation and supervised live-case training at SIAG.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What you’ll learn</h3>
            <ul class="cs_list">
              <li>Principles of colonoscopy and safe scope handling</li>
              <li>Sedation, consent, and complication management</li>
              <li>Mannequin-based simulation before live cases</li>
              <li>Hands-on colonoscopy training under expert supervision</li>
              <li>Post-procedure evaluation, reporting, and follow-up</li>
            </ul>

            <h3 class="cs_service_heading">Why choose SIAG?</h3>
            <p class="cs_service_subtitle">Our colonoscopy course emphasizes structured, step-by-step skill acquisition, combining simulation and supervised real-case exposure. With individualized feedback and faculty mentoring, participants gain both confidence and competence in performing safe and effective colonoscopies.</p>

            <div class="cs_alert cs_alert_info mt-3">
              <p class="mb-0">⚠ <strong>Note:</strong> Dates announced — <strong>30th, 31st March and 1st April 2026</strong>: Hands-on Colonoscopy Workshop 2026.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_110 cs_height_lg_70"></div>
  </section>
@endsection
