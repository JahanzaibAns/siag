@extends('admin/layouts.main')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

<style>
    .card-header {
        background: #f8f9fa;
        border-bottom: 2px solid #e9ecef;
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-group label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
        display: block;
    }
    
    .required::after {
        content: "*";
        color: red;
        margin-left: 4px;
    }
    
    .note-editor.note-frame {
        border: 1px solid #e9ecef;
        border-radius: 0.375rem;
    }
</style>

<div class="page-wrapper">
    <div class="page-content">

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Edit Job Posting</h5>
            </div>
            <div class="card-body">
                <form method="POST" id="jobForm" enctype="multipart/form-data" action="">
                    @csrf
                    
                    <!-- Hidden fields for editor content -->
                    <input type="hidden" name="description" id="description-content">
                    <input type="hidden" name="qualifications" id="qualifications-content">

                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-8">
                            <!-- Job Title -->
                            <div class="form-group">
                                <label class="required">Job Title</label>
                                <input type="text" name="title" class="form-control" placeholder="e.g. Consultant Gastroenterologist" id="title" required>
                            </div>

                            <!-- Company Name -->
                            <div class="form-group">
                                <label class="required">Company Name</label>
                                <input type="text" name="company" class="form-control" placeholder="e.g. Sindh Institute of Advanced Gastroenterology (SIAG)" id="company" required>
                            </div>

                            <!-- Job Description (Summernote) -->
                            <div class="form-group">
                                <label class="required">Job Description</label>
                                <textarea id="summernote-description" class="form-control"></textarea>
                                <small class="text-muted">Describe the role, responsibilities, and ideal candidate</small>
                            </div>

                            <!-- Qualifications (Summernote) -->
                            <div class="form-group">
                                <label>Qualifications & Requirements</label>
                                <textarea id="summernote-qualifications" class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-4">
                            <!-- Location -->
                            <div class="form-group">
                                <label class="required">Location</label>
                                <input type="text" name="location" class="form-control" placeholder="e.g. Karachi" required>
                            </div>

                            <!-- Employment Type -->
                            <div class="form-group">
                                <label class="required">Employment Type</label>
                                <select name="job_type" class="form-control" required>
                                    <option value="">Select Type</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Contract">Contract</option>
                                </select>
                            </div>

                            <!-- Posted Date -->
                            <div class="form-group">
                                <label class="required">Posted Date</label>
                                <input type="date" name="posted_date" class="form-control" id="posted_date" required>
                            </div>

                            <!-- Department (Optional) -->
                            <div class="form-group">
                                <label>Department</label>
                                <input type="text" name="department" class="form-control" placeholder="e.g. GI Motility">
                            </div>

                            <!-- Experience (Simple text field) -->
                            <div class="form-group">
                                <label>Experience Required</label>
                                <input type="text" name="experience" class="form-control" placeholder="e.g. Minimum 2 years">
                            </div>

                            <!-- Contact Email -->
                            <div class="form-group">
                                <label class="required">Contact Email</label>
                                <input type="email" name="contact_email" class="form-control" placeholder="hr@siagpk.org" required>
                            </div>

                            <!-- Featured Image -->
                            <!-- <div class="form-group">
                                <label>Featured Image</label>
                                <input type="file" name="job_image" class="dropify" data-allowed-file-extensions="jpg jpeg png webp">
                                <small class="text-muted">Optional</small>
                            </div> -->

                            <!-- Status -->
                            <!-- <div class="form-group">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="status" id="status" value="1" checked>
                                    <label class="form-check-label" for="status">Active (visible on website)</label>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <!-- How to Apply Section (Email will be used from contact email) -->
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                <i class="bx bx-info-circle me-2"></i>
                                Candidates will apply via: <strong id="email-preview">hr@siagpk.org</strong>
                                <!-- <button type="button" class="btn btn-sm btn-outline-primary ms-3" onclick="updateEmailPreview()">Update</button> -->
                            </div>
                        </div>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary px-4" onclick="submitForm(); return false;">
                                <i class="bx bx-save me-2"></i>Publish Job
                            </button>
                            
                            <a href="{{ route('admin.jobs') }}" class="btn btn-outline-secondary px-4 ms-2">
                                <i class="bx bx-arrow-back me-2"></i>Cancel
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script>
    $(document).ready(function () {
        // Initialize Dropify
        $('.dropify').dropify({
            messages: {
                'default': 'Drag & drop or click to upload',
                'replace': 'Drag & drop or click to replace',
                'remove': 'Remove'
            }
        });
        
        // Initialize Summernote for Description
        $('#summernote-description').summernote({
            height: 250,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['view', ['codeview']]
            ],
            placeholder: 'Write full job description here...'
        });
        
        // Initialize Summernote for Qualifications
        $('#summernote-qualifications').summernote({
            height: 200,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['view', ['codeview']]
            ],
            placeholder: 'List qualifications, requirements, and skills...'
        });
        
        // Set today's date as default
        var today = new Date().toISOString().split('T')[0];
        $('#posted_date').val(today);
        
        // Update email preview on change
        $('input[name="contact_email"]').on('keyup', function() {
            updateEmailPreview();
        });
    });
    
    // Update email preview
    function updateEmailPreview() {
        var email = $('input[name="contact_email"]').val() || 'hr@siagpk.org';
        $('#email-preview').text(email);
    }
    
    // Submit form
    function submitForm() {
        // Get required fields
        var title = $('input[name="title"]').val().trim();
        var company = $('input[name="company"]').val().trim();
        var location = $('input[name="location"]').val().trim();
        var jobType = $('select[name="job_type"]').val();
        var postedDate = $('input[name="posted_date"]').val();
        var contactEmail = $('input[name="contact_email"]').val().trim();
        
        // Get editor content
        var description = $('#summernote-description').summernote('code');
        var qualifications = $('#summernote-qualifications').summernote('code');
        
        // Validate required fields
        if (title === '') {
            Swal.fire('Error', 'Please enter job title', 'error');
            return false;
        }
        
        if (company === '') {
            Swal.fire('Error', 'Please enter company name', 'error');
            return false;
        }
        
        if (location === '') {
            Swal.fire('Error', 'Please enter location', 'error');
            return false;
        }
        
        if (jobType === '') {
            Swal.fire('Error', 'Please select employment type', 'error');
            return false;
        }
        
        if (postedDate === '') {
            Swal.fire('Error', 'Please select posted date', 'error');
            return false;
        }
        
        if (contactEmail === '') {
            Swal.fire('Error', 'Please enter contact email', 'error');
            return false;
        }
        
        if (!isValidEmail(contactEmail)) {
            Swal.fire('Error', 'Please enter a valid email address', 'error');
            return false;
        }
        
        // Check if description is empty (strip HTML tags)
        var text = description.replace(/<[^>]*>?/gm, '').trim();
        if (text === '') {
            Swal.fire('Error', 'Please enter job description', 'error');
            return false;
        }
        
        // Set values to hidden fields
        $('#description-content').val(description);
        $('#qualifications-content').val(qualifications);
        
        // Submit form
        $('#jobForm').submit();
    }
    
    // Email validation
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
</script>
@endpush