@extends('layout.main')
@section('title')
Leadership | SIAG
@endsection
@section('meta_description')
SIAG leadership: Executive Director, faculty, and governance driving free world-class gastroenterology and endoscopy services in Karachi.
@endsection
@section('content')
    <!-- Start Page Heading -->
    <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay"
        data-src="{{asset('assets/img/banners/our-doctors-bg.jpg')}}">
        <div class="container">
            <h1 class="cs_page_title">Leadership</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active">Leadership</li>
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
                                <h3 class="cs_doctor_title">Director’s Message</h3>
                                <!-- <p class="cs_doctor_subtitle mb-0">Manegar</p> -->
                            </div>
                            <p>
                                At the heart of SIAG lies a simple yet powerful promise: to serve with dignity, lead with
                                knowledge, and heal with integrity. We’ve reimagined what a public healthcare institute can
                                look like, uniting cutting edge gastroenterology with historic preservation, all within a
                                space designed to comfort and uplift. Our commitment extends beyond treatment to education,
                                research, and systemic change, ensuring a healthier tomorrow for generations to come.
                            </p>
                            <p>
                                <strong>Dr. Saad Khalid Niaz</strong>
                                <br>
                                Director, SIAG
                            </p>
                            <div class="cs_height_20 cs_height_lg_20"></div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cs_doctor_details_thumbnail position-relative">
                            <img src="{{asset('assets/img/Mission-and-Vision-580x348.jpeg')}}" alt="Doctor Image">
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