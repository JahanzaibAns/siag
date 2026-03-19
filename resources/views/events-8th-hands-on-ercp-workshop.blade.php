@extends('layout.main')
@section('title')
8th Hands on ERCP Workshop – Photos | SIAG
@endsection
@section('meta_description')
Photo gallery: 8th Hands on ERCP Workshop at SIAG. Bile duct and pancreatic endoscopy training, Karachi.
@endsection
@section('content')
    <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay"
        data-src="assets/img/banners/hero_slider_3.jpg">
        <div class="container">
            <h1 class="cs_page_title">8th Hands on ERCP Workshop</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('events') }}">Events</a></li>
                <li class="breadcrumb-item active">8th Hands on ERCP Workshop</li>
            </ol>
        </div>
    </section>
    <section class="images_section cs_gray_bg pb-4">
        <div class="cs_height_110 cs_height_lg_70"></div>
        <div class="container">
            <div class="row g-4">
                @for($i = 1; $i <= 10; $i++)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/img/events/8th-hands/event' . $i . '.jpg') }}" data-fancybox="gallery-8th-ercp"
                            data-caption="8th Hands on ERCP Workshop — {{ $i }}">
                            <img src="{{ asset('assets/img/events/8th-hands/event' . $i . '.jpg') }}" alt="8th Hands on ERCP Workshop {{ $i }}"
                                class="img-fluid">
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
