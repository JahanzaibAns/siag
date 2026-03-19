@extends('layout.main')
@section('title')
6th Sindh AEG EUS Workshop – Photos | SIAG
@endsection
@section('meta_description')
Photo gallery: 6th Sindh AEG EUS Workshop at SIAG. Endoscopic ultrasound training and events, Karachi.
@endsection
@section('content')
    <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay"
        data-src="assets/img/banners/hero_slider_3.jpg">
        <div class="container">
            <h1 class="cs_page_title">6th Sindh AEG EUS Workshop</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('events') }}">Events</a></li>
                <li class="breadcrumb-item active">6th Sindh AEG EUS Workshop</li>
            </ol>
        </div>
    </section>
    <section class="images_section cs_gray_bg pb-4">
        <div class="cs_height_110 cs_height_lg_70"></div>
        <div class="container">
            <div class="row g-4">
                @for($i = 1; $i <= 16; $i++)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/img/events/6th-Sindh/event' . $i . '.jpg') }}" data-fancybox="gallery-6th-sindh"
                            data-caption="6th Sindh AEG EUS Workshop — {{ $i }}">
                            <img src="{{ asset('assets/img/events/6th-Sindh/event' . $i . '.jpg') }}" alt="6th Sindh AEG EUS Workshop {{ $i }}"
                                class="img-fluid">
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
