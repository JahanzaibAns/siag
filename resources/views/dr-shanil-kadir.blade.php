@extends('layout.main')
@section('title')
Dr. Shanil Kadir | SIAG
@endsection
@section('meta_description')
Profile of Dr. Shanil Kadir, UK-trained Consultant Gastroenterologist at SIAG. ERCP, EUS, hepatobiliary lead and international advisor RCP Glasgow.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{ asset('assets/img/banners/our-doctors-bg.jpg') }}">
    <div class="container">
      <h1 class="cs_page_title">Dr. Shanil Kadir</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('our.doctors') }}">Our Doctors</a></li>
        <li class="breadcrumb-item active">Dr. Shanil Kadir</li>
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
              <img src="{{ asset('assets/img/team/dr-shanil-300.jpeg') }}" alt="Dr. Shanil Kadir" class="img-fluid dr-saad-width">
            </div>
            <div class="team-details-box">
              <h3 class="cs_doctor_title">Dr. Shanil Kadir</h3>
              <h6 class="cs_doctor_subtitle">MBBS | MRCP (UK) | FEBGH | FRCP (Glas) | FRCP (Edin) | CCT G(I)M &amp; Gastroenterology</h6>
              <p>
                Consultant Gastroenterologist &amp; Advanced Endoscopist, SIAG<br>
                Consultant Gastroenterologist, South City Hospital &amp; Liaquat National Hospital, Karachi
              </p>
            </div>
          </div>

          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Profile</h2>
          </div>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">Profile Overview</h3>
            <p class="cs_service_subtitle">Dr. Shanil Kadir is a UK-trained Consultant Gastroenterologist and Hepatologist with over 15 years of extensive clinical, academic, and leadership experience in advanced gastroenterology and hepatobiliary medicine. He is currently serving as a Consultant Gastroenterologist and Advanced Endoscopist at the Sindh Institute of Advanced Gastroenterology &amp; Hepatology (SIAG), where he contributes his expertise in complex endoscopic interventions and multidisciplinary hepatobiliary care.</p>
            <p class="cs_service_subtitle">After completing his MBBS from Dow Medical College (2001), Dr. Kadir pursued postgraduate training in the United Kingdom, obtaining his MRCP (UK) in 2008 and completing specialist training in Gastroenterology &amp; Hepatology from the Manchester Deanery, leading to CCST in Internal Medicine and Gastroenterology. He subsequently achieved the Specialist Certificate Examination (SCE) in Gastroenterology and earned Fellowship of the European Board of Gastroenterology &amp; Hepatology.</p>
            <p class="cs_service_subtitle">Dr. Kadir was appointed Consultant Gastroenterologist at a tertiary NHS Trust in Lancashire, UK, where he served as Hepatobiliary Lead and a core member of the Upper GI and Hepatobiliary Cancer MDTs. He performed advanced endoscopic procedures including ERCP and Endoscopic Ultrasound (EUS), and served as the Training Lead of the department.</p>
            <p class="cs_service_subtitle">He was later awarded Fellowship of the Royal College of Physicians of Glasgow and Fellowship of the Royal College of Physicians of Edinburgh and currently serves as the International Advisor (Pakistan) for the Royal College of Physicians &amp; Surgeons of Glasgow.</p>

            <h3 class="cs_service_heading">Areas of Expertise</h3>
            <ul class="cs_list">
              <li>Advanced diagnostic and therapeutic endoscopy (gastroscopy, colonoscopy, ERCP, EUS)</li>
              <li>Endoscopic mucosal resection (EMR), dilatation, and stenting</li>
              <li>Variceal band ligation and PEG placement</li>
              <li>Management of hepatobiliary and pancreatic diseases</li>
              <li>Upper GI and hepatobiliary cancer multidisciplinary care</li>
              <li>Comprehensive management of liver disease and portal hypertension</li>
              <li>Clinical training and postgraduate medical education</li>
              <li>Academic writing and international conference presentations</li>
            </ul>

            <h3 class="cs_service_heading">Academic &amp; Professional Contributions</h3>
            <p class="cs_service_subtitle">Dr. Kadir has authored several peer-reviewed clinical publications and presented his work at leading international gastroenterology conferences. His academic interests include hepatobiliary disease management, ERCP and EUS-based interventions, and the integration of advanced endoscopic techniques into multidisciplinary care pathways. He maintains active involvement in international gastroenterology bodies including the Asian EUS Group, World Gastroenterology Organisation (WGO), American College of Gastroenterology (ACG), and Pakistan Society of Gastroenterology (PSG).</p>

            <h3 class="cs_service_heading">Leadership &amp; Affiliations</h3>
            <ul class="cs_list">
              <li>Consultant Gastroenterologist &amp; Advanced Endoscopist, Sindh Institute of Advanced Gastroenterology &amp; Hepatology (SIAG)</li>
              <li>Consultant Gastroenterologist, South City Hospital, Karachi</li>
              <li>Consultant Gastroenterologist, Liaquat National Hospital, Karachi</li>
              <li>Former Hepatobiliary Lead &amp; Training Lead, NHS Trust, Lancashire, UK</li>
              <li>International Advisor (Pakistan), Royal College of Physicians &amp; Surgeons of Glasgow</li>
              <li>Fellow, Royal College of Physicians (Glasgow &amp; Edinburgh)</li>
              <li>Fellow, European Board of Gastroenterology &amp; Hepatology</li>
              <li>Member, Asian EUS Group, WGO, ACG, and PSG</li>
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
