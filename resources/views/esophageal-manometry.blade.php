@extends('layout.main')
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Esophageal Manometry</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Esophageal Manometry</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 text-center mb-4">
            <h2 class="cs_section_title">Esophageal Manometry</h2>
          </div>
          <p class="cs_service_subtitle">A diagnostic test to evaluate how your esophagus muscles move and squeeze food toward your stomach.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What is it?</h3>
            <p class="cs_service_subtitle">Esophageal manometry is a test that measures how well the muscles of your esophagus (food pipe) work by inserting a thin tube through the nose into the stomach.</p>

            <h3 class="cs_service_heading">Why is it done?</h3>
            <ul class="cs_list">
              <li>Difficulty swallowing</li>
              <li>Chest pain not related to the heart</li>
              <li>Before acid reflux surgery</li>
            </ul>

            <h3 class="cs_service_heading">Duration &amp; Recovery Time</h3>
            <ul class="cs_list">
              <li>Procedure duration: 20–30 minutes</li>
              <li>Recovery time: Immediate; no sedation used</li>
            </ul>

            <h3 class="cs_service_heading">Before Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: Do not eat or drink for at least 6 hours before.</li>
              <li>Stop medications that affect esophageal muscles if advised.</li>
              <li>Inform your doctor of any nasal issues or surgeries.</li>
            </ul>

            <h3 class="cs_service_heading">After Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: You may eat and drink normally right after the procedure.</li>
              <li>Rest &amp; Activity: No restrictions. Resume normal activities immediately.</li>
              <li>Medications: Resume regular medications unless told otherwise.</li>
              <li>Hygiene: Minor nasal irritation may occur; saline spray can help.</li>
              <li>Follow-up: Results will be reviewed during your next clinic visit.</li>
            </ul>

            <h3 class="cs_service_heading">Complications may include</h3>
            <ul class="cs_list">
              <li>Minor nosebleed</li>
              <li>Sneezing or coughing</li>
              <li>Rare gagging or discomfort</li>
            </ul>

            <div class="cs_alert cs_alert_warning">
              <p class="mb-0"><strong>See your doctor immediately if you have:</strong></p>
              <ul class="cs_list">
                <li>Persistent bleeding</li>
                <li>Breathing difficulty</li>
                <li>Severe pain (rare)</li>
              </ul>
            </div>

            <h3 class="cs_service_heading">Not Suitable For (Tell Your Doctor If…)</h3>
            <ul class="cs_list">
              <li>Severe nasal blockage or deformity</li>
              <li>Bleeding tendency</li>
            </ul>

            <div class="cs_alert cs_alert_info mt-3">
              <p class="mb-0">⚠ Note: Dates are not fixed in advance. Please check this page regularly for upcoming workshop announcements.</p>
            </div>

            <div class="cs_height_40"></div>
            <h3 class="cs_service_heading">Patient Frequently Asked Questions</h3>
            <div class="accordion" id="manometryFaqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    Will I be sedated?
                  </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#manometryFaqAccordion">
                  <div class="accordion-body">No, sedation is not typically used for esophageal manometry.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    Is it painful?
                  </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#manometryFaqAccordion">
                  <div class="accordion-body">It’s slightly uncomfortable but not painful.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    Can I go back to work?
                  </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#manometryFaqAccordion">
                  <div class="accordion-body">Yes, you can usually return to work immediately after the procedure.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    How are results used?
                  </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#manometryFaqAccordion">
                  <div class="accordion-body">Results are reviewed with your doctor to diagnose motility disorders and plan treatment.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                    Any special care after?
                  </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#manometryFaqAccordion">
                  <div class="accordion-body">No special care is needed; follow your doctor’s instructions if minor nasal irritation occurs.</div>
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