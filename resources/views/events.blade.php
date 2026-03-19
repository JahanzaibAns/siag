@extends('layout.main')
@section('title')
Events | SIAG
@endsection
@section('meta_description')
SIAG events and workshops. 8th Hands on ERCP Workshop, 6th Sindh AEG EUS Workshop, and other gastroenterology events in Karachi.
@endsection
@section('content')
<!-- Start Page Heading -->
<section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay"
    data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
        <h1 class="cs_page_title">Events</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item active">Events</li>
        </ol>
    </div>
</section>
<!-- End Page Heading -->
<section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_type_1">
        <div class="cs_section_heading_left">
          <p class="cs_section_subtitle cs_accent_color"><span class="cs_shape_left"></span>View All Events</p>
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
              <img src="{{ asset('assets/img/events/event1.jpg')}}" alt="Event 1 Image">
            </div>
            <div class="cs_card_info_wrapper">
              <div class="cs_card_index cs_white_color">01</div>
              <div class="cs_card_text">
                <h3 class="cs_card_title cs_white_color mb-0"><a href="{{ route('8th-hands-on-ercp-workshop') }}">8th Hands on ERCP Workshop</a></h3>
                <!-- <p class="cs_card_subtitle cs_white_color mb-0">Medical / Doctor</p> -->
              </div>
              <a href="{{ route('8th-hands-on-ercp-workshop') }}" class="cs_iconbox_btn cs_center"><i class="fa-solid fa-circle-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="cs_project_item">
          <div class="cs_card cs_style_5">
            <div class="cs_card_thumbnail">
              <img src="{{ asset('assets/img/events/event2.jpg')}}" alt="Event 2 Image">
            </div>
            <div class="cs_card_info_wrapper">
              <div class="cs_card_index cs_white_color">02</div>
              <div class="cs_card_text">
                  <h3 class="cs_card_title cs_white_color mb-0"><a href="{{ route('6th-sindh-aeg-eus-workshop') }}">6th Sindh AEG EUS Workshop</a></h3>
                <!-- <p class="cs_card_subtitle cs_white_color mb-0">Medical / Doctor</p> -->
              </div>
              <a href="{{ route('6th-sindh-aeg-eus-workshop') }}" class="cs_iconbox_btn cs_center"><i class="fa-solid fa-circle-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
@endsection