@extends('layout.main')
@section('title')
Dr. Saad Khalid Niaz | SIAG
@endsection
@section('meta_description')
Profile of Dr. Saad Khalid Niaz, Executive Director SIAG, FRCP, Director of Endoscopy. Pioneer in advanced endoscopy and hepatobiliary care in Pakistan.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{ asset('assets/img/banners/our-doctors-bg.jpg') }}">
    <div class="container">
      <h1 class="cs_page_title">Dr. Saad Khalid Niaz</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('our.doctors') }}">Our Doctors</a></li>
        <li class="breadcrumb-item active">Dr. Saad Khalid Niaz</li>
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
              <img src="{{ asset('assets/img/team/dr-saad.jpg') }}" alt="Dr. Saad Khalid Niaz" class="img-fluid dr-saad-width">
            </div>
            <div class="team-details-box">
              <h3 class="cs_doctor_title">Dr. Saad Khalid Niaz</h3>
              <h6 class="cs_doctor_subtitle">MBBS | MRCP (UK) | FRCP (LON) | CCST (Gastroenterology) | CCST (Medicine) | FCPS</h6>
              <p>
                Consultant Gastroenterologist and Hepatologist<br>
                Executive Director, SIAG | Director of Endoscopy, Civil Hospital Karachi<br>
                Visiting Professor, Dow University of Health Sciences
              </p>
            </div>
          </div>

          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Profile</h2>
          </div>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">Profile Overview</h3>
            <p class="cs_service_subtitle">Dr. Saad Khalid Niaz is an internationally recognized gastroenterologist and hepatologist with over three decades of clinical, academic, and leadership experience. He is known for his pioneering contributions to advanced endoscopy and hepatobiliary interventions in Pakistan. A graduate of Dow University of Health Sciences (1986), Dr. Niaz pursued postgraduate training in the United Kingdom, earning his MRCP and dual Certificates of Completion of Specialist Training (CCST) in Medicine and Gastroenterology from the West Midlands Deanery. He later achieved Fellowship of the Royal College of Physicians (London) and the College of Physicians and Surgeons (Pakistan).</p>
            <p class="cs_service_subtitle">After twelve years of service in the UK, he returned to Pakistan in 2001, where he has been instrumental in elevating the standards of gastroenterology services nationwide. As the Executive Director of SIAG and Director of Endoscopy at Civil Hospital Karachi, Dr. Niaz has overseen the development of one of the country’s most advanced endoscopy units.</p>
            <p class="cs_service_subtitle">He has performed more than 25,000 diagnostic and therapeutic endoscopic procedures, including ERCP, endoscopic mucosal resection (EMR), colonic stenting, and balloon dilatation. He is the only consultant in Pakistan performing SpyGlass cholangioscopy, enteroscopy, and capsule endoscopy. Dr. Niaz also introduced several innovative procedures such as oesophageal metallic stenting, single-balloon enteroscopy, endoscopic pseudocyst drainage, and sphincteroplasty for complex biliary and pancreatic diseases.</p>
            <p class="cs_service_subtitle">In 2024, he served as the Health Minister of Sindh, contributing to provincial healthcare policy, infrastructure development, and medical education. His exceptional contributions to medicine were recognized with the Presidential Tamgha-i-Imtiaz in 2022.</p>

            <h3 class="cs_service_heading">Academic &amp; Professional Contributions</h3>
            <p class="cs_service_subtitle">Dr. Niaz has published and presented extensively in national and international journals on subjects including ERCP outcomes, biliary strictures, irritable bowel syndrome, hepatitis C, variceal bleeding, and capsule endoscopy. He also serves as a reviewer for the <em>Journal of Pakistan Medical Association</em>, the <em>Journal of the Pakistan Society of Physicians &amp; Surgeons</em>, and the <em>Pakistan Journal of Medical Sciences</em>.</p>

            <h3 class="cs_service_heading">Areas of Expertise</h3>
            <ul class="cs_list">
              <li>Advanced diagnostic and therapeutic endoscopy (ERCP, Endoscopic Mucosal Resection, SpyGlass)</li>
              <li>Biliary and pancreatic interventions</li>
              <li>Small-bowel enteroscopy and capsule endoscopy</li>
              <li>Colonic stenting and dilatation</li>
              <li>Hepatology and liver-disease management</li>
              <li>Gastroenterology training and medical education</li>
            </ul>

            <h3 class="cs_service_heading">Leadership &amp; Affiliations</h3>
            <ul class="cs_list">
              <li>Executive Director, Sindh Institute of Advanced Endoscopy &amp; Gastroenterology (SIAG)</li>
              <li>President, Pakistan Society of Gastroenterology &amp; GI Endoscopy (2025–2027)</li>
              <li>Former Health Minister of Sindh (2024)</li>
              <li>Visiting Professor, Dow University of Health Sciences</li>
              <li>Director of Endoscopy, Civil Hospital Karachi</li>
              <li>Fellow, Royal College of Physicians (London)</li>
              <li>Member, Royal College of Physicians (UK)</li>
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
