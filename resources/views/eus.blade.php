@extends('layout.main')
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">EUS</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">EUS</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">EUS (Endoscopic Ultrasound)</h2>
        </div>
        <p class="cs_service_subtitle">A combined endoscopy and ultrasound procedure to examine digestive organs and obtain biopsies.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What is it?</h3>
            <p class="cs_service_subtitle">EUS (Endoscopic Ultrasound) combines a thin endoscope with ultrasound to examine the digestive tract and nearby organs like the pancreas, liver, and bile ducts.</p>

            <h3 class="cs_service_heading">Why is it done?</h3>
            <ul class="cs_list">
              <li>Unexplained abdominal pain</li>
              <li>Suspected tumors or cysts</li>
              <li>Staging of cancers</li>
              <li>Biopsy of internal structures</li>
            </ul>

            <h3 class="cs_service_heading">Duration &amp; Recovery Time</h3>
            <ul class="cs_list">
              <li>Procedure duration: 30–60 minutes</li>
              <li>Recovery time: 1–2 hours; same-day discharge</li>
            </ul>

            <h3 class="cs_service_heading">Before Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: Do not eat or drink for 6–8 hours before the procedure.</li>
              <li>Stop blood thinners as advised.</li>
              <li>Inform your doctor about allergies and medications.</li>
            </ul>

            <h3 class="cs_service_heading">After Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: Begin with clear liquids once fully awake. Move to soft, non-spicy food (e.g., soup, rice, bananas). Avoid heavy meals for 24 hours.</li>
              <li>Rest &amp; Activity: Rest for the day. Resume normal activity next day unless biopsy was taken.</li>
              <li>Medications: Follow medication instructions. Start antibiotics if prescribed.</li>
              <li>Hygiene: No wound care needed.</li>
              <li>Follow-up: If biopsy was taken, schedule a follow-up to discuss results.</li>
            </ul>

            <h3 class="cs_service_heading">Complications may include</h3>
            <ul class="cs_list">
              <li>Bleeding (especially with biopsy)</li>
              <li>Pancreatitis</li>
              <li>Infection</li>
              <li>Very rare perforation</li>
            </ul>

            <div class="cs_alert cs_alert_warning">
              <p class="mb-0"><strong>See your doctor immediately if you have:</strong></p>
              <ul class="cs_list">
                <li>Vomiting or severe pain</li>
                <li>Fever or chills</li>
                <li>Blood in stool or vomit</li>
              </ul>
            </div>

            <h3 class="cs_service_heading">Not Suitable For (Tell Your Doctor If…)</h3>
            <ul class="cs_list">
              <li>Pregnancy</li>
              <li>Severe heart or lung conditions</li>
              <li>Known allergy to sedation</li>
            </ul>

            <div class="cs_alert cs_alert_info mt-3">
              <p class="mb-0">⚠ Note: Dates are not fixed in advance. Please check this page regularly for upcoming workshop announcements.</p>
            </div>

            <div class="my-4">
              <h3 class="cs_service_heading">EUS Procedures List</h3>
              <ul class="cs_list">
                <li>EUS DIAGNOSTIC</li>
                <li>FNA</li>
                <li>FNB</li>
                <li>PSEUDOCYST</li>
                <li>GASTRO JEJUNOSTOMY</li>
                <li>PSEUDOCYST DRAINAGE</li>
                <li>RENDEZVOUS</li>
                <li>BILLIARY DRAINAGE</li>
                <li>GALL BLADDER DRAINAGE</li>
                <li>HOT AXIOS PLACEMENT</li>
                <li>RFA</li>
              </ul>
            </div>

            <h3 class="cs_service_heading">Patient Frequently Asked Questions</h3>
            <div class="accordion" id="eusFaqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    How is Spyglass different from regular ERCP?
                  </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#eusFaqAccordion">
                  <div class="accordion-body">EUS uses ultrasound with an endoscope to image organs and guide biopsies, while ERCP focuses on ductal imaging and interventions.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    Will I be sedated?
                  </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#eusFaqAccordion">
                  <div class="accordion-body">Yes, sedation is typically given to ensure comfort during the procedure.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    Can I eat afterward?
                  </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#eusFaqAccordion">
                  <div class="accordion-body">Yes, once you are awake and your doctor confirms it.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    Is biopsy always done?
                  </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#eusFaqAccordion">
                  <div class="accordion-body">Biopsy is performed when suspicious lesions are seen or tissue sampling is needed.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                    Is it painful?
                  </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#eusFaqAccordion">
                  <div class="accordion-body">Most patients are sedated and report minimal discomfort.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading6">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                    Do I need someone to accompany me?
                  </button>
                </h2>
                <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#eusFaqAccordion">
                  <div class="accordion-body">Yes, you should have someone to accompany you home after sedation.</div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_110 cs_height_lg_70"></div>
  </section>
@endsection