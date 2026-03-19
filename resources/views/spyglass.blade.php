@extends('layout.main')
@section('title')
SpyGlass Cholangioscopy | SIAG
@endsection
@section('meta_description')
SpyGlass cholangioscopy and bile duct visualization at SIAG. Advanced diagnostic and therapeutic biliary procedures in Karachi.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Spyglass</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Spyglass</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 text-center mb-4">
            <h2 class="cs_section_title">Spyglass Cholangioscopy</h2>
        </div>
        <p class="cs_service_subtitle">Advanced visualization and targeted therapy during ERCP for biliary and pancreatic duct disorders.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What is it?</h3>
            <p class="cs_service_subtitle">Spyglass cholangioscopy is an advanced procedure performed during ERCP to directly visualize the bile or pancreatic ducts and guide treatment such as biopsy or stone removal.</p>

            <h3 class="cs_service_heading">Why is it done?</h3>
            <ul class="cs_list">
              <li>Difficult-to-remove bile duct stones</li>
              <li>Suspicious bile duct narrowing or tumors</li>
              <li>Need for targeted biopsy</li>
            </ul>

            <h3 class="cs_service_heading">Duration &amp; Recovery Time</h3>
            <ul class="cs_list">
              <li>Procedure duration: 60–90 minutes</li>
              <li>Recovery time: 1–2 hours; same-day discharge</li>
            </ul>

            <h3 class="cs_service_heading">Before Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: No food or drink for 6–8 hours before the procedure.</li>
              <li>Antibiotics may be given before.</li>
              <li>Inform your doctor of allergies or prior reactions to contrast dye.</li>
            </ul>

            <h3 class="cs_service_heading">After Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: Resume soft diet once awake. Avoid oily or spicy food for 24 hours.</li>
              <li>Rest &amp; Activity: Rest the full day. No driving for 24 hours.</li>
              <li>Medications: Take all prescribed medications including antibiotics.</li>
              <li>Hygiene: None needed.</li>
              <li>Follow-up: Biopsy results or further steps will be discussed in follow-up visit.</li>
            </ul>

            <h3 class="cs_service_heading">Complications may include</h3>
            <ul class="cs_list">
              <li>Cholangitis (bile duct infection)</li>
              <li>Bleeding</li>
              <li>Pancreatitis</li>
              <li>Rare duct injury</li>
            </ul>

            <div class="cs_alert cs_alert_warning">
              <p class="mb-0"><strong>See your doctor immediately if you have:</strong></p>
              <ul class="cs_list">
                <li>Fever</li>
                <li>Yellowing of skin or eyes</li>
                <li>Vomiting or severe pain</li>
                <li>Blood in stool</li>
              </ul>
            </div>

            <h3 class="cs_service_heading">Not Suitable For (Tell Your Doctor If…)</h3>
            <ul class="cs_list">
              <li>Allergy to contrast dye</li>
              <li>Severe cardiac or respiratory conditions</li>
              <li>Unstable medical status</li>
            </ul>

            <div class="cs_alert cs_alert_info mt-3">
              <p class="mb-0">⚠ Note: Dates are not fixed in advance. Please check this page regularly for upcoming workshop announcements.</p>
            </div>
    <div class="cs_height_110 cs_height_lg_70"></div>

            <h3 class="cs_service_heading">Patient Frequently Asked Questions</h3>
            <div class="accordion" id="spyglassFaqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    How is Spyglass different from regular ERCP?
                  </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#spyglassFaqAccordion">
                  <div class="accordion-body">Spyglass allows direct visualization and targeted therapy within bile/pancreatic ducts, beyond standard ERCP imaging.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    Will I be asleep?
                  </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#spyglassFaqAccordion">
                  <div class="accordion-body">Yes, you’ll be sedated.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    Is it safe?
                  </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#spyglassFaqAccordion">
                  <div class="accordion-body">Yes, with experienced providers complications are rare.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    Will I need another ERCP?
                  </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#spyglassFaqAccordion">
                  <div class="accordion-body">Sometimes follow-up ERCP may be needed depending on findings.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                    Do I need antibiotics?
                  </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#spyglassFaqAccordion">
                  <div class="accordion-body">Antibiotics may be given before or after based on clinical indication.</div>
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