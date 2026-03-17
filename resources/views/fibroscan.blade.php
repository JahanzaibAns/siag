@extends('layout.main')
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">FibroScan</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">FibroScan</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 text-center mb-4">
            <h2 class="cs_section_title">FibroScan</h2>
          </div>
          <p class="cs_service_subtitle">A quick, non-invasive liver stiffness test that detects fibrosis without biopsy.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What is it?</h3>
            <p class="cs_service_subtitle">FibroScan is a quick, non-invasive test that uses sound waves to measure the stiffness (or hardness) of your liver. It helps assess liver fibrosis or scarring without the need for a biopsy.</p>

            <h3 class="cs_service_heading">Why is it done?</h3>
            <ul class="cs_list">
              <li>To check for liver damage (fibrosis)</li>
              <li>To monitor liver disease (e.g., hepatitis B/C, fatty liver, NASH)</li>
              <li>To avoid invasive liver biopsy</li>
              <li>To assess treatment response in chronic liver conditions</li>
            </ul>

            <h3 class="cs_service_heading">Duration &amp; Recovery Time</h3>
            <ul class="cs_list">
              <li>Procedure duration: 10–15 minutes</li>
              <li>Recovery time: Immediate; no downtime required</li>
            </ul>

            <h3 class="cs_service_heading">Before Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: Do not eat or drink for at least 3 hours before the test.</li>
              <li>Wear loose clothing.</li>
              <li>Inform your doctor if you are pregnant or have ascites (abdominal fluid).</li>
            </ul>

            <h3 class="cs_service_heading">After Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: You may eat and drink normally after the procedure.</li>
              <li>Rest &amp; Activity: No restrictions; you can return to work or daily activities immediately.</li>
              <li>Medications: Continue your regular medications.</li>
              <li>Hygiene: No special care needed.</li>
              <li>Follow-up: Your doctor will explain your liver stiffness results and what they mean for your health.</li>
            </ul>

            <h3 class="cs_service_heading">Complications may include</h3>
            <ul class="cs_list">
              <li>None – it is a completely safe and painless procedure</li>
            </ul>

            <div class="cs_alert cs_alert_warning">
              <p class="mb-0"><strong>See your doctor if:</strong></p>
              <ul class="cs_list">
                <li>You have ongoing symptoms like abdominal pain, jaundice, or swelling</li>
              </ul>
            </div>

            <h3 class="cs_service_heading">Not Suitable For (Tell Your Doctor If…)</h3>
            <ul class="cs_list">
              <li>You are pregnant</li>
              <li>You have significant ascites (fluid in abdomen)</li>
              <li>You have a pacemaker or implanted device (in rare cases)</li>
            </ul>

            <div class="cs_alert cs_alert_info mt-3">
              <p class="mb-0">⚠ Note: Dates are not fixed in advance. Please check this page regularly for upcoming workshop announcements.</p>
            </div>

            <div class="cs_height_40"></div>
            <h3 class="cs_service_heading">Register</h3>
            <p class="cs_service_subtitle">To register for FibroScan, please contact the clinic front desk or use our appointment booking form.</p>

            <h3 class="cs_service_heading">Patient Frequently Asked Questions</h3>
            <div class="accordion" id="fibroscanFaqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    Is FibroScan painful?
                  </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#fibroscanFaqAccordion">
                  <div class="accordion-body">No, FibroScan is painless and non-invasive.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    Can I drive afterward?
                  </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#fibroscanFaqAccordion">
                  <div class="accordion-body">Yes, there are no restrictions.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    Do I need to fast?
                  </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#fibroscanFaqAccordion">
                  <div class="accordion-body">Yes, fast for at least 3 hours prior to the test.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    How accurate is FibroScan?
                  </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#fibroscanFaqAccordion">
                  <div class="accordion-body">FibroScan is widely used and accurate for assessing liver stiffness and fibrosis trends over time.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                    Do I need it again?
                  </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#fibroscanFaqAccordion">
                  <div class="accordion-body">Repeat testing depends on disease monitoring and your doctor’s recommendation.</div>
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