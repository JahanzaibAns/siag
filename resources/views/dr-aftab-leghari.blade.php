@extends('layout.main')
@section('title')
Dr. Aftab Ahmed Leghari | SIAG
@endsection
@section('meta_description')
Profile of Dr. Aftab Leghari, CMO Surgical Unit IV, Visiting Consultant SIAG. Upper GI surgery and advanced therapeutic endoscopy including ERCP.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{ asset('assets/img/banners/our-doctors-bg.jpg') }}">
    <div class="container">
      <h1 class="cs_page_title">Dr. Aftab Ahmed Leghari</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('our.doctors') }}">Our Doctors</a></li>
        <li class="breadcrumb-item active">Dr. Aftab Leghari</li>
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
              <img src="{{ asset('assets/img/team/dr-aftaab-300.jpeg') }}" alt="Dr. Aftab Ahmed Leghari" class="img-fluid dr-saad-width">
            </div>
            <div class="team-details-box">
              <h3 class="cs_doctor_title">Dr. Aftab Ahmed Leghari</h3>
              <h6 class="cs_doctor_subtitle">MBBS | FCPS (General Surgery) | MRCPS (Glasg)</h6>
              <p>
                Chief Medical Officer, Surgical Unit IV (SUIV)<br>
                Visiting Consultant, Sindh Institute of Advanced Gastroenterology (SIAG)
              </p>
            </div>
          </div>

          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Profile</h2>
          </div>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">Profile Overview</h3>
            <p class="cs_service_subtitle">Dr. Aftab Ahmed Leghari is a highly experienced Consultant Surgeon with specialized expertise in minimally invasive upper gastrointestinal surgery and advanced therapeutic endoscopy. Currently serving as the Chief Medical Officer at the Surgical Unit IV (SUIV) and a Visiting Consultant at the Sindh Institute of Advanced Gastroenterology (SIAG), Dr. Leghari brings a multidisciplinary approach to surgical and endoscopic patient care.</p>
            <p class="cs_service_subtitle">Trained in advanced endoscopic procedures, including ERCP, under the mentorship of <a href="{{ route('dr-saad-khalid-niaz') }}">Dr. Saad Khalid Niaz</a> at the SUIV Endoscopy Suite since 2010, he has built a distinguished reputation for precision, innovation, and patient-focused management of complex gastrointestinal conditions.</p>

            <h3 class="cs_service_heading">Areas of Expertise</h3>
            <ul class="cs_list">
              <li>Minimally invasive upper gastrointestinal surgery</li>
              <li>Advanced therapeutic endoscopy including ERCP</li>
              <li>Surgical management of gastrointestinal and hepatobiliary disorders</li>
              <li>Integration of surgical and endoscopic approaches for complex cases</li>
              <li>Clinical leadership and multidisciplinary coordination in tertiary care settings</li>
            </ul>

            <h3 class="cs_service_heading">Academic &amp; Professional Contributions</h3>
            <p class="cs_service_subtitle">Dr. Leghari has authored and co-authored approximately 15 scientific research papers in the fields of surgery and endoscopy. His academic work reflects his dedication to continuous learning, clinical innovation, and evidence-based practice aimed at improving surgical outcomes and procedural safety.</p>

            <h3 class="cs_service_heading">Leadership &amp; Affiliations</h3>
            <ul class="cs_list">
              <li>Chief Medical Officer, Surgical Unit IV (SUIV)</li>
              <li>Visiting Consultant, Sindh Institute of Advanced Gastroenterology (SIAG)</li>
              <li>Fellow, College of Physicians and Surgeons Pakistan (FCPS)</li>
              <li>Member, Royal College of Physicians and Surgeons (Glasgow)</li>
            </ul>

            <div class="mt-4">
              <a href="{{ route('our.doctors') }}" class="cs_btn cs_style_1 cs_color_1"><span>Back to Our Doctors</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_110 cs_height_lg_70"></div>
  </section>
@endsection
