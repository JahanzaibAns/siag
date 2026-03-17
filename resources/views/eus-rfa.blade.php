@extends('layout.main')
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">EUS RFA</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">EUS RFA</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 text-center mb-4">
            <h2 class="cs_section_title">EUS-guided Radiofrequency Ablation (RFA)</h2>
          </div>
          <p class="cs_service_subtitle">A minimally invasive procedure using heat to destroy abnormal tissue in the pancreas or bile ducts.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What is it?</h3>
            <p class="cs_service_subtitle">EUS-guided Radiofrequency Ablation (RFA) is a minimally invasive procedure that uses heat to destroy abnormal tissue or tumors in the pancreas or bile ducts.</p>

            <h3 class="cs_service_heading">Why is it done?</h3>
            <ul class="cs_list">
              <li>Pancreatic tumors or cysts</li>
              <li>Cholangiocarcinoma (bile duct cancer)</li>
              <li>Neuroendocrine tumors</li>
              <li>Palliative treatment for inoperable cases</li>
            </ul>

            <h3 class="cs_service_heading">Duration &amp; Recovery Time</h3>
            <ul class="cs_list">
              <li>Procedure duration: 45–90 minutes</li>
              <li>Recovery time: 2–4 hours observation; home same day</li>
            </ul>

            <h3 class="cs_service_heading">Before Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: No food or drink for at least 6–8 hours.</li>
              <li>Stop blood thinners several days before.</li>
              <li>Discuss allergies and past procedures with your doctor.</li>
            </ul>

            <h3 class="cs_service_heading">After Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: Clear liquids once awake, then soft foods (e.g., khichdi, bananas, soup). Avoid oily, acidic, or spicy food for 2–3 days.</li>
              <li>Rest &amp; Activity: Rest completely on the day of procedure. Avoid exercise for 48–72 hours.</li>
              <li>Medications: Take prescribed antibiotics and painkillers. Resume other medications per doctor’s advice.</li>
              <li>Hygiene: No special care needed.</li>
              <li>Follow-up: Imaging or checkup needed in 4–6 weeks to assess treatment outcome.</li>
            </ul>

            <h3 class="cs_service_heading">Complications may include</h3>
            <ul class="cs_list">
              <li>Bleeding</li>
              <li>Infection</li>
              <li>Pancreatitis</li>
              <li>Rare injury to nearby structures</li>
            </ul>

            <div class="cs_alert cs_alert_warning">
              <p class="mb-0"><strong>See your doctor immediately if you have:</strong></p>
              <ul class="cs_list">
                <li>High fever</li>
                <li>Vomiting or severe abdominal pain</li>
                <li>Blood in stool or vomit</li>
              </ul>
            </div>

            <h3 class="cs_service_heading">Not Suitable For (Tell Your Doctor If…)</h3>
            <ul class="cs_list">
              <li>Bleeding disorders</li>
              <li>Severe cardiopulmonary disease</li>
              <li>Active infection</li>
            </ul>

            <div class="cs_alert cs_alert_info mt-3">
              <p class="mb-0">⚠ Note: Dates are not fixed in advance. Please check this page regularly for upcoming workshop announcements.</p>
            </div>

            <div class="cs_height_40"></div>
            <h3 class="cs_service_heading">Patient Frequently Asked Questions</h3>
            <div class="accordion" id="eusRfaFaqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    Is this a surgery?
                  </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#eusRfaFaqAccordion">
                  <div class="accordion-body">No, EUS RFA is a minimally invasive endoscopic procedure performed through the digestive tract using ultrasound guidance.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    Will I be asleep?
                  </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#eusRfaFaqAccordion">
                  <div class="accordion-body">Yes, you’ll receive sedation or anesthesia to keep you comfortable during the procedure.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    Is one session enough?
                  </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#eusRfaFaqAccordion">
                  <div class="accordion-body">Many patients need only one session, but your doctor will decide based on follow-up imaging and response.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    Will I need hospital stay?
                  </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#eusRfaFaqAccordion">
                  <div class="accordion-body">Most patients are observed for a few hours and discharged the same day if stable.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                    What if symptoms return?
                  </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#eusRfaFaqAccordion">
                  <div class="accordion-body">Contact your doctor promptly; follow-up imaging and additional treatment planning can be arranged.</div>
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