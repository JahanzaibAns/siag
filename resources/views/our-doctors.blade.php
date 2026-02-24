@extends('layout.main')
@section('content')
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/our-doctors-bg.jpg">
    <div class="container">
      <h1 class="cs_page_title">Our Doctors</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Our Doctors</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->
  <!-- Start Team Section -->
  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_accent_color">
          <span class="cs_shape_left"></span>Team of Professional<span class="cs_shape_right"></span>
        </p>
        <h2 class="cs_section_title mb-3">Executive Director</h2>
      </div>
      <div class="our-doctors-section">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-saad.jpg')}}" alt="Doctor Image" class="img-fluid dr-saad-width">
                <!-- <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div> -->
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Saad Khalid Niaz</h3>
                <h6 class="cs_doctor_subtitle">MBBS | MRCP (UK) | FRCP (LON) | CCST (Gastroenterology) | CCST (Medicine) | FCPS</h6>
                <p>
                  Consultant Gastroenterologist and Hepatologist<br>
                  Honorary Consultant and Director of Endoscopy at Civil Hospital, Karachi<br>
                  Visiting Professor at Dow University of Health Sciences
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 my-4">
            <div class="cs_section_heading cs_style_1 text-center">
              <p class="cs_section_subtitle cs_accent_color">
                <span class="cs_shape_left"></span>Team of Professionals<span class="cs_shape_right"></span>
              </p>
              <h2 class="cs_section_title mb-3">Visiting International / National Faculty</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-qasim-300.webp')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Prof. Dr. Qasim Aziz</h3>
                <h6 class="cs_doctor_subtitle">MBBS | MRCP | FRCP (Medicine) | PhD (Gastroenterology)</h6>
                <p>
                  Professor of Neurogastroenterology<br>
                  Barts and The London School of Medicine<br>
                  and Dentistry, Queen Mary University of<br>
                  London United Kingdom
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-khalid-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Prof. Dr. M. Khalid Hasan, MD</h3>
                <h6 class="cs_doctor_subtitle">MBBS | MD (Internal Medicine) | Fellowship (Gastroenterology)  </h6>
                <p>
                  Consultant Gastroenterologist and Hepatologist<br>
                  Medical Director (University of Central Florida)<br>
                  Orlando, United States
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-paul-300.webp')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Paul Hagan</h3>
                <h6 class="cs_doctor_subtitle">RMN | RGN | Bsc | MSc | Ph Clinical Endoscopist at Healthcare,</h6>
                <p>
                  NHS. Mansfield, United Kingdom
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-waqar-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Waqar Ahmed</h3>
                <h6 class="cs_doctor_subtitle">MBBS | MD | MRCP | FRCP (Medicine, Gastroenterology)</h6>
                <p>
                  Consultant Physician and Gastroenterologist<br>
                  NHS Trust, Hale<br>
                  United Kingdom
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-mustafa-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Mustafa Arain, MD (USA)</h3>
                <h6 class="cs_doctor_subtitle">MBBS | MD (Internal Medicine) | Fellowship (Gastroenterology) | Advanced Fellowship (Gastroenterology)</h6>
                <p>
                  Consultant Gastroenterologist<br>
                  Advent Health Central Florida<br>
                  United States
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-nadeem-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Nadeem Tehami</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FEBGH | BSc | MRCP | MRCP (Gastroenterology) | FRCP (Glasgow)</h6>
                <p>
                  Consultant in Hepatology &amp; Pancreaticobiliary Medicine<br>
                  NHS Trust Southampton<br>
                  United Kingdom
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-saqib-300.webp')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Saqib Ahmad (UK)</h3>
                <h6 class="cs_doctor_subtitle">MBBS MD MRCP(Gen med) MRCP (Gastro) FRCP (Glasgow) FRCP (London). FEBGH</h6>
                <p>
                  Consultant Gastroenterologist<br>
                  Sherwood Forest Nhs trust
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-farooq-300.webp')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Farooq Khan (UAE)</h3>
                <h6 class="cs_doctor_subtitle">FRCP | MRCP (Gastroenterology) | MRCGP | FAcadMEd | CCT-UK (Hepatology) | CCT-UK (Gastroenterology)</h6>
                <p>
                  Consultant Hepatologist, Gastroenterologist &amp; Interventional Endoscopist<br>
                  Dubai Hills Hospital
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-zohair-300.webp')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr Zohair Ahmed, MD (USA)</h3>
                <h6 class="cs_doctor_subtitle">Gastroenterologist</h6>
                <p>
                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-gias.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Gias Un Nabi Tayyab</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS | MRCP (UK) Professor of Medicine and Consultant Gastroenterologist</h6>
                <p>
                  Doctors Hospital and Medical Center<br>
                  Lahore, Pakistan
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 my-4">
            <div class="cs_section_heading cs_style_1 text-center">
              <p class="cs_section_subtitle cs_accent_color">
                <span class="cs_shape_left"></span>Team of Professionals<span class="cs_shape_right"></span>
              </p>
              <h2 class="cs_section_title mb-3">SIAG Faculty</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-sajida-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Sajida Qureshi</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS | FRCS (Edinburgh) | Fellowship in Upper GI & Bariatric Surgery (UK & France)</h6>
                <p>
                  Consultant Upper GI, Bariatric, and Robotic Surgeon<br>
                  Additional Director at SIAG
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-babar.jpg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Babar Matin</h3>
                <h6 class="cs_doctor_subtitle">MBBS Chief Operating Officer (SIAG) & Incharge GI MOTILITY</h6>
                <p>

                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-shahriyar-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Shahriyar Ghazanfar</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS (General Surgery) | MRCS Ed</h6>
                <p>
                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-aftaab-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Aftab Leghari</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS (General Surgery) | MRCPS (Glasg)</h6>
                <p>
                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-shanil-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Shanil Kadir</h3>
                <h6 class="cs_doctor_subtitle">MBBS | MRCP (UK) | FEBGH | FRCP (Glas) | FRCP(Edin) | CCT G(I)M & Gastroenterology</h6>
                <p>
                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-mansoor-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Mansoor Ul Haq</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS (Medicine) | FCPS (Gastroenterology and Hepatology)</h6>
                <p>
                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-asim.JPG')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Muhammad Asim</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS (Gastroenterology & Hepatology) | MRCP [UK] (Medicine) | ESEGH/MRCP [UK] (Gastroenterology)</h6>
                <p>
                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-noval.JPG')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Noval Zakaria</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS (Gastroenterology & Hepatology)</h6>
                <p>
                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 my-4">
            <div class="cs_section_heading cs_style_1 text-center">
              <p class="cs_section_subtitle cs_accent_color">
                <span class="cs_shape_left"></span>Team of Professionals<span class="cs_shape_right"></span>
              </p>
              <h2 class="cs_section_title mb-3">Anaesthesia Faculty</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/prof-safia.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Prof. Safia Zafar</h3>
                <h6 class="cs_doctor_subtitle">Head of Department</h6>
                <p>
                  MBBS | FCPS (Anesthesia)
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 my-4">
            <div class="cs_section_heading cs_style_1 text-center">
              <p class="cs_section_subtitle cs_accent_color">
                <span class="cs_shape_left"></span>Team of Professionals<span class="cs_shape_right"></span>
              </p>
              <h2 class="cs_section_title mb-3">Anaesthesia Team</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-aneela.JPG')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Aneela Fazal</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCSP (Anesthesia)</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-komal-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Komal</h3>
                <h6 class="cs_doctor_subtitle">MBBS | MCPS (Anesthesia)</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-nusrat.JPG')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Nusrat Hafeez</h3>
                <h6 class="cs_doctor_subtitle">MBBS | MCPS (Anesthesia)</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-ayesha.JPG')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Ayesha Paracha</h3>
                <h6 class="cs_doctor_subtitle">MBBS | MCPS (Anesthesia)</h6>
              </div>
            </div>
          </div>

          <div class="col-12 my-4">
            <div class="cs_section_heading cs_style_1 text-center">
              <p class="cs_section_subtitle cs_accent_color">
                <span class="cs_shape_left"></span>Team of Professionals<span class="cs_shape_right"></span>
              </p>
              <h2 class="cs_section_title mb-3">Fellows</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/Fahad-Kakar.jpg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Fahad Kakar</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS (Gastroenterology & Hepatology)</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-mehreen-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Mehreen Siyal</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS (Gastroenterology & Hepatology)</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-asma-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Asma Yaseen</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS (Gastroenterology & Hepatology)</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-abeer.JPG')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Abeer Altaf</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS (Gastroenterology & Hepatology)</h6>
              </div>
            </div>
          </div>


          <div class="col-12 my-4">
            <div class="cs_section_heading cs_style_1 text-center">
              <p class="cs_section_subtitle cs_accent_color">
                <span class="cs_shape_left"></span>Team of Professionals<span class="cs_shape_right"></span>
              </p>
              <h2 class="cs_section_title mb-3">Research Faculty</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/miss-bushra-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Miss Bushra</h3>
                <h6 class="cs_doctor_subtitle">BSc | MSc</h6>
                <p>
                Statistician
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-pashmina.JPG')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Pashmina Roohi</h3>
                <h6 class="cs_doctor_subtitle">BDS | MSEB (Masters in Epidemiology and Biostatics)</h6>
                <p>
                Research Associate
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-sania-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Sania Maqbool</h3>
                <h6 class="cs_doctor_subtitle">MBBS</h6>
                <p>
                Clinical Trial Coordinator
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/Anum-Jamil.JPG')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Miss Anum Jamil</h3>
                <h6 class="cs_doctor_subtitle">BS (Applied Physics) | MS</h6>
                <p>
                Data Science
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 my-4">
            <div class="cs_section_heading cs_style_1 text-center">
              <p class="cs_section_subtitle cs_accent_color">
                <span class="cs_shape_left"></span>Team of Professionals<span class="cs_shape_right"></span>
              </p>
              <h2 class="cs_section_title mb-3">Alumni</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-naseer-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Naseer Ahmed Khilji</h3>
                <h6 class="cs_doctor_subtitle">MBBS | FCPS (Gastroenterology & Hepatology) | Fellowship in advanced therapeutics,</h6>
                <p>
                  ERCP and EUS (SIAG)
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-marwan-300.jpeg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Marwan Hamed Mostafa Elaqaad</h3>
                <h6 class="cs_doctor_subtitle">MBBS | Palestinian Board (Internal Medicine) | Jordanian Board (Gastroenterology & Hepatology) | GCP Certified | Advanced Endoscopy Fellowship (SIAG)</h6>
              </div>
            </div>
          </div>


          <div class="col-12 my-4">
            <div class="cs_section_heading cs_style_1 text-center">
              <p class="cs_section_subtitle cs_accent_color">
                <span class="cs_shape_left"></span>Team of Professionals<span class="cs_shape_right"></span>
              </p>
              <h2 class="cs_section_title mb-3">Administrations</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/dr-babar.jpg')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Dr. Babar Matin</h3>
                <h6 class="cs_doctor_subtitle">MBBS (Dow) | G.I Motility Diagnostics</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/m-waseem-300.webp')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">M Waseem</h3>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_doctor_details_thumbnail position-relative">
              <div class="team-thumb">
                <img src="{{asset('assets/img/team/waqas-300.webp')}}" alt="Doctor Image" class="img-fluid">
                <div class="cs_doctor_thumbnail_shape1 position-absolute cs_blue_bg"></div>
                <div class="cs_doctor_thumbnail_shape2 position-absolute cs_accent_bg"></div>
              </div>
              <div class="team-details-box">
                <h3 class="cs_doctor_title">Waqas Qadir</h3>
                <h6 class="cs_doctor_subtitle">Masters In Business Administration | Bachlors</h6>
                <p>
                Administartor
                </p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Team Section -->

@endsection