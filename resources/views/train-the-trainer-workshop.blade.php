@extends('layout.main')
@section('title')
Train the Trainer Workshop | SIAG
@endsection
@section('meta_description')
SIAG Train the Trainer: adult learning, simulators, curricula design, feedback. For senior gastroenterologists supervising fellows.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Train the Trainer Workshop</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('workshop') }}">Workshop</a></li>
        <li class="breadcrumb-item active">Train the Trainer Workshop</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Train the Trainer Workshop</h2>
          </div>
          <p class="cs_service_subtitle">Teaching methodology and sustainable GI training programs at SIAG.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What you’ll learn</h3>
            <ul class="cs_list">
              <li>Principles of adult learning and competency-based training</li>
              <li>Effective use of simulators, models, and e-portfolios in teaching</li>
              <li>Designing and evaluating structured endoscopy curricula</li>
              <li>Giving feedback and assessing trainee performance</li>
              <li>Strategies to set up sustainable training programs in your own institutions</li>
            </ul>

            <h3 class="cs_service_heading">Why choose SIAG?</h3>
            <p class="cs_service_subtitle">SIAG not only builds skilled endoscopists but also develops future trainers. This program is designed for senior gastroenterologists who supervise fellows and want to enhance their teaching methodology. By the end of the workshop, participants leave with practical frameworks to become recognized mentors in GI training.</p>

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

