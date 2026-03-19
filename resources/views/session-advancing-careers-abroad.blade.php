@extends('layout.main')
@section('title')
Advancing Careers Abroad: UK Gastroenterology Training | SIAG
@endsection
@section('meta_description')
Session by Dr. Talha Saad Niaz on UK gastroenterology training: GMC registration, PLAB, MRCP, and NHS training pathways. SIAG Karachi.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{ asset('assets/img/banners/hero_slider_3.jpg') }}">
    <div class="container">
      <h1 class="cs_page_title">Advancing Careers Abroad: A Guide to UK Gastroenterology Training</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('sessions') }}">Sessions</a></li>
        <li class="breadcrumb-item active">Advancing Careers Abroad</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_doctor_details_thumbnail position-relative mb-4 mb-lg-5 h-auto">
            <div class="team-thumb">
              <img src="{{ asset('assets/img/sessions/advancing-career.jpg') }}" alt="Advancing Careers Abroad Session" class="img-fluid dr-saad-width">
            </div>
            <div class="team-details-box">
              <h3 class="cs_doctor_title">Advancing Careers Abroad: A Guide to UK Gastroenterology Training</h3>
              <h6 class="cs_doctor_subtitle">Date: Sep, 2024</h6>
              <p>
                <strong>Category:</strong> Academic Career Guidance Session<br>
                Dr. Talha Saad Niaz, Specialist Gastroenterology Trainee at Darent Valley Hospital, Kent, UK
              </p>
            </div>
          </div>

          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Session</h2>
          </div>

          <div class="cs_service_details">
            <p class="cs_service_subtitle">Dr. Talha Saad Niaz, Specialist Gastroenterology Trainee at Darent Valley Hospital, Kent, UK, recently delivered an insightful and interactive session at Sindh Institute of Advanced Endoscopy and Gastroenterology (SIAG).</p>
            <p class="cs_service_subtitle">The session focused on the prospects and pathways for gastroenterology and endoscopy training in the United Kingdom, offering a comprehensive overview of the academic, clinical, and procedural aspects of postgraduate training abroad.</p>

            <h3 class="cs_service_heading">Audience and Participation</h3>
            <p class="cs_service_subtitle">The session was attended by medical officers, fellows, and faculty members of SIAG, reflecting a strong interest among early-career physicians in exploring international training and certification opportunities. The interactive discussion encouraged participants to seek clarity on various aspects of medical migration, specialty selection, and the balance between academic growth and clinical skill development in the UK system.</p>

            <h3 class="cs_service_heading">Key Topics Covered</h3>
            <p class="cs_service_subtitle mb-2"><strong>GMC Registration Process:</strong></p>
            <p class="cs_service_subtitle">Step-by-step guidance on obtaining registration with the General Medical Council (GMC) to practice medicine in the UK.</p>
            <p class="cs_service_subtitle mb-2"><strong>Licensing Examinations:</strong></p>
            <p class="cs_service_subtitle">Detailed insights into the required examinations for international medical graduates, including PLAB and alternative routes such as MRCP.</p>
            <p class="cs_service_subtitle mb-2"><strong>Training Pathways:</strong></p>
            <p class="cs_service_subtitle">A comprehensive overview of the gastroenterology and hepatology training structure in the UK, including entry points, progression, and integration within the NHS framework.</p>

            <h3 class="cs_service_heading">Impact and Takeaways</h3>
            <p class="cs_service_subtitle">The session was highly appreciated for its clarity, relevance, and practical depth, providing valuable direction to healthcare professionals aspiring to pursue advanced training in gastroenterology and hepatology. It served as a platform to bridge academic curiosity with actionable career planning, aligning with SIAG’s ongoing commitment to fostering international learning, professional growth, and global collaboration in gastroenterology and hepatology education.</p>

            <div class="mt-4">
              <a href="{{ route('sessions') }}" class="cs_btn cs_style_1 cs_color_1"><span>Back to Sessions</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_110 cs_height_lg_70"></div>
  </section>
@endsection
