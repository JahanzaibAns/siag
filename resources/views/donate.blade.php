@extends('layout.main')
@section('content')
  <style>
    .donate-section { padding: 60px 0 80px; }
    .donate-card { border-radius: 16px; border: 1px solid #e9edf5; box-shadow: 0 12px 35px rgba(0,0,0,0.08); background: #fff; }
    .donate-card .card-head { padding: 20px 24px; border-bottom: 1px solid #f1f4fb; background: #f7fafd; border-radius: 16px 16px 0 0; }
    .donate-card .card-head h3 { margin: 0; font-size: 1.2rem; color: #284a7d; }
    .donate-card .donate-badge { color: #1556b5; background: #eaf2ff; border-radius: 999px; padding: 5px 12px; font-size: 0.78rem; font-weight: 600; letter-spacing: 0.2px; }
    .donate-card .card-body { padding: 22px 24px 24px; }
    .donate-card .info-row { margin-bottom: 8px; color: #334a76; font-size: .96rem; }
    .donate-card .info-row strong { color: #111d3b; }
    .donate-card .divider { margin: 16px 0; border-top: 1px dashed #e0e7f5; }
    .donate-cta { margin-top: 20px; text-align: center; }
    .donate-cta .btn { border-radius: 50px; padding: 10px 22px; font-weight: 600; }
    .donate-alert { margin-top: 16px; border-radius: 12px; background: #f0f7ff; border: 1px solid #dce8ff; color: #1d3f7f; padding: 14px; }
    @media (max-width: 990px) { .donate-section { padding-top: 40px; } }
  </style>

  <section class="cs_page_heading cs_bg_filed cs_center img_banner_overlay" data-src="assets/img/banners/hero_slider_3.jpg">
    <div class="container">
      <h1 class="cs_page_title">Donations</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
        <li class="breadcrumb-item active">Donations</li>
      </ol>
    </div>
  </section>

  <section class="donate-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="text-center mb-4">
            <span class="cs_sub_title">Support Our Mission</span>
            <h2 class="cs_title">Your Gift Makes a Difference</h2>
            <p class="cs_text">Help us deliver world-class healthcare and education services in underserved communities. Use the donation and zakat account details below.</p>
          </div>

          <div class="row g-4">
            <div class="col-md-6">
              <div class="donate-card">
                <div class="card-head d-flex justify-content-between align-items-center">
                  <span class="donate-badge">Donations Account Details</span>
                  <small class="text-muted">Bank: Faysal Bank</small>
                </div>
                <div class="card-body">
                  <div class="info-row"><strong>Account Title:</strong> Sindh Institute of Advance Endoscopy & Gastroenterology (Donation)</div>
                  <div class="info-row"><strong>Account Number:</strong> 3407787000003738</div>
                  <div class="info-row"><strong>IBAN Code:</strong> PK39FAYS3407787000003738</div>
                  <div class="info-row"><strong>Branch:</strong> Gulistan e Johar</div>
                  <div class="divider"></div>
                  <div class="info-row"><strong>Account Title:</strong> Nigahban Welfare Association Donation</div>
                  <div class="info-row"><strong>Account Number:</strong> 01742001578006</div>
                  <div class="info-row"><strong>IBAN Code:</strong> PK02FAYS0001742001578006</div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="donate-card">
                <div class="card-head d-flex justify-content-between align-items-center">
                  <span class="donate-badge">Zakat Account Details</span>
                  <small class="text-muted">Bank: Faysal Bank</small>
                </div>
                <div class="card-body">
                  <div class="info-row"><strong>Account Title:</strong> Sindh Institute of Advance Endoscopy & Gastroenterology (Zakat)</div>
                  <div class="info-row"><strong>Account Number:</strong> 3407787000003739</div>
                  <div class="info-row"><strong>IBAN Code:</strong> PK12FAYS3407787000003739</div>
                  <div class="info-row"><strong>Branch:</strong> Gulistan e Johar</div>
                  <div class="divider"></div>
                  <div class="info-row"><strong>Account Title:</strong> Nigahban Welfare Association Zakat</div>
                  <div class="info-row"><strong>Account Number:</strong> 01742001561006</div>
                  <div class="info-row"><strong>IBAN Code:</strong> PK02FAYS0001742001561006</div>
                </div>
              </div>
            </div>
          </div>

          <div class="donate-alert">
            <strong>Note:</strong> Always confirm account details before transferring funds and keep the payment slip for your records.
          </div>

          <div class="donate-cta text-center">
            <a href="{{ route('contact') }}" class="btn cs_btn cs_style_1 cs_color_1">Need Help? Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection