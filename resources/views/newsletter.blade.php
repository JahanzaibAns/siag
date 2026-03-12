@extends('layout.main')
@section('content')
    <!-- Start Page Heading -->
    <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay"
        data-src="assets/img/banners/hero_slider_3.jpg">
        <div class="container">
            <h1 class="cs_page_title">Newsletter</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active">Newsletter</li>
            </ol>
        </div>
    </section>
    <!-- End Page Heading -->
    <section class="images_section cs_gray_bg pb-4">
        <div class="cs_height_110 cs_height_lg_70"></div>
        <div class="container">
            <div class="row g-4">
                <!-- Training Images -->
                @for($i = 1; $i <= 4; $i++)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/img/newsletter/newsletter' . $i . '.jpg') }}" data-fancybox="gallery"
                            data-caption="Newsletter Image {{ $i }}">
                            <img src="{{ asset('assets/img/newsletter/newsletter' . $i . '.jpg') }}" alt="Newsletter {{ $i }}"
                                class="img-fluid">
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection