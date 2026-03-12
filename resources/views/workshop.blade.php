@extends('layout.main')
@section('content')
    <!-- Start Page Heading -->
    <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay"
        data-src="assets/img/banners/hero_slider_3.jpg">
        <div class="container">
            <h1 class="cs_page_title">Workshop</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active">Workshop</li>
            </ol>
        </div>
    </section>
    <!-- End Page Heading -->

    <!-- Start Service Section -->
    <section class="cs_gray_bg">
        <div class="cs_height_110 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_accent_color wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
                <span class="cs_shape_left"></span>
                OUR WORKSHOPS
                </p>
            </div>
            
            </div>
            <p>
            Our hands-on training workshops are designed for gastroenterologists, fellows, and physicians who want to sharpen their endoscopic skills using state-of-the-art facilities, expert mentorship, and real patient cases.
            </p>
            <p>
            Workshops are scheduled throughout the year — dates are announced on this page. Interested doctors are encouraged to check back regularly for updates.
            </p>
            <div class="cs_height_50 cs_height_lg_50"></div>
            <div class="row cs_row_gap_30 cs_gap_y_30">
            <!-- <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="cs_iconbox cs_style_2 cs_radius_15 cs_hover_layer_2">
                <div class="cs_iconbox_overlay cs_bg_filed" data-src="{{asset('assets/img/service_bg.jpg')}}"></div>
                <div class="cs_iconbox_shape"></div>
                <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                    <div class="cs_iconbox_icon cs_center">
                    <img src="{{asset('assets/img/icons/service_icon_1.png')}}" alt="Service Icon">
                    <i class="fas fa-stethoscope"></i>
                    </div>
                    <h3 class="iconbox_index">01</h3>
                </div>
                <h3 class="cs_iconbox_title"><a href="javascript:void(0);">OGD (Endoscopy)</a></h3>
                <p class="cs_iconbox_subtitle m-0">Upper GI diagnostic and therapeutic procedures</p>
                </div>
            </div> -->
            <div class="col-lg-4 col-sm-6">
                <div class="cs_iconbox cs_style_2 cs_radius_15">
                <div class="cs_iconbox_overlay cs_bg_filed" data-src="{{asset('assets/img/service_bg.jpg')}}"></div>
                <div class="cs_iconbox_shape"></div>
                <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                    <div class="cs_iconbox_icon cs_center">
                    <!-- <img src="{{asset('assets/img/icons/service_icon_2.png')}}" alt="Service Icon"> -->
                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                    </div>
                    <h3 class="iconbox_index">01</h3>
                </div>
                <h3 class="cs_iconbox_title"><a href="javascript:void(0);">Colonoscopy</a></h3>
                <p class="cs_iconbox_subtitle m-0">Complete large bowel examination</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="cs_iconbox cs_style_2 cs_radius_15">
                <div class="cs_iconbox_overlay cs_bg_filed" data-src="{{asset('assets/img/service_bg.jpg')}}"></div>
                <div class="cs_iconbox_shape"></div>
                <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                    <div class="cs_iconbox_icon cs_center">
                    <!-- <img src="{{asset('assets/img/icons/service_icon_3.png')}}" alt="Service Icon"> -->
                    <i class="fa-solid fa-x-ray"></i>
                    </div>
                    <h3 class="iconbox_index">02</h3>
                </div>
                <h3 class="cs_iconbox_title"><a href="javascript:void(0);">ERCP</a></h3>
                <p class="cs_iconbox_subtitle m-0">Bile duct and pancreatic interventions</p>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-sm-6">
                <div class="cs_iconbox cs_style_2 cs_radius_15">
                <div class="cs_iconbox_overlay cs_bg_filed" data-src="{{asset('assets/img/service_bg.jpg')}}"></div>
                <div class="cs_iconbox_shape"></div>
                <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                    <div class="cs_iconbox_icon cs_center">
                    <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h3 class="iconbox_index">04</h3>
                </div>
                <h3 class="cs_iconbox_title"><a href="javascript:void(0);">ESWL</a></h3>
                <p class="cs_iconbox_subtitle m-0">Shock wave lithotripsy for stones</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="cs_iconbox cs_style_2 cs_radius_15">
                <div class="cs_iconbox_overlay cs_bg_filed" data-src="{{asset('assets/img/service_bg.jpg')}}"></div>
                <div class="cs_iconbox_shape"></div>
                <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                    <div class="cs_iconbox_icon cs_center">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <h3 class="iconbox_index">05</h3>
                </div>
                <h3 class="cs_iconbox_title"><a href="javascript:void(0);">Spyglass</a></h3>
                <p class="cs_iconbox_subtitle m-0">Cholangioscopy for bile duct visualization</p>
                </div>
            </div> -->
            <div class="col-lg-4 col-sm-6">
                <div class="cs_iconbox cs_style_2 cs_radius_15">
                    <div class="cs_iconbox_overlay cs_bg_filed" data-src="{{asset('assets/img/service_bg.jpg')}}"></div>
                    <div class="cs_iconbox_shape"></div>
                    <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                        <div class="cs_iconbox_icon cs_center">
                            <i class="fa-solid fa-wave-square"></i>
                        </div>
                        <h3 class="iconbox_index">03</h3>
                    </div>
                    <h3 class="cs_iconbox_title"><a href="javascript:void(0);">EUS</a></h3>
                    <p class="cs_iconbox_subtitle m-0">Endoscopic ultrasound imaging</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="cs_iconbox cs_style_2 cs_radius_15">
                    <div class="cs_iconbox_overlay cs_bg_filed" data-src="{{asset('assets/img/service_bg.jpg')}}"></div>
                    <div class="cs_iconbox_shape"></div>
                    <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                        <div class="cs_iconbox_icon cs_center">
                            <i class="fa-solid fa-microscope"></i>
                        </div>
                        <h3 class="iconbox_index">04</h3>
                    </div>
                    <h3 class="cs_iconbox_title"><a href="javascript:void(0);">Advanced Techniques in Endoscopy Workshop</a></h3>
                    <p class="cs_iconbox_subtitle m-0">Advanced endoscopic resection techniques and tissue sampling</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="cs_iconbox cs_style_2 cs_radius_15">
                    <div class="cs_iconbox_overlay cs_bg_filed" data-src="{{asset('assets/img/service_bg.jpg')}}"></div>
                    <div class="cs_iconbox_shape"></div>
                    <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                        <div class="cs_iconbox_icon cs_center">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <h3 class="iconbox_index">05</h3>
                    </div>
                    <h3 class="cs_iconbox_title"><a href="javascript:void(0);">Train the Trainer Workshop</a></h3>
                    <p class="cs_iconbox_subtitle m-0">Hands-on training and education methodologies</p>
                </div>
            </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End Service Section -->
@endsection