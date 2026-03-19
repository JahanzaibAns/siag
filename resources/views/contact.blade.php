@extends('layout.main')
@section('title')
Contact Us | SIAG
@endsection
@section('meta_description')
Get in touch with SIAG Karachi. Contact details, location at Civil Hospital, and inquiry form for appointments and gastroenterology services.
@endsection
@section('content')
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{asset('assets/img/banners/contact-banner.jpg')}}">
    <div class="container">
      <h1 class="cs_page_title">Contact Us</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Contact Us</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->
  <!-- Start Contact Section -->
  <section class="cs_contact">
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row cs_gap_y_30">
        <div class="col-lg-6">
          <div class="cs_contact_thumbnail cs_pr_40">
            <div class="cs_teeth_shape">
              <img src="assets/img/icons/about_icon_1.png" alt="Image" class="cs_spinner_img">
            </div>
            <div class="cs_contact_img">
              <img src="assets/img/cta_img_1.jpg" alt="Image">
            </div>
            <div class="cs_contact_bg_shape">
              <div class="cs_white_bg_shape"></div>
              <div class="cs_iconbox cs_style_4">
                <div class="cs_iconbox_icon cs_center"><img src="assets/img/icons/call_icon_1.png" alt="Icon"></div>
                <div class="cs_iconbox_right">
                  <h3 class="cs_iconbox_title">Call Us</h3>
                  <p class="cs_iconbox_subtitle mb-0">
                    <a href="tel:021327505246">021-32750524-6</a>
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="cs_section_heading cs_style_1">
            <p class="cs_section_subtitle cs_accent_color">
              <span class="cs_shape_left"></span>CONTACT US
            </p>
            <h2 class="cs_section_title">Questions? <br>Let our experts help! </h2>
          </div>
          <div class="cs_height_25 cs_height_lg_25"></div>
          
          <form class="cs_contact_form row cs_gap_y_30" method="POST" action="{{ route('inquiries.store') }}">
            @csrf
            <div class="col-md-12">
              <input type="text" name="name" class="cs_form_field @error('name') is-invalid @enderror" placeholder="Your name *" value="{{ old('name') }}" required>
              @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-12">
              <input type="email" name="email" class="cs_form_field @error('email') is-invalid @enderror" placeholder="Your email *" value="{{ old('email') }}" required>
              @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-12">
              <input type="text" name="subject" class="cs_form_field @error('subject') is-invalid @enderror" placeholder="Your Subject" value="{{ old('subject') }}">
              @error('subject')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-12">
              <input type="text" name="phone" class="cs_form_field @error('phone') is-invalid @enderror" placeholder="Your phone *" value="{{ old('phone') }}" required>
              @error('phone')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-lg-12">
              <textarea rows="5" name="message" class="cs_form_field @error('message') is-invalid @enderror" placeholder="Your comments *" required>{{ old('message') }}</textarea>
              @error('message')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
           
            <div class="col-lg-12">
              <button type="submit" class="cs_btn cs_style_1 cs_color_1">Send Request</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Contact Section -->
  <!-- Start Location Map -->
  <div class="cs_location_map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d226.29191130107375!2d67.0785641!3d24.8409367!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33fc2951bcd39%3A0x1c230a44e3de5bb5!2sSIAG!5e0!3m2!1sen!2s!4v1772126922639!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  
  <!-- End Location Map -->
@endsection