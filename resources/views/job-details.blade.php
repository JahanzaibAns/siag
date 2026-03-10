@extends('layout.main')
@section('content')
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Job Details</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('careers')}}">Careers</a></li>
        <li class="breadcrumb-item active">Gastroenterologist - GI Motility</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->

  <!-- Start Job Details Section -->
  <section class="job-details-section">
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
      <div class="row">
        <!-- Main Content - Job Details -->
        <div class="col-lg-8">
          <!-- Job Header -->
          <div class="job-header-card">
            <div class="d-flex justify-content-between align-items-start flex-wrap">
              <div>
                <h2 class="job-title">Consultant Gastroenterologist - GI Motility</h2>
                <div class="job-meta-top">
                  <span class="company-name">Sindh Institute of Advanced Gastroenterology (SIAG)</span>
                </div>
              </div>
              <span class="job-badge">Full Time</span>
            </div>
            
            <div class="job-meta-info">
              <div class="job-meta-item">
                <i class="fa-solid fa-calendar"></i>
                <span>Posted: March 7, 2026</span>
              </div>
              <div class="job-meta-item">
                <i class="fa-solid fa-location-dot"></i>
                <span>Karachi</span>
              </div>
              <div class="job-meta-item">
                <i class="fa-regular fa-clock"></i>
                <span>Posted 3 days ago</span>
              </div>
              <div class="job-meta-item">
                <i class="fa-regular fa-user"></i>
                <span>by admin</span>
              </div>
            </div>
          </div>

          <!-- Job Description -->
          <div class="job-content-card">
            <div class="job-section">
              <h3 class="job-section-title">Job Description</h3>
              <p>Sindh Institute of Advanced Gastroenterology (SIAG) invites applications from highly qualified and motivated Consultant Gastroenterologists with a special interest and expertise in Gastrointestinal Motility Disorders. The incumbent will be responsible for leading and independently running the already established GI Motility Unit, delivering advanced endoscopic and therapeutic services, contributing significantly to clinical research, and actively participating in training and capacity building of fellows and residents.</p>
            </div>

            <div class="job-section">
              <h3 class="job-section-title">Key Responsibilities</h3>
              <h4 class="job-subsection-title">Clinical & Procedural:</h4>
              <ul class="job-list">
                <li>Lead and expand the GI Motility Laboratory.</li>
                <li>Diagnose and manage complex esophageal, gastric, intestinal, and anorectal motility disorders.</li>
                <li>Perform specialized investigations (HRM, pH impedance, anorectal manometry, biofeedback).</li>
                <li>Provide OPD, inpatient consultations, and emergency on-call services.</li>
                <li>Conduct advanced endoscopic procedures including gastroscopy, colonoscopy, and ERCP.</li>
              </ul>

              <h4 class="job-subsection-title">Teaching & Training:</h4>
              <ul class="job-list">
                <li>Train and mentor fellows and residents in GI motility diagnostics and procedures.</li>
                <li>Supervise academic activities (case discussions, journal clubs, M&M meetings).</li>
                <li>Support research training and SOP development.</li>
              </ul>

              <h4 class="job-subsection-title">Research & Academic:</h4>
              <ul class="job-list">
                <li>Conduct and supervise clinical research in GI motility.</li>
                <li>Minimum two peer-reviewed publications per year.</li>
                <li>Ensure IRB and ethical compliance.</li>
              </ul>

              <h4 class="job-subsection-title">Administrative:</h4>
              <ul class="job-list">
                <li>Oversee daily operations of the GI Motility Unit.</li>
                <li>Maintain documentation, quality standards, and institutional compliance.</li>
                <li>Participate in departmental committees and service development.</li>
              </ul>
            </div>

            <div class="job-section">
              <h3 class="job-section-title">Qualification & Experience</h3>
              <ul class="job-list">
                <li><strong>Qualification:</strong> FCPS / MD / MRCP (or equivalent) in Gastroenterology. Specialized training in GI Motility Disorders</li>
                <li><strong>Experience:</strong> Minimum 2 years' experience in a dedicated GI Motility Lab.</li>
                <li>Proven expertise in ERCP and therapeutic endoscopy.</li>
                <li>Demonstrated research publications.</li>
                <li>Teaching hospital experience preferred.</li>
              </ul>
            </div>

            <div class="job-section">
              <h3 class="job-section-title">Employment Type</h3>
              <p>Full-time / Contract</p>
            </div>

            <div class="job-section">
              <h3 class="job-section-title">How to Apply</h3>
              <p>Interested candidates may send their updated CV to:</p>
              <div class="job-email-box">
                <i class="fa-regular fa-envelope"></i>
                <a href="mailto:waqas.qadir@siagpk.org">waqas.qadir@siagpk.org</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Sidebar - Apply Form -->
        <div class="col-lg-4">
          <div class="apply-form-sidebar">
            <h3 class="apply-form-title">Apply for this Position</h3>
            <p class="apply-form-subtitle">Fill the form below to apply for this job</p>
            
            <form class="cs_contact_form row cs_gap_y_30" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col-md-12">
                <input type="text" name="name" class="cs_form_field" placeholder="Your Full Name *" required>
              </div>
              <div class="col-md-12">
                <input type="email" name="email" class="cs_form_field" placeholder="Your Email *" required>
              </div>
              <div class="col-md-12">
                <input type="text" name="phone" class="cs_form_field" placeholder="Your Phone Number *" required>
              </div>
              <div class="col-md-12">
                <input type="text" name="subject" class="cs_form_field" placeholder="Subject">
              </div>
              
              <!-- File Upload with Feedback -->
              <div class="col-lg-12">
                <div class="file-upload-wrapper">
                  <label for="cv-upload" class="file-upload-label" id="file-upload-label">
                    <i class="fa-solid fa-cloud-upload-alt" id="upload-icon"></i>
                    <span id="upload-text">Upload CV (PDF, DOC, DOCX) *</span>
                    <input type="file" id="cv-upload" name="cv" accept=".pdf,.doc,.docx" required>
                  </label>
                  <!-- File feedback message -->
                  <div class="file-feedback" id="file-feedback" style="display: none;">
                    <i class="fa-solid fa-check-circle"></i>
                    <span id="file-name"></span>
                  </div>
                </div>
              </div>
              
              <!-- <div class="col-lg-12">
                <textarea rows="4" name="message" class="cs_form_field" placeholder="Cover Letter / Additional Information"></textarea>
              </div> -->
             
              <div class="col-lg-12">
                <button type="submit" class="cs_btn cs_style_1 cs_color_1 w-100">Submit Application</button>
              </div>
              
              <div class="col-lg-12">
                <p class="form-note"><i class="fa-regular fa-info-circle"></i> You can also email your CV directly to <a href="mailto:waqas.qadir@siagpk.org">waqas.qadir@siagpk.org</a></p>
              </div>
            </form>
            
            <!-- Job Summary Box -->
            <div class="job-summary-box">
              <h4 class="job-summary-title">Job Summary</h4>
              <ul class="job-summary-list">
                <li>
                  <i class="fa-regular fa-calendar"></i>
                  <div>
                    <strong>Posted On:</strong>
                    <span>March 7, 2026</span>
                  </div>
                </li>
                <li>
                  <i class="fa-regular fa-clock"></i>
                  <div>
                    <strong>Posted:</strong>
                    <span>3 days ago</span>
                  </div>
                </li>
                <li>
                  <i class="fa-regular fa-briefcase"></i>
                  <div>
                    <strong>Job Type:</strong>
                    <span>Full Time</span>
                  </div>
                </li>
                <li>
                  <i class="fa-solid fa-location-dot"></i>
                  <div>
                    <strong>Location:</strong>
                    <span>Karachi</span>
                  </div>
                </li>
                <li>
                  <i class="fa-regular fa-building"></i>
                  <div>
                    <strong>Department:</strong>
                    <span>GI Motility</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
  </section>

  <!-- Job Details Page Styles -->
  <style>
    
  </style>

  <!-- JavaScript for File Upload Feedback -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const fileInput = document.getElementById('cv-upload');
      const fileLabel = document.getElementById('file-upload-label');
      const fileFeedback = document.getElementById('file-feedback');
      const fileName = document.getElementById('file-name');
      const uploadText = document.getElementById('upload-text');
      const uploadIcon = document.getElementById('upload-icon');
      
      fileInput.addEventListener('change', function(e) {
        if (this.files && this.files.length > 0) {
          const file = this.files[0];
          const fileSize = (file.size / 1024).toFixed(2); // Size in KB
          
          // Show feedback
          fileLabel.classList.add('file-selected');
          fileFeedback.style.display = 'flex';
          fileName.textContent = `${file.name} (${fileSize} KB)`;
          
          // Change upload text
          uploadText.textContent = 'Change CV';
          uploadIcon.className = 'fa-solid fa-edit';
        } else {
          // No file selected
          fileLabel.classList.remove('file-selected');
          fileFeedback.style.display = 'none';
          uploadText.textContent = 'Upload CV (PDF, DOC, DOCX) *';
          uploadIcon.className = 'fa-solid fa-cloud-upload-alt';
        }
      });
      
      // Optional: Add drag and drop visual feedback
      fileLabel.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.style.borderColor = 'var(--accent-color)';
        this.style.background = '#fff5f0';
      });
      
      fileLabel.addEventListener('dragleave', function(e) {
        this.style.borderColor = '#ddd';
        this.style.background = '';
      });
      
      fileLabel.addEventListener('drop', function(e) {
        e.preventDefault();
        this.style.borderColor = '#ddd';
        this.style.background = '';
      });
    });
  </script>
@endsection