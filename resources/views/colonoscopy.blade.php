@extends('layout.main')
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Colonoscopy</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Colonoscopy</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">Colonoscopy</h2>
        </div>
        <p class="cs_service_subtitle">A comprehensive diagnostic and preventive procedure for colorectal health.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What is it?</h3>
            <p class="cs_service_subtitle">Colonoscopy is a procedure in which a long, flexible camera is used to examine the inside of your large intestine. It helps detect polyps, inflammation, ulcers, and early signs of colon cancer.</p>

            <h3 class="cs_service_heading">Why is it done?</h3>
            <ul class="cs_list">
              <li>Blood in stool</li>
              <li>Long-term constipation or diarrhea</li>
              <li>Cancer screening</li>
              <li>Abdominal pain</li>
              <li>Family history of colon cancer</li>
            </ul>

            <h3 class="cs_service_heading">Duration &amp; Recovery Time</h3>
            <ul class="cs_list">
              <li>Procedure duration: 30–45 minutes</li>
              <li>Recovery time: 1–2 hours; usually home the same day</li>
            </ul>

            <h3 class="cs_service_heading">Before Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: Clear liquids only (water, clear juice, broth) 24 hours before. Avoid red/purple drinks.</li>
              <li>Take bowel prep medication as instructed.</li>
              <li>Stop blood thinners if advised.</li>
            </ul>

            <h3 class="cs_service_heading">After Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: Resume regular diet if no polyps removed. If polyps were removed, stick to soft, bland foods for 1–2 days (e.g., rice, bananas, khichdi). Avoid spicy or heavy meals.</li>
              <li>Rest &amp; Activity: Rest the day of procedure. Resume regular activities the next day.</li>
              <li>Medications: Resume medications as advised by your doctor. Confirm when to restart blood thinners.</li>
              <li>Hygiene: No wound care needed.</li>
              <li>Follow-up: If biopsies or polyps were taken, follow up in a few days for results.</li>
            </ul>

            <h3 class="cs_service_heading">Complications may include</h3>
            <ul class="cs_list">
              <li>Bleeding (especially after polyp removal)</li>
              <li>Infection (rare)</li>
              <li>Colon injury (very rare)</li>
            </ul>

            <div class="cs_alert cs_alert_warning">
              <p class="mb-0"><strong>See your doctor immediately if you have:</strong></p>
              <ul class="cs_list">
                <li>Heavy rectal bleeding</li>
                <li>Severe abdominal pain</li>
                <li>Fever or chills</li>
                <li>Dizziness or weakness</li>
              </ul>
            </div>

            <h3 class="cs_service_heading">Not Suitable For (Tell Your Doctor If…)</h3>
            <ul class="cs_list">
              <li>Severe heart or lung disease</li>
              <li>Known bowel perforation or blockage</li>
            </ul>

            <div class="cs_alert cs_alert_info mt-3">
              <p class="mb-0">⚠ Note: Dates are not fixed in advance. Please check this page regularly for upcoming workshop announcements.</p>
            </div>

            <div class="my-4">
              <h3 class="cs_service_heading">Colonoscopy Procedures List</h3>
              <ul class="cs_list">
                <li>POLYPECTOMY</li>
                <li>APC</li>
                <li>COLONIC DILATATION</li>
                <li>COLONIC SEMS</li>
                <li>EMR</li>
                <li>ESD</li>
              </ul>
            </div>

            <h3 class="cs_service_heading">Patient Frequently Asked Questions</h3>
            <div class="accordion" id="colonoscopyFaqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    Will I be asleep?
                  </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#colonoscopyFaqAccordion">
                  <div class="accordion-body">You may receive sedation; many patients are comfortable and relaxed.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    Is it painful?
                  </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#colonoscopyFaqAccordion">
                  <div class="accordion-body">Most people feel mild cramping or gas, not pain.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    Can I eat afterward?
                  </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#colonoscopyFaqAccordion">
                  <div class="accordion-body">Yes, typically after a few hours depending on your doctor’s advice.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    Do I need someone with me?
                  </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#colonoscopyFaqAccordion">
                  <div class="accordion-body">Yes, because sedation is used and you should not drive immediately after.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                    Is it safe?
                  </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#colonoscopyFaqAccordion">
                  <div class="accordion-body">Yes, it is safe when performed by experienced specialists. Serious complications are rare.</div>
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