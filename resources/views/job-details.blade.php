@extends('layout.main')
@section('content')
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Job Details</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('careers')}}">Careers</a></li>
        <li class="breadcrumb-item active">{{ $job->title }}</li>
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
                <h2 class="job-title">{{ $job->title }}</h2>
                <div class="job-meta-top">
                  <span class="company-name">{{ $job->company }}</span>
                </div>
              </div>
              <span class="job-badge">{{ $job->job_type }}</span>
            </div>
            
            <div class="job-meta-info">
              <div class="job-meta-item">
                <i class="fa-solid fa-calendar"></i>
                <span>Posted: {{ $job->posted_date->format('F d, Y') }}</span>
              </div>
              <div class="job-meta-item">
                <i class="fa-solid fa-location-dot"></i>
                <span>{{ $job->location }}</span>
              </div>
              <div class="job-meta-item">
                <i class="fa-regular fa-clock"></i>
                <span>Posted {{ $job->posted_date->diffForHumans() }}</span>
              </div>
            </div>
          </div>

          <!-- Job Description -->
          <div class="job-content-card">
            @if($job->description)
            <div class="job-section">
              <h3 class="job-section-title">Job Description</h3>
              <div>{!! $job->description !!}</div>
            </div>
            @endif

            @if($job->qualifications)
            <div class="job-section">
              <h3 class="job-section-title">Qualifications & Requirements</h3>
              <div>{!! $job->qualifications !!}</div>
            </div>
            @endif

            @if($job->experience)
            <div class="job-section">
              <h3 class="job-section-title">Experience Required</h3>
              <p>{{ $job->experience }}</p>
            </div>
            @endif

            <div class="job-section">
              <h3 class="job-section-title">Employment Type</h3>
              <p>{{ $job->job_type }}</p>
            </div>

            <div class="job-section">
              <h3 class="job-section-title">How to Apply</h3>
              <p>Interested candidates may send their updated CV to:</p>
              <div class="job-email-box">
                <i class="fa-regular fa-envelope"></i>
                <a href="mailto:{{ $job->contact_email }}">{{ $job->contact_email }}</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Sidebar - Apply Form -->
        <div class="col-lg-4">
          <div class="apply-form-sidebar">
            <h3 class="apply-form-title">Apply for this Position</h3>
            <p class="apply-form-subtitle">Fill the form below to apply for this job</p>
            
            <form class="cs_contact_form row cs_gap_y_30" method="POST" action="{{ route('job.application.store') }}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="job_id" value="{{ $job->id }}">
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
                <p class="form-note"><i class="fa-regular fa-info-circle"></i> You can also email your CV directly to <a href="mailto:{{ $job->contact_email }}">{{ $job->contact_email }}</a></p>
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
                    <span>{{ $job->posted_date->format('F d, Y') }}</span>
                  </div>
                </li>
                <li>
                  <i class="fa-regular fa-clock"></i>
                  <div>
                    <strong>Posted:</strong>
                    <span>{{ $job->posted_date->diffForHumans() }}</span>
                  </div>
                </li>
                <li>
                  <i class="fa-regular fa-briefcase"></i>
                  <div>
                    <strong>Job Type:</strong>
                    <span>{{ $job->job_type }}</span>
                  </div>
                </li>
                <li>
                  <i class="fa-solid fa-location-dot"></i>
                  <div>
                    <strong>Location:</strong>
                    <span>{{ $job->location }}</span>
                  </div>
                </li>
                @if($job->department)
                <li>
                  <i class="fa-regular fa-building"></i>
                  <div>
                    <strong>Department:</strong>
                    <span>{{ $job->department }}</span>
                  </div>
                </li>
                @endif
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