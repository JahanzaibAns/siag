@extends('layout.main')
@section('title')
Research Reinvented: AI in Medical Research | SIAG
@endsection
@section('meta_description')
CME workshop by Dr. Masood Jawaid on AI in research, literature review, and scientific writing. SIAG Karachi.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{ asset('assets/img/banners/hero_slider_3.jpg') }}">
    <div class="container">
      <h1 class="cs_page_title">Research Reinvented: The Power of Artificial Intelligence</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('sessions') }}">Sessions</a></li>
        <li class="breadcrumb-item active">AI Sessions</li>
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
              <img src="{{ asset('assets/img/sessions/research.jpg') }}" alt="AI Sessions" class="img-fluid dr-saad-width">
            </div>
            <div class="team-details-box">
              <h3 class="cs_doctor_title">Research Reinvented: The Power of Artificial Intelligence</h3>
              <h6 class="cs_doctor_subtitle">13th July 2025 | 17th September 2025</h6>
              <p>
                <strong>Category:</strong> CME Accredited Workshop<br>
                Dr. Masood Jawaid, Associate Editor of Pakistan Journal of Medical Sciences and General Secretary of PAME
              </p>
            </div>
          </div>

          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Session</h2>
          </div>

          <div class="cs_service_details">
            <p class="cs_service_subtitle">Dr. Masood Jawaid, Associate Editor of Pakistan Journal of Medical Sciences and General Secretary of PAME, conducted an engaging and thought-provoking workshop titled “Research Reinvented: The Power of Artificial Intelligence” at Sindh Institute of Advanced Endoscopy and Gastroenterology (SIAG).</p>
            <p class="cs_service_subtitle">This CME-accredited workshop, conducted in two sessions, explored how artificial intelligence (AI) is transforming the landscape of medical research, literature review, and scientific writing.</p>

            <h3 class="cs_service_heading">Audience and Participation</h3>
            <p class="cs_service_subtitle">The sessions drew participation from medical researchers, postgraduate fellows, and academic clinicians and medical officers at SIAG, all eager to understand the expanding role of AI in research methodology and publication practices. The interactive format encouraged participants to share their experiences with digital tools and raised meaningful discussions on integrating AI responsibly in academic workflows.</p>

            <h3 class="cs_service_heading">Key Objectives and Highlights</h3>
            <p class="cs_service_subtitle mb-2"><strong>Understanding AI in Research:</strong></p>
            <p class="cs_service_subtitle">Exploration of AI’s capabilities and its expanding role in modern research and evidence synthesis.</p>
            <p class="cs_service_subtitle mb-2"><strong>Literature Review with AI Tools:</strong></p>
            <p class="cs_service_subtitle">Demonstration of how AI-driven platforms can efficiently analyze, summarize, and organize scientific literature.</p>
            <p class="cs_service_subtitle mb-2"><strong>Scientific Writing with AI Assistance:</strong></p>
            <p class="cs_service_subtitle">Practical insights into using AI to enhance clarity, structure, and productivity in manuscript preparation.</p>
            <p class="cs_service_subtitle mb-2"><strong>Ethical Considerations:</strong></p>
            <p class="cs_service_subtitle">Discussion on the ethical implications of relying on AI-generated content and the importance of maintaining research integrity and authorship transparency.</p>

            <h3 class="cs_service_heading">Requirements and Practical Component</h3>
            <p class="cs_service_subtitle">Participants were encouraged to bring laptops and engage in hands-on demonstrations. The workshop was specifically designed for individuals proficient in research writing, enabling real-time exploration of AI-based tools for data handling and manuscript generation.</p>

            <h3 class="cs_service_heading">Impact and Takeaways</h3>
            <p class="cs_service_subtitle">The sessions were highly appreciated for their practical relevance and futuristic approach, inspiring participants to embrace emerging technologies while maintaining ethical research standards. This initiative reflects SIAG’s ongoing commitment to advancing medical education, promoting innovation, and equipping healthcare professionals with digital research competencies.</p>

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
