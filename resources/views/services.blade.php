@extends('layout.main')
@section('content')
<style>
    .cs_card.cs_style_1 .cs_card_info_wrapper{
        margin-top: 0px;
    }
</style>
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Services</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
        <li class="breadcrumb-item active">Services</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->
  
  <!-- Start Service Section -->
  <section class="cs_tabs">
      <div class="cs_height_110 cs_height_lg_70"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1">
          <div class="cs_section_heading_left">
            <p class="cs_section_subtitle cs_accent_color wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s"><span class="cs_shape_left"></span>OUR SERVICES</p>
            <h2 class="cs_section_title">Specialized Medical Procedures</h2>
          </div>
        </div>
        <div class="cs_height_50 cs_height_lg_50"></div>
      </div>
      <div class="cs_height_110 cs_height_lg_70"></div>
      <div class="cs_tab_body">
        <div class="container cs_tab active" id="services">
          <div class="row cs_gap_y_30">
            
            <!-- OGD Endoscopy -->
            <div class="col-lg-4">
              <div class="cs_card cs_style_1">
                <!-- <a href="#" class="cs_card_thumbnail d-block">
                  <img src="{{asset('assets/img/services/ogd-endoscopy.jpg')}}" alt="OGD Endoscopy" class="w-100">
                </a> -->
                <div class="cs_card_info_wrapper">
                  <div class="cs_card_text">
                    <h3 class="cs_card_title"><a href="{{ route('ogd.endoscopy') }}">OGD Endoscopy</a></h3>
                    <p class="cs_card_subtitle mb-0">Upper gastrointestinal endoscopy to diagnose and treat conditions in the upper GI tract.</p>
                  </div>
                  <div class="cs_card_index cs_center rounded-circle">01</div>
                </div>
              </div>
            </div>
            
            <!-- Colonoscopy -->
            <div class="col-lg-4">
              <div class="cs_card cs_style_1">
                <!-- <a href="#" class="cs_card_thumbnail d-block">
                  <img src="{{asset('assets/img/services/colonoscopy.jpg')}}" alt="Colonoscopy" class="w-100">
                </a> -->
                <div class="cs_card_info_wrapper">
                  <div class="cs_card_text">
                    <h3 class="cs_card_title"><a href="{{ route('colonoscopy') }}">Colonoscopy</a></h3>
                    <p class="cs_card_subtitle mb-0">Examination of the large bowel and distal part of the small bowel with a camera.</p>
                  </div>
                  <div class="cs_card_index cs_center rounded-circle">02</div>
                </div>
              </div>
            </div>
            
            <!-- ERCP -->
            <div class="col-lg-4">
              <div class="cs_card cs_style_1">
                <!-- <a href="#" class="cs_card_thumbnail d-block">
                  <img src="{{asset('assets/img/services/ercp.jpg')}}" alt="ERCP" class="w-100">
                </a> -->
                <div class="cs_card_info_wrapper">
                  <div class="cs_card_text">
                    <h3 class="cs_card_title"><a href="{{ route('ercp') }}">ERCP</a></h3>
                    <p class="cs_card_subtitle mb-0">Endoscopic Retrograde Cholangiopancreatography for diagnosing and treating bile duct issues.</p>
                  </div>
                  <div class="cs_card_index cs_center rounded-circle">03</div>
                </div>
              </div>
            </div>
            
            <!-- ESWL -->
            <div class="col-lg-4">
              <div class="cs_card cs_style_1">
                <!-- <a href="#" class="cs_card_thumbnail d-block">
                  <img src="{{asset('assets/img/services/eswl.jpg')}}" alt="ESWL" class="w-100">
                </a> -->
                <div class="cs_card_info_wrapper">
                  <div class="cs_card_text">
                    <h3 class="cs_card_title"><a href="{{ route('eswl') }}">ESWL</a></h3>
                    <p class="cs_card_subtitle mb-0">Extracorporeal Shock Wave Lithotripsy for non-invasive treatment of kidney stones.</p>
                  </div>
                  <div class="cs_card_index cs_center rounded-circle">04</div>
                </div>
              </div>
            </div>
            
            <!-- Spyglass -->
            <div class="col-lg-4">
              <div class="cs_card cs_style_1">
                <!-- <a href="#" class="cs_card_thumbnail d-block">
                  <img src="{{asset('assets/img/services/spyglass.jpg')}}" alt="Spyglass" class="w-100">
                </a> -->
                <div class="cs_card_info_wrapper">
                  <div class="cs_card_text">
                    <h3 class="cs_card_title"><a href="{{ route('spyglass') }}">Spyglass</a></h3>
                    <p class="cs_card_subtitle mb-0">Advanced cholangioscopy for direct visualization and treatment of bile duct conditions.</p>
                  </div>
                  <div class="cs_card_index cs_center rounded-circle">05</div>
                </div>
              </div>
            </div>
            
            <!-- EUS -->
            <div class="col-lg-4">
              <div class="cs_card cs_style_1">
                <!-- <a href="#" class="cs_card_thumbnail d-block">
                  <img src="{{asset('assets/img/services/eus.jpg')}}" alt="EUS" class="w-100">
                </a> -->
                <div class="cs_card_info_wrapper">
                  <div class="cs_card_text">
                    <h3 class="cs_card_title"><a href="{{ route('eus') }}">EUS</a></h3>
                    <p class="cs_card_subtitle mb-0">Endoscopic Ultrasound for detailed imaging of digestive tract and surrounding organs.</p>
                  </div>
                  <div class="cs_card_index cs_center rounded-circle">06</div>
                </div>
              </div>
            </div>
            
            <!-- EUS RFA -->
            <div class="col-lg-4">
              <div class="cs_card cs_style_1">
                <!-- <a href="#" class="cs_card_thumbnail d-block">
                  <img src="{{asset('assets/img/services/eus-rfa.jpg')}}" alt="EUS RFA" class="w-100">
                </a> -->
                <div class="cs_card_info_wrapper">
                  <div class="cs_card_text">
                    <h3 class="cs_card_title"><a href="{{ route('eus.rfa') }}">EUS RFA</a></h3>
                    <p class="cs_card_subtitle mb-0">Endoscopic Ultrasound-guided Radiofrequency Ablation for tumor treatment.</p>
                  </div>
                  <div class="cs_card_index cs_center rounded-circle">07</div>
                </div>
              </div>
            </div>
            
            <!-- Esophageal Manometry -->
            <div class="col-lg-4">
              <div class="cs_card cs_style_1">
                <!-- <a href="#" class="cs_card_thumbnail d-block">
                  <img src="{{asset('assets/img/services/esophageal-manometry.jpg')}}" alt="Esophageal Manometry" class="w-100">
                </a> -->
                <div class="cs_card_info_wrapper">
                  <div class="cs_card_text">
                    <h3 class="cs_card_title"><a href="{{ route('esophageal.manometry') }}">Esophageal Manometry</a></h3>
                    <p class="cs_card_subtitle mb-0">Test measuring muscle contractions and coordination in the esophagus.</p>
                  </div>
                  <div class="cs_card_index cs_center rounded-circle">08</div>
                </div>
              </div>
            </div>
            
            <!-- Fibroscan -->
            <div class="col-lg-4">
              <div class="cs_card cs_style_1">
                <!-- <a href="#" class="cs_card_thumbnail d-block">
                  <img src="{{asset('assets/img/services/fibroscan.jpg')}}" alt="Fibroscan" class="w-100">
                </a> -->
                <div class="cs_card_info_wrapper">
                  <div class="cs_card_text">
                    <h3 class="cs_card_title"><a href="{{ route('fibroscan') }}">Fibroscan</a></h3>
                    <p class="cs_card_subtitle mb-0">Non-invasive assessment of liver fibrosis and steatosis.</p>
                  </div>
                  <div class="cs_card_index cs_center rounded-circle">09</div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
      <div class="cs_height_90 cs_height_lg_50"></div>
      <hr>
  </section>
  <!-- End Service Section -->
@endsection