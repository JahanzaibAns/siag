@extends('layout.main')
@section('title')
Sessions | SIAG
@endsection
@section('meta_description')
SIAG academic sessions: UK training guide, AI in research, occupational safety, grant writing. CME workshops and career guidance.
@endsection
@section('content')
<!-- Start Page Heading -->
<section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay"
    data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
        <h1 class="cs_page_title">Sessions</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item active">Sessions</li>
        </ol>
    </div>
</section>
<!-- End Page Heading -->
<section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_type_1">
        <div class="cs_section_heading_left">
          <p class="cs_section_subtitle cs_accent_color"><span class="cs_shape_left"></span>View All Sessions</p>
          <!-- <h2 class="cs_section_title">All The Great Work That We Done</h2> -->
        </div>
        <!-- <div class="cs_section_heading_right">We are privileged to work with hundreds of future-thinking
          medial,including many of the world’s top hardware, software, and brands , feel safe and comfortable in
          establishing.</div> -->
      </div>
      <div class="cs_height_50 cs_height_lg_50"></div>
    </div>
    <div class="container-fluide">
      <div class="cs_project_grid cs_style_1">
        <div class="cs_project_item">
          <div class="cs_card cs_style_5">
            <div class="cs_card_thumbnail">
              <img src="{{ asset('assets/img/sessions/research.jpg')}}" alt="Project Image">
            </div>
            <div class="cs_card_info_wrapper">
              <div class="cs_card_index cs_white_color">01</div>
              <div class="cs_card_text">
                <h3 class="cs_card_title cs_white_color mb-0"><a href="{{ route('session.ai.sessions') }}">Research Reinvented: The Power of Artificial Intelligence</a></h3>
                <!-- <p class="cs_card_subtitle cs_white_color mb-0">Medical / Doctor</p> -->
              </div>
              <a href="{{ route('session.ai.sessions') }}" class="cs_iconbox_btn cs_center"><i class="fa-solid fa-circle-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="cs_project_item">
          <div class="cs_card cs_style_5">
            <div class="cs_card_thumbnail">
              <img src="{{ asset('assets/img/sessions/occupational.jpeg')}}" alt="Project Image">
            </div>
            <div class="cs_card_info_wrapper">
              <div class="cs_card_index cs_white_color">02</div>
              <div class="cs_card_text">
                <h3 class="cs_card_title cs_white_color mb-0"><a href="{{ route('session.occupational.safety') }}">Occupational Safety Session: Managing Needle-stick and Sharps Injuries</a></h3>
                <!-- <p class="cs_card_subtitle cs_white_color mb-0">Medical / Doctor</p> -->
              </div>
              <a href="{{ route('session.occupational.safety') }}" class="cs_iconbox_btn cs_center"><i class="fa-solid fa-circle-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="cs_project_item">
          <div class="cs_card cs_style_5">
            <div class="cs_card_thumbnail">
              <img src="{{ asset('assets/img/sessions/grant-writing.jpg')}}" alt="Project Image">
            </div>
            <div class="cs_card_info_wrapper">
              <div class="cs_card_index cs_white_color">03</div>
              <div class="cs_card_text">
                <h3 class="cs_card_title cs_white_color mb-0"><a href="{{ route('session.grant.writing.workshop') }}">Grant Writing Workshop: Enhancing Research Capacity</a></h3>
                <!-- <p class="cs_card_subtitle cs_white_color mb-0">Medical / Doctor</p> -->
              </div>
              <a href="{{ route('session.grant.writing.workshop') }}" class="cs_iconbox_btn cs_center"><i class="fa-solid fa-circle-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="cs_project_item">
          <div class="cs_card cs_style_5">
            <div class="cs_card_thumbnail">
              <img src="{{ asset('assets/img/sessions/advancing-career.jpg')}}" alt="Project Image">
            </div>
            <div class="cs_card_info_wrapper">
              <div class="cs_card_index cs_white_color">04</div>
              <div class="cs_card_text">
                <h3 class="cs_card_title cs_white_color mb-0"><a href="{{ route('session.advancing.careers.abroad') }}">Advancing Careers Abroad: A Guide to UK Gastroenterology Training</a></h3>
                <!-- <p class="cs_card_subtitle cs_white_color mb-0">Medical / Doctor</p> -->
              </div>
              <a href="{{ route('session.advancing.careers.abroad') }}" class="cs_iconbox_btn cs_center"><i class="fa-solid fa-circle-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
@endsection