@extends('layout.main')
@section('title')
Our Story | SIAG
@endsection
@section('meta_description')
How SIAG grew from a two-room unit to Pakistan’s leading public-sector institute for advanced endoscopy and gastroenterology care in Karachi.
@endsection
@section('content')
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{asset('assets/img/banners/our-doctors-bg.jpg')}}">
    <div class="container">
      <h1 class="cs_page_title">Our Story</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Our Story</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->
  <section>
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_doctor_details_wrapper">
        <div class="row cs_row_gap_30 cs_gap_y_30">
          <div class="col-lg-5">
            <div class="cs_doctor_details_thumbnail position-relative">
              <img src="{{asset('assets/img/team/dr-saad.jpg')}}" alt="Doctor Image">
              <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
              <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="cs_doctor_details">
              <div class="cs_doctor_info_header">
                <h3 class="cs_doctor_title">Our Story</h3>
                <!-- <p class="cs_doctor_subtitle mb-0">Manegar</p> -->
              </div>
              <p>
                The journey of the Sindh Institute of Advanced Endoscopy and Gastroenterology (SIAG) began with a bold vision: to bring world-class endoscopic care to the heart of Pakistan’s public healthcare system. Sparked by the dedication of a compassionate surgeon, Professor M Saeed Quraishy and strengthened by the expertise of  Dr. Saad Khalid niaz, a UK-trained gastroenterologist committed to serving the underserved, this vision took shape within Civil Hospital Karachi.
              </p>
              <p>
                What began in 2006 as a modest two-room unit soon evolved into the province’s first dedicated endoscopy institute, pioneering care, research, and training. Operated under the leadership of a philanthropic team, SIAG was driven by the belief that access to advanced gastrointestinal care should not be a privilege, but a right.
              </p> 
              <p>
                Today, SIAG stands as a testament to what’s possible when service meets innovation: a center of excellence that remains firmly rooted in its founding mission, to serve with dignity, compassion, and medical excellence.
              </p>               
              <div class="cs_height_20 cs_height_lg_20"></div>
             
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_100 cs_height_lg_60"></div>
      <hr>
    </div>
  </section>
@endsection