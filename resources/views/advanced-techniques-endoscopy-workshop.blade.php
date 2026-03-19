@extends('layout.main')
@section('title')
Advanced Techniques in Endoscopy Workshop | SIAG
@endsection
@section('meta_description')
SIAG advanced endoscopy workshop: SpyGlass, lithotripsy, RFA, EMR, stricture dilation. For experienced gastroenterologists.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Advanced Techniques in Endoscopy Workshop</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('workshop') }}">Workshop</a></li>
        <li class="breadcrumb-item active">Advanced Techniques in Endoscopy Workshop</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Advanced Techniques in Endoscopy Workshop</h2>
          </div>
          <p class="cs_service_subtitle">Advanced therapeutic endoscopy for experienced gastroenterologists at SIAG.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What you’ll learn</h3>
            <ul class="cs_list">
              <li>Novel therapeutic procedures including Spyglass cholangioscopy, lithotripsy, and RFA</li>
              <li>Advanced colonoscopy techniques (EMR, polypectomy, stricture dilation)</li>
              <li>Endoscopic management of complex biliary and pancreatic cases</li>
              <li>Integration of endoscopy with imaging and multidisciplinary care</li>
            </ul>

            <h3 class="cs_service_heading">Why choose SIAG?</h3>
            <p class="cs_service_subtitle">This workshop is tailored for gastroenterologists who already have baseline endoscopy experience and wish to expand their practice into advanced therapeutic procedures. SIAG’s cutting-edge infrastructure and experienced trainers ensure exposure to techniques rarely available in public-sector training across South Asia.</p>

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
