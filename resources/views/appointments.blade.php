@extends('layout.main')
@section('content')
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="{{asset('assets/img/medical_solution_1.JPG')}}">
    <div class="container">
      <h1 class="cs_page_title">Appointments</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
        <form class="cs_appointment_form row cs_gap_y_30">
        <div class="col-md-6">
            <select name="procedure" class="cs_form_field">
              <option value="Select Procedure">Select Procedure</option>
              <option value="Endoscopy">Endoscopy</option>
              <option value="ERCP">ERCP</option>
              <option value="Colonoscopy">Colonoscopy</option>
              <option value="Esophageal Manometry">Esophageal Manometry</option>
              <option value="ESWL">ESWL</option>
              <option value="EUS">EUS</option>
              <option value="EUS RFA">EUS RFA</option>
              <option value="Fibroscan">Fibroscan</option>
              <option value="Spyglass">Spyglass</option>
            </select>
          </div>
          <div class="col-md-6">
            <select name="doctor" class="cs_form_field">
              <option value="Select Doctor">Select Doctor</option>
              <option value="Dr. Ayesha">Dr. Ayesha</option>
              <option value="Dr. Mansoor">Dr. Mansoor</option>
              <option value="Dr Aftab Leghari">Dr Aftab Leghari</option>
              <option value="Dr Asma Yaseen">Dr Asma Yaseen</option>
              <option value="Dr Fahad Kakar">Dr Fahad Kakar</option>
              <option value="Dr Muhammad Asim">Dr Muhammad Asim</option>
              <option value="Dr Shanil Kadir">Dr Shanil Kadir</option>
              <option value="Dr Babar Matin">Dr Babar Matin</option>
              <option value="Dr. Mehreen Siyal">Dr. Mehreen Siyal</option>
              <option value="Dr. Abeer Altaf">Dr. Abeer Altaf</option>
              <option value="Dr. Fahad Kakar">Dr. Fahad Kakar</option>
              <option value="Dr. Saad Khalid Niaz">Dr. Saad Khalid Niaz</option>
              <option value="Dr. Sajida Qureshi">Dr. Sajida Qureshi</option>
              <option value="Dr Shahriyar Ghazanfar">Dr Shahriyar Ghazanfar</option>
              <option value="Dr. Noval Zakaria">Dr. Noval Zakaria</option>
              <option value="Dr. Asim Sharif">Dr. Asim Sharif</option>
            </select>
          </div>
          <div class="col-md-6">
            <input type="text" name="name" class="cs_form_field" placeholder="Name">
          </div>
          <div class="col-md-6">
            <input type="email" name="email" class="cs_form_field" placeholder="Email">
          </div>
          <div class="col-md-6">
            <input type="tel" name="phone" class="cs_form_field" placeholder="Phone">
          </div>
          <div class="col-md-6">
            <input type="text" name="date" class="cs_form_field" placeholder="mm/dd/yyyy">
          </div>
          <div class="col-md-12">
            <button type="submit" class="cs_btn cs_style_1 cs_white_color">Make an appoinment</button>
          </div>
        </form>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Appointment Section -->
@endsection