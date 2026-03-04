@extends('layout.main')
@section('content')
    <!-- Start Page Heading -->
    <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay"
        data-src="{{asset('assets/img/banners/our-doctors-bg.jpg')}}">
        <div class="container">
            <h1 class="cs_page_title">Mission & Vision</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active">Mission & Vision</li>
            </ol>
        </div>
    </section>
    <!-- End Page Heading -->
    <section>
        <div class="cs_height_120 cs_height_lg_80"></div>
        <div class="container">
            <div class="cs_doctor_details_wrapper">
                <div class="row cs_row_gap_30 cs_gap_y_30 align-items-center">
                    <div class="col-lg-7">
                        <div class="cs_doctor_details">
                            <div class="cs_doctor_info_header">
                                <h3 class="cs_doctor_title">Mission & Vision</h3>
                                <!-- <p class="cs_doctor_subtitle mb-0">Manegar</p> -->
                            </div>
                            <p>
                                At the Sindh Institute of Advanced Endoscopy and Gastroenterology (SIAG), our vision is to
                                deliver equitable, innovative, and patient-centered gastroenterological care. We aspire to
                                transform public healthcare in Pakistan by setting new standards in clinical excellence,
                                medical education, and research, within a framework that respects our heritage and serves
                                the underserved.
                            </p>
                            <p>
                                We envision a future where every individual, regardless of socioeconomic background, has
                                access to world-class endoscopic diagnostics and treatment in a compassionate and dignified
                                environment. Through continuous advancement, community engagement, and sustainable design,
                                SIAG is committed to redefining how healthcare is delivered locally, nationally, and beyond.
                            </p>
                            <div class="cs_height_20 cs_height_lg_20"></div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cs_doctor_details_thumbnail position-relative">
                            <img src="{{asset('assets/img/team/dr-saad.jpg')}}" alt="Doctor Image">
                            <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                            <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_height_100 cs_height_lg_60"></div>
            <hr>
        </div>
    </section>
@endsection