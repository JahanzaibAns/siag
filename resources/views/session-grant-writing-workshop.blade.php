@extends('layout.main')
@section('title')
Grant Writing Workshop: Enhancing Research Capacity | SIAG
@endsection
@section('meta_description')
SIAG–ORIC grant writing workshop. Proposal structure, funding opportunities, and research capacity building. Karachi.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{ asset('assets/img/banners/hero_slider_3.jpg') }}">
    <div class="container">
      <h1 class="cs_page_title">Grant Writing Workshop: Enhancing Research Capacity</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('sessions') }}">Sessions</a></li>
        <li class="breadcrumb-item active">Grant Writing Workshop</li>
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
              <img src="{{ asset('assets/img/sessions/grant-writing.jpg') }}" alt="Grant Writing Workshop" class="img-fluid dr-saad-width">
            </div>
            <div class="team-details-box">
              <h3 class="cs_doctor_title">Grant Writing Workshop: Enhancing Research Capacity</h3>
              <h6 class="cs_doctor_subtitle">12th July 2025</h6>
              <p>
                <strong>Category:</strong> Research Development Workshop<br>
                In collaboration with ORIC, Ziauddin University. Facilitated by Dr. Imran Bashir Chaudhary and team.
              </p>
            </div>
          </div>

          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Session</h2>
          </div>

          <div class="cs_service_details">
            <p class="cs_service_subtitle">Sindh Institute of Advanced Endoscopy and Gastroenterology (SIAG), in collaboration with the Office of Research, Innovation &amp; Commercialization (ORIC), Ziauddin University, organized a focused Grant Writing Workshop for faculty, fellows, and researchers to strengthen skills in developing competitive research proposals and securing funding opportunities.</p>

            <h3 class="cs_service_heading">Audience and Participation</h3>
            <p class="cs_service_subtitle">The session was attended by faculty members, postgraduate fellows, and research staff and medical officers at SIAG. Participants engaged actively throughout the session, sharing their experiences and discussing strategies to improve research planning and proposal submission.</p>

            <h3 class="cs_service_heading">Key Topics Covered</h3>
            <p class="cs_service_subtitle">The workshop was facilitated by Dr. Imran Bashir Chaudhary and his team from ORIC, Ziauddin University. Key areas discussed included:</p>
            <ul class="cs_list">
              <li>Understanding the structure of an effective grant proposal.</li>
              <li>Identifying suitable funding opportunities and agencies.</li>
              <li>Developing research objectives and budgets.</li>
              <li>Enhancing clarity, impact, and reviewer engagement.</li>
              <li>Common challenges and strategies for successful submissions.</li>
            </ul>
            <p class="cs_service_subtitle">Interactive discussions and real-world examples provided participants with practical insight into developing strong, fundable research ideas.</p>

            <h3 class="cs_service_heading">Impact and Takeaways</h3>
            <p class="cs_service_subtitle">The workshop was well-received for its practical relevance and targeted approach. Participants appreciated the hands-on guidance and institutional support from SIAG in advancing a strong research culture. This initiative reflects SIAG’s ongoing commitment to capacity building, academic excellence, and promoting innovation in clinical and biomedical research.</p>

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
