@extends('layout.main')
@section('title')
Occupational Safety: Needlestick & Sharps Injuries | SIAG
@endsection
@section('meta_description')
Session on NSI management by Dr. Asma Yaseen and Dr. Sania Maqbool. First aid, reporting, and post-exposure protocols at SIAG.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{ asset('assets/img/banners/hero_slider_3.jpg') }}">
    <div class="container">
      <h1 class="cs_page_title">Occupational Safety Session: Managing Needle-stick and Sharps Injuries</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('sessions') }}">Sessions</a></li>
        <li class="breadcrumb-item active">Occupational Safety Session</li>
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
              <img src="{{ asset('assets/img/sessions/occupational.jpeg') }}" alt="Occupational Safety Session" class="img-fluid dr-saad-width">
            </div>
            <div class="team-details-box">
              <h3 class="cs_doctor_title">Occupational Safety Session: Managing Needle-stick and Sharps Injuries</h3>
              <h6 class="cs_doctor_subtitle">30th September 2025</h6>
              <p>
                <strong>Category:</strong> Awareness and Educational Session<br>
                Dr. Asma Yaseen and Dr. Sania Maqbool
              </p>
            </div>
          </div>

          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Session</h2>
          </div>

          <div class="cs_service_details">
            <p class="cs_service_subtitle">Dr. Asma Yaseen and Dr. Sania Maqbool recently conducted an informative and interactive session on Needlestick and Sharps Injury (NSI) management at the Sindh Institute of Advanced Endoscopy and Gastroenterology (SIAG).</p>
            <p class="cs_service_subtitle">The session aimed to enhance staff awareness, preparedness, and adherence to institutional safety protocols in the event of occupational exposure to blood-borne pathogens. It was designed for medical officers, fellows, nursing staff, and paramedical teams, ensuring that all healthcare professionals are equipped with the knowledge and confidence to respond effectively.</p>

            <h3 class="cs_service_heading">Audience and Participation</h3>
            <p class="cs_service_subtitle">The session saw enthusiastic participation from SIAG’s clinical and paramedical staff, reflecting the institute’s ongoing commitment to staff education, workplace safety, and infection control practices. Discussions encouraged participants to share experiences and seek clarity on exposure management, risk reduction, and post-exposure procedures.</p>

            <h3 class="cs_service_heading">Key Topics Covered</h3>
            <p class="cs_service_subtitle mb-2"><strong>Understanding Needlestick Risks:</strong></p>
            <p class="cs_service_subtitle">Identification of significant exposures and clarification of which fluids are considered infectious.</p>
            <p class="cs_service_subtitle mb-2"><strong>Immediate Response Protocols:</strong></p>
            <p class="cs_service_subtitle">Step-by-step guidance on first aid following exposure, including washing wounds, flushing mucous membranes, and safe reporting procedures.</p>
            <p class="cs_service_subtitle mb-2"><strong>Reporting and Documentation:</strong></p>
            <p class="cs_service_subtitle">Explanation of the SIAG Needlestick Injury Incident Report Form and the importance of timely and accurate reporting for institutional monitoring.</p>
            <p class="cs_service_subtitle mb-2"><strong>Post-Exposure Management:</strong></p>
            <p class="cs_service_subtitle">Overview of the SIAG NSI Management Guidelines and Flowchart, covering HIV PEP initiation, HBV vaccination protocols, and HCV monitoring according to international standards.</p>
            <p class="cs_service_subtitle mb-2"><strong>Prevention and Long-term Safety Measures:</strong></p>
            <p class="cs_service_subtitle">Emphasis on universal precautions, safe sharps disposal, vaccination compliance, and regular staff training to prevent occupational exposure.</p>

            <h3 class="cs_service_heading">Impact and Takeaways</h3>
            <p class="cs_service_subtitle">The session reinforced SIAG’s culture of safety, vigilance, and professional responsibility, empowering healthcare workers to act promptly and effectively in managing occupational exposures. Through such initiatives, SIAG continues to demonstrate its dedication to maintaining the highest standards of infection control and workplace safety.</p>

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
