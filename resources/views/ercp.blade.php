@extends('layout.main')
@section('title')
ERCP | SIAG
@endsection
@section('meta_description')
ERCP (bile duct and pancreatic procedures) at SIAG. Free therapeutic endoscopy for gallstones, strictures, and biliary disease in Karachi.
@endsection
@section('content')
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">ERCP</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">ERCP</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cs_section_heading cs_style_1 cs_type_1 mb-4">
            <h2 class="cs_section_title">ERCP (Endoscopic Retrograde Cholangiopancreatography)</h2>
        </div>
        <p class="cs_service_subtitle">A diagnostic and therapeutic procedure for biliary and pancreatic duct diseases.</p>

          <div class="cs_service_details">
            <h3 class="cs_service_heading">What is it?</h3>
            <p class="cs_service_subtitle">ERCP uses a thin, flexible camera and X-ray to diagnose and treat problems in the bile or pancreatic ducts. It helps doctors remove stones, insert stents, or take tissue samples.</p>

            <h3 class="cs_service_heading">Why is it done?</h3>
            <ul class="cs_list">
              <li>Gallstones blocking bile ducts</li>
              <li>Yellow skin or eyes (jaundice)</li>
              <li>Bile duct or pancreatic tumors</li>
              <li>Infections or narrowing of ducts</li>
            </ul>

            <h3 class="cs_service_heading">Duration &amp; Recovery Time</h3>
            <ul class="cs_list">
              <li>Procedure duration: 45–60 minutes</li>
              <li>Recovery time: About 1–2 hours observation; usually home same day</li>
            </ul>

            <h3 class="cs_service_heading">Before Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: Do not eat or drink for at least 6–8 hours before the procedure</li>
              <li>Continue medications only if advised by your doctor</li>
              <li>Inform your doctor if you are pregnant, take diabetes medications, have heart/lung conditions, or take blood thinners</li>
              <li>Arrange for someone to accompany you home</li>
            </ul>

            <h3 class="cs_service_heading">After Your Procedure</h3>
            <ul class="cs_list">
              <li>Diet: Start with sips of water after throat numbness wears off. Then move to soft foods like soup, porridge, khichdi. Avoid spicy, oily, or hot food for 24 hours.</li>
              <li>Rest &amp; Activity: Rest for the day. Do not drive, consume alcohol, or make important decisions for 24 hours if sedated.</li>
              <li>Medications: Resume your regular medications unless advised otherwise.</li>
              <li>Hygiene: No wound care is needed.</li>
              <li>Follow-up: Attend all follow-up visits. Biopsy results (if taken) may take a few days.</li>
            </ul>

            <h3 class="cs_service_heading">Complications may include</h3>
            <ul class="cs_list">
              <li>Pancreatitis (inflammation of the pancreas)</li>
              <li>Bleeding or infection</li>
              <li>Allergic reaction to sedation or dye</li>
              <li>Very rare risk of a tear (perforation)</li>
            </ul>

            <div class="cs_alert cs_alert_warning">
              <p class="mb-0"><strong>See your doctor immediately if you have:</strong></p>
              <ul class="cs_list">
                <li>Severe abdominal pain</li>
                <li>Fever or chills</li>
                <li>Vomiting blood or black stools</li>
                <li>Increased yellowing of skin or eyes</li>
              </ul>
            </div>

            <h3 class="cs_service_heading">Not Suitable For (Tell Your Doctor If…)</h3>
            <ul class="cs_list">
              <li>You are pregnant</li>
              <li>Have severe lung or heart disease</li>
              <li>Are allergic to iodine contrast</li>
              <li>Have difficulty swallowing</li>
            </ul>

            <div class="cs_alert cs_alert_info mt-3">
              <p class="mb-0">⚠ Note: Dates are not fixed in advance. Please check this page regularly for upcoming workshop announcements.</p>
            </div>

            <div class="my-4">
              <h3 class="cs_service_heading">ERCP Procedure List</h3>
              <ul class="cs_list">
                <li>SPYGLASS – EHL</li>
                <li>SPY BITE BX</li>
                <li>SPY GLASS GUIDED MIGRATED STENT REMOVED</li>
                <li>BILLIARY AND PANCREATIC STENTING</li>
                <li>AMPULLECTOMY</li>
                <li>BILL/ SEMS</li>
                <li>BILLIARY CYTOLOFY</li>
                <li>MIGRATED STENT REMOVAL</li>
                <li>BILLIARY AND PANCREATIC STONE REMOVAL</li>
                <li>BILLIARY AND PANCREATIC STRICTURE DILATATION</li>
                <li>PTC GUIDED SPY GLASS</li>
                <li>RFA</li>
              </ul>
            </div>

            <h3 class="cs_service_heading">Patient Frequently Asked Questions</h3>
            <div class="accordion" id="ercpFaqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    Will I be awake during the procedure?
                  </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#ercpFaqAccordion">
                  <div class="accordion-body">You may receive sedation and throat spray to help you relax.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    Will it hurt?
                  </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#ercpFaqAccordion">
                  <div class="accordion-body">You might feel bloated afterward, but you will not feel pain during the procedure.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    Can I eat afterward?
                  </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#ercpFaqAccordion">
                  <div class="accordion-body">Yes, start with light soft foods when recommended by your doctor.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    When will I get the results?
                  </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#ercpFaqAccordion">
                  <div class="accordion-body">Your doctor may share immediate findings; biopsy/cytology results may take a few days.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                    Is the test safe?
                  </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#ercpFaqAccordion">
                  <div class="accordion-body">Yes, ERCP is safe when done by experts, though some risks exist.</div>
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