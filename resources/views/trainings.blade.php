@extends('layout.main')
@section('content')
    <!-- Start Page Heading -->
    <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay"
        data-src="assets/img/banners/hero_slider_3.jpg">
        <div class="container">
            <h1 class="cs_page_title">Trainings</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active">Trainings</li>
            </ol>
        </div>
    </section>
    <!-- End Page Heading -->

    <!-- Start Service Section -->
    <section class="cs_gray_bg section_text_black">
        <div class="cs_height_110 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1">
                <div class="cs_section_heading_left">
                    <p class="cs_section_subtitle cs_accent_color wow fadeInLeft" data-wow-duration="0.9s"
                        data-wow-delay="0.25s">
                        <span class="cs_shape_left"></span>
                        SIAG Launches Anaesthesia Technician Course & First-Ever Endoscopy & Technician Training Course
                    </p>
                </div>

            </div>
            <p>Recognizing the&nbsp;<strong>shortage of certified technicians in paramedics of Pakistan</strong>, SIAG has
                taken the lead in addressing this critical need by introducing an&nbsp;<strong>annual training
                    program</strong>. This initiative aims to provide students with&nbsp;<strong>hands-on
                    training</strong>&nbsp;and practical experience, empowering them to meet the growing demand in the
                healthcare sector.</p>
            <p>This initiative is made possible through the dedication and expertise of our esteemed&nbsp;<strong>Course
                    Director, Prof. Saad Khalid Niaz &amp; Prof. Safia Zafar</strong></p>
            <p>This comprehensive&nbsp;<strong>one-year course&nbsp;</strong>started from<strong>&nbsp;January 1st,
                    2025.&nbsp;</strong>This program is a unique opportunity to build a rewarding career while contributing
                to the advancement of healthcare in Pakistan.</p>
            <h5>
                Key Features of the Course:</h5>
            <p><strong>Comprehensive Curriculum:</strong>&nbsp;Covering theoretical knowledge and practical applications.
            </p>
            <p><strong>Certification:&nbsp;</strong>Receive a recognized upon successful completion.</p>
            <p><strong>Stipend:&nbsp;</strong>Earn while you learn, with a stipend provided during the course.</p>
            <p><strong>Limited Enrollment:</strong>&nbsp;A carefully selected group of 20 candidates, with 10 for Anesthesia
                and 10 for Endoscopy, ensures personalized attention and high-quality training.</p>
            <p><strong>Monthly Tests</strong>: Regular assessments to track progress and ensure mastery of skills.</p>
            <p><strong>Practical Training:&nbsp;</strong>Three days of morning classes combined with rotations in various
                departments, including practical exposure at Civil Hospital, Karachi.</p>
            <h4>LIST OF TEACHING FACULTY:</h4>
            <p><strong>ANAESTHESIA</strong>:&lrm;</p>
            <ul>
                <li>Prof. Safia Zafar</li>
                <li>Dr. &nbsp;&nbsp;Anila fazal</li>
                <li>Dr. &nbsp;&nbsp;Komal</li>
                <li>Dr. &nbsp;&nbsp;Nursrat Hafeez</li>
                <li>Dr. &nbsp;&nbsp;Hajra Zafar</li>
            </ul>
            <p><strong>ENDOSCOPY</strong>:&lrm;</p>
            <ul>
                <li>Dr. &nbsp;&nbsp;Babar Matin</li>
                <li>Mr. &nbsp;&nbsp;Muhammad Waseem</li>
                <li>Dr. &nbsp;&nbsp;Asim Sharif</li>
                <li>Dr. &nbsp;&nbsp;Noval Zakaria</li>
                <li>Dr. &nbsp;&nbsp;Asma Yaseen</li>
                <li>Dr. &nbsp;&nbsp;Abeer Altaf</li>
                <li>Dr. &nbsp;&nbsp;Naseer Ahmed</li>
            </ul>
            <p><strong>JUNIOR FACULTY:</strong></p>
            <ul>
                <li>Miss Shabana Zia</li>
                <li>Miss Jabeen ara</li>
                <li>Miss Ayesha Sehar</li>
                <li>Mr. Boniface Robin</li>
                <li>Mr. Aadil Iqbal</li>
                <li>Mr. Syed Asad Ali</li>
                <li>Mr. Iftikhar</li>
                <li>Mr. Adeel</li>
            </ul>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End Service Section -->
    <section class="images_section cs_gray_bg pb-4">
        <div class="container">
            <div class="row g-4">
                <!-- Training Images -->
                @for($i = 1; $i <= 8; $i++)
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('assets/img/trainings/training' . $i . '.jpeg') }}" 
                    data-fancybox="gallery" 
                    data-caption="Training Image {{ $i }}">
                        <img src="{{ asset('assets/img/trainings/training' . $i . '.jpeg') }}" 
                            alt="Training {{ $i }}" 
                            class="img-fluid">
                    </a>
                </div>
                @endfor
            </div>
        </div>
    </section>

@endsection