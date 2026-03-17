@extends('layout.main')
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">OGD (Endoscopy)</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">OGD (Endoscopy)</li>
      </ol>
    </div>
  </section>

    <section>
      <div class="cs_height_110 cs_height_lg_70"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="cs_service_details">
              <div class="cs_section_heading cs_style_1 cs_type_1 text-center mb-4">
                <h2 class="cs_section_title">OGD (Endoscopy)</h2>
            </div>
            <p class="cs_service_subtitle">A minimally invasive diagnostic procedure to view the upper digestive tract and guide treatment.</p>

              <div class="cs_service_content">
                <h3 class="cs_service_heading">What is it?</h3>
                <p class="cs_service_subtitle">OGD is a test where a thin flexible camera is passed through your mouth to look at your food pipe, stomach, and the first part of your small intestine. It helps doctors find problems like ulcers, swelling, bleeding, or tumors.</p>

                <h3 class="cs_service_heading">Why is it done?</h3>
                <ul class="cs_list">
                  <li>Heartburn or acid reflux</li>
                  <li>Swallowing problems</li>
                  <li>Unexplained stomach pain</li>
                  <li>Vomiting blood or black stools</li>
                  <li>Suspected ulcers or growths</li>
                </ul>

                <h3 class="cs_service_heading">Duration &amp; Recovery Time</h3>
                <ul class="cs_list">
                  <li>Procedure duration: 15–30 minutes</li>
                  <li>Recovery time: About 1 hour observation; usually home same day</li>
                </ul>

                <h3 class="cs_service_heading">Before Your Procedure</h3>
                <ul class="cs_list">
                  <li>Diet: Do not eat or drink for at least 6 hours before the procedure</li>
                  <li>Continue medications only if advised by your doctor</li>
                  <li>Inform your doctor if you have diabetes, heart issues, or take blood thinners</li>
                </ul>

                <h3 class="cs_service_heading">After Your Procedure</h3>
                <ul class="cs_list">
                  <li>Diet: Start with sips of water after the numbness in your throat wears off. Then move to soft food like toast, bananas, or khichdi. Avoid hot drinks, spicy or oily meals for 24 hours.</li>
                  <li>Rest &amp; Activity: Rest for the day. Do not drive or make important decisions for 24 hours if you had sedation.</li>
                  <li>Medications: Resume your regular medications unless advised otherwise. Follow any instructions regarding new prescriptions.</li>
                  <li>Hygiene: No wound care needed.</li>
                  <li>Follow-up: Biopsy results (if taken) usually take a few days. Follow up with your doctor.</li>
                </ul>

                <h3 class="cs_service_heading">Complications may include</h3>
                <ul class="cs_list">
                  <li>Bleeding (if biopsy is taken)</li>
                  <li>Reaction to sedation</li>
                  <li>Very rare risk of a tear (perforation)</li>
                </ul>

                <div class="cs_alert cs_alert_warning">
                  <p class="mb-0"><strong>See your doctor immediately if you have:</strong></p>
                  <ul class="cs_list">
                    <li>Severe chest or abdominal pain</li>
                    <li>Difficulty swallowing</li>
                    <li>Fever or chills</li>
                    <li>Vomiting blood or black stools</li>
                  </ul>
                </div>

                <h3 class="cs_service_heading">Not Suitable For (Tell Your Doctor If…)</h3>
                <ul class="cs_list">
                  <li>You are pregnant</li>
                  <li>Have a history of bleeding disorders</li>
                  <li>Have serious heart or lung conditions</li>
                </ul>

                <div class="cs_alert cs_alert_info mt-3">
                  <p class="mb-0">⚠ Note: Dates are not fixed in advance. Please check this page regularly for upcoming workshop announcements.</p>
                </div>
                <div class="cs_height_110 cs_height_lg_70"></div>
                <h3 class="cs_service_heading">Patient Frequently Asked Questions</h3>
                <div class="accordion" id="ogdFaqAccordion">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading1">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                        Will I be awake during the procedure?
                      </button>
                    </h2>
                    <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#ogdFaqAccordion">
                      <div class="accordion-body">
                        You may receive a throat spray or mild sedation to help you relax.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading2">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                        Will it be painful?
                      </button>
                    </h2>
                    <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#ogdFaqAccordion">
                      <div class="accordion-body">
                        It may feel uncomfortable, but it should not be painful. The test is quick and safe.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                        Can I eat afterward?
                      </button>
                    </h2>
                    <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#ogdFaqAccordion">
                      <div class="accordion-body">
                        Yes, after about 1–2 hours. Start with soft or cool foods.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading4">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                        When will I get the results?
                      </button>
                    </h2>
                    <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#ogdFaqAccordion">
                      <div class="accordion-body">
                        Your doctor may tell you right away. If a biopsy was taken, it takes a few days.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading5">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                        Is the test safe?
                      </button>
                    </h2>
                    <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#ogdFaqAccordion">
                      <div class="accordion-body">
                        Yes, it is very safe. Serious complications are rare.
                      </div>
                    </div>
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