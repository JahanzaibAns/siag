@extends('layout.main')
@section('title')
ESWL | SIAG
@endsection
@section('meta_description')
Extracorporeal Shock Wave Lithotripsy (ESWL) for stones at SIAG. Non-invasive treatment for biliary and pancreatic stones, Karachi.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">ESWL</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">ESWL</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">ESWL</h2>
        </div>
        <p class="cs_service_subtitle">Extracorporeal Shock Wave Lithotripsy to fragment pancreatic stones without surgery.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What is it?</h3>
            <p class="cs_service_subtitle">ESWL is a non-invasive procedure that uses shock waves to break pancreatic stones into smaller pieces for easier removal or natural passage.</p>

            <h3 class="cs_service_heading">Why is it done?</h3>
            <ul class="cs_list">
              <li>Pancreatic duct stones</li>
              <li>Pain or obstruction due to stones</li>
              <li>Incomplete stone removal via ERCP</li>
            </ul>

            <h3 class="cs_service_heading">Duration &amp; Recovery Time</h3>
            <ul class="cs_list">
              <li>Procedure duration: 45–60 minutes</li>
              <li>Recovery time: 1–2 hours; usually home the same day</li>
            </ul>

            <h3 class="cs_service_heading">Before Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: No food or drink for at least 6 hours before the procedure.</li>
              <li>Stop blood thinners as advised.</li>
              <li>Inform doctor of any bleeding issues or kidney disease.</li>
            </ul>

            <h3 class="cs_service_heading">After Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: Drink 2–3 liters of water daily. Start with soft foods like soup, rice, and bananas. Avoid spicy or greasy food for 48 hours.</li>
              <li>Rest &amp; Activity: Rest for the day. Avoid strenuous activities for 48 hours.</li>
              <li>Medications: Take pain medications and antibiotics as prescribed.</li>
              <li>Hygiene: No wound care needed.</li>
              <li>Follow-up: Imaging may be needed to ensure stone fragments have cleared.</li>
            </ul>

            <h3 class="cs_service_heading">Complications may include</h3>
            <ul class="cs_list">
              <li>Mild bleeding</li>
              <li>Pancreatitis</li>
              <li>Infection</li>
              <li>Incomplete stone clearance</li>
            </ul>

            <div class="cs_alert cs_alert_warning">
              <p class="mb-0"><strong>See your doctor immediately if you have:</strong></p>
              <ul class="cs_list">
                <li>Blood in stool or urine</li>
                <li>Fever or chills</li>
                <li>Severe or persistent abdominal pain</li>
              </ul>
            </div>

            <h3 class="cs_service_heading">Not Suitable For (Tell Your Doctor If…)</h3>
            <ul class="cs_list">
              <li>Pregnancy</li>
              <li>Bleeding disorders</li>
              <li>Severe kidney disease</li>
            </ul>

            <div class="cs_alert cs_alert_info mt-3">
              <p class="mb-0">⚠ Note: Dates are not fixed in advance. Please check this page regularly for upcoming workshop announcements.</p>
            </div>

            <h3 class="cs_service_heading">Patient Frequently Asked Questions</h3>
            <div class="accordion" id="eswlFaqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    Is it painful?
                  </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#eswlFaqAccordion">
                  <div class="accordion-body">Most patients feel mild discomfort, not severe pain.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    Can I go home the same day?
                  </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#eswlFaqAccordion">
                  <div class="accordion-body">Yes, after a short recovery period.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    Do I need to be sedated?
                  </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#eswlFaqAccordion">
                  <div class="accordion-body">Sedation may be used based on your procedure and comfort needs.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    Will I pass stones in stool?
                  </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#eswlFaqAccordion">
                  <div class="accordion-body">Yes, stone fragments are often passed in stool over several days.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                    Can the stones come back?
                  </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#eswlFaqAccordion">
                  <div class="accordion-body">Yes, recurrence can happen, which is why follow-up is important.</div>
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