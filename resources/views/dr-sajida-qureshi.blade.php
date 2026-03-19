@extends('layout.main')
@section('title')
Prof. Dr. Sajida Qureshi | SIAG
@endsection
@section('meta_description')
Profile of Prof. Sajida Qureshi, Additional Director SIAG, Chairperson Surgery DUHS. Pakistan’s first female robotic and upper GI bariatric surgeon.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{ asset('assets/img/banners/our-doctors-bg.jpg') }}">
    <div class="container">
      <h1 class="cs_page_title">Prof. Dr. Sajida Qureshi</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('our.doctors') }}">Our Doctors</a></li>
        <li class="breadcrumb-item active">Prof. Dr. Sajida Qureshi</li>
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
              <img src="{{ asset('assets/img/team/dr-sajida-300.jpeg') }}" alt="Prof. Dr. Sajida Qureshi" class="img-fluid dr-saad-width">
            </div>
            <div class="team-details-box">
              <h3 class="cs_doctor_title">Prof. Dr. Sajida Qureshi</h3>
              <h6 class="cs_doctor_subtitle">MBBS | FCPS | FRCS (Edinburgh) | Fellowship in Upper GI &amp; Bariatric Surgery (UK &amp; France)</h6>
              <p>
                Meritorious Professor of Surgery &amp; Chairperson, Department of Surgery, DUHS<br>
                Additional Director &amp; Consultant Upper GI, Bariatric &amp; Robotic Surgeon, SIAG
              </p>
            </div>
          </div>

          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Profile</h2>
          </div>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">Profile Overview</h3>
            <p class="cs_service_subtitle">Prof. Sajida Qureshi is a distinguished Meritorious Professor of Surgery and Chairperson of the Department of Surgery at Dow University of Health Sciences (DUHS), Karachi. She also serves as the Additional Director and Consultant Upper GI, Bariatric, and Robotic Surgeon at the Sindh Institute of Advanced Gastroenterology &amp; Hepatology (SIAG), where she leads specialized surgical programs in upper gastrointestinal and hepatobiliary surgery.</p>
            <p class="cs_service_subtitle">At SIAG, Prof. Qureshi plays a pivotal role in advancing minimally invasive, robotic, and therapeutic endoscopic surgery, bridging surgical and endoscopic disciplines to enhance multidisciplinary care. Her leadership supports SIAG’s mission to integrate innovation, training, and research in advanced gastroenterology and hepatology.</p>
            <p class="cs_service_subtitle">She is widely recognized as Pakistan’s first female robotic surgeon, first female upper GI and bariatric surgeon, and first female oncoplastic surgeon. Prof. Qureshi completed advanced fellowships in Upper GI and Bariatric Surgery (Salford Royal Hospital, Manchester, UK) and Oncoplastic Breast Surgery (Paris Breast Centre, France).</p>
            <p class="cs_service_subtitle">Her academic and administrative roles extend beyond SIAG and DUHS, where she serves as Principal of the School of Postgraduate Studies (SPGS) and Director of Global Engagement, fostering international collaborations in surgical education and innovation.</p>
            <p class="cs_service_subtitle">With over 100 robotic surgeries and numerous advanced endoscopic and laparoscopic procedures to her credit, Prof. Qureshi continues to contribute to clinical excellence, postgraduate training, and surgical research. Her scholarly portfolio includes over 50 peer-reviewed publications and active participation in leading forums such as ASCO, SAGES, and ESDE.</p>

            <h3 class="cs_service_heading">Areas of Expertise</h3>
            <ul class="cs_list">
              <li>Upper GI, bariatric, and robotic surgery</li>
              <li>Advanced minimally invasive and therapeutic endoscopy (ERCP, EUS)</li>
              <li>Hepatobiliary and foregut surgical interventions</li>
              <li>Oncoplastic breast surgery</li>
              <li>Laparoscopic and metabolic surgery</li>
              <li>Surgical education and postgraduate training</li>
              <li>Leadership in surgical program development and clinical research</li>
            </ul>

            <h3 class="cs_service_heading">Leadership &amp; Affiliations</h3>
            <ul class="cs_list">
              <li>Additional Director &amp; Consultant Upper GI, Bariatric &amp; Robotic Surgeon, Sindh Institute of Advanced Gastroenterology &amp; Hepatology (SIAG)</li>
              <li>Chairperson, Department of Surgery, Dow University of Health Sciences (DUHS)</li>
              <li>Principal, School of Postgraduate Studies (SPGS), DUHS</li>
              <li>Director, Global Engagement, DUHS</li>
              <li>Examiner, Intercollegiate MRCS (UK)</li>
              <li>Managing Editor, <em>Pakistan Journal of Surgery</em></li>
              <li>Fellow, Royal College of Surgeons (Edinburgh)</li>
              <li>Fellow, College of Physicians &amp; Surgeons Pakistan (FCPS)</li>
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
