@extends('layout.main')
@section('content')
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{asset('assets/img/medical_solution_1.JPG')}}">
    <div class="container">
      <h1 class="cs_page_title">Appointments</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Appointments</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->
  <!-- Start Appointment Section -->
  <section class="cs_appointment">
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_appointment_form_wrapper">
        <div class="cs_section_heading cs_style_1 text-center">
          <p class="cs_section_subtitle cs_accent_color">
            <span class="cs_shape_left"></span>BOOK AN APPOINTMENT<span class="cs_shape_right"></span>
          </p>
          <h2 class="cs_section_title">Your health deserves timely care.</h2>
        </div>
        <div class="cs_height_40 cs_height_lg_35"></div>
        
        <form class="cs_appointment_form row cs_gap_y_30" method="POST" action="{{ route('appointments.store') }}">
          @csrf
          <div class="col-md-6">
            <select name="procedure" class="cs_form_field @error('procedure') is-invalid @enderror" required>
              <option value="">Select Procedure</option>
              <option value="Endoscopy" {{ old('procedure') == 'Endoscopy' ? 'selected' : '' }}>Endoscopy</option>
              <option value="ERCP" {{ old('procedure') == 'ERCP' ? 'selected' : '' }}>ERCP</option>
              <option value="Colonoscopy" {{ old('procedure') == 'Colonoscopy' ? 'selected' : '' }}>Colonoscopy</option>
              <option value="Esophageal Manometry" {{ old('procedure') == 'Esophageal Manometry' ? 'selected' : '' }}>Esophageal Manometry</option>
              <option value="ESWL" {{ old('procedure') == 'ESWL' ? 'selected' : '' }}>ESWL</option>
              <option value="EUS" {{ old('procedure') == 'EUS' ? 'selected' : '' }}>EUS</option>
              <option value="EUS RFA" {{ old('procedure') == 'EUS RFA' ? 'selected' : '' }}>EUS RFA</option>
              <option value="Fibroscan" {{ old('procedure') == 'Fibroscan' ? 'selected' : '' }}>Fibroscan</option>
              <option value="Spyglass" {{ old('procedure') == 'Spyglass' ? 'selected' : '' }}>Spyglass</option>
            </select>
            @error('procedure')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-6">
            <select name="doctor" class="cs_form_field @error('doctor') is-invalid @enderror" required>
              <option value="">Select Doctor</option>
              <option value="Dr. Ayesha" {{ old('doctor') == 'Dr. Ayesha' ? 'selected' : '' }}>Dr. Ayesha</option>
              <option value="Dr. Mansoor" {{ old('doctor') == 'Dr. Mansoor' ? 'selected' : '' }}>Dr. Mansoor</option>
              <option value="Dr Aftab Leghari" {{ old('doctor') == 'Dr Aftab Leghari' ? 'selected' : '' }}>Dr Aftab Leghari</option>
              <option value="Dr Asma Yaseen" {{ old('doctor') == 'Dr Asma Yaseen' ? 'selected' : '' }}>Dr Asma Yaseen</option>
              <option value="Dr Fahad Kakar" {{ old('doctor') == 'Dr Fahad Kakar' ? 'selected' : '' }}>Dr Fahad Kakar</option>
              <option value="Dr Muhammad Asim" {{ old('doctor') == 'Dr Muhammad Asim' ? 'selected' : '' }}>Dr Muhammad Asim</option>
              <option value="Dr Shanil Kadir" {{ old('doctor') == 'Dr Shanil Kadir' ? 'selected' : '' }}>Dr Shanil Kadir</option>
              <option value="Dr Babar Matin" {{ old('doctor') == 'Dr Babar Matin' ? 'selected' : '' }}>Dr Babar Matin</option>
              <option value="Dr. Mehreen Siyal" {{ old('doctor') == 'Dr. Mehreen Siyal' ? 'selected' : '' }}>Dr. Mehreen Siyal</option>
              <option value="Dr. Abeer Altaf" {{ old('doctor') == 'Dr. Abeer Altaf' ? 'selected' : '' }}>Dr. Abeer Altaf</option>
              <option value="Dr. Saad Khalid Niaz" {{ old('doctor') == 'Dr. Saad Khalid Niaz' ? 'selected' : '' }}>Dr. Saad Khalid Niaz</option>
              <option value="Dr. Sajida Qureshi" {{ old('doctor') == 'Dr. Sajida Qureshi' ? 'selected' : '' }}>Dr. Sajida Qureshi</option>
              <option value="Dr Shahriyar Ghazanfar" {{ old('doctor') == 'Dr Shahriyar Ghazanfar' ? 'selected' : '' }}>Dr Shahriyar Ghazanfar</option>
              <option value="Dr. Noval Zakaria" {{ old('doctor') == 'Dr. Noval Zakaria' ? 'selected' : '' }}>Dr. Noval Zakaria</option>
              <option value="Dr. Asim Sharif" {{ old('doctor') == 'Dr. Asim Sharif' ? 'selected' : '' }}>Dr. Asim Sharif</option>
            </select>
            @error('doctor')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-6">
            <input type="text" name="name" class="cs_form_field @error('name') is-invalid @enderror" placeholder="Name *" value="{{ old('name') }}" required>
            @error('name')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-6">
            <input type="email" name="email" class="cs_form_field @error('email') is-invalid @enderror" placeholder="Email *" value="{{ old('email') }}" required>
            @error('email')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-6">
            <input type="tel" name="phone" class="cs_form_field @error('phone') is-invalid @enderror" placeholder="Phone *" value="{{ old('phone') }}" required>
            @error('phone')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-6">
            <input type="date" name="appointment_date" class="cs_form_field @error('appointment_date') is-invalid @enderror" value="{{ old('appointment_date') }}" min="{{ date('Y-m-d') }}" required>
            @error('appointment_date')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-12">
            <button type="submit" class="cs_btn cs_style_1 cs_white_color">Make an appointment</button>
          </div>
        </form>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Appointment Section -->
@endsection