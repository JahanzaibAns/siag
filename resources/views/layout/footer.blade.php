   <!-- Start Footer -->
   <footer class="cs_footer cs_blue_bg cs_bg_filed cs_white_color" data-src="assets/img/banners/footer-bg.jpeg">
      <div class="container">
        <div class="cs_footer_row">
          <div class="cs_footer_col">
            <div class="cs_footer_highlight_col">
              <div class="cs_footer_logo">
                <img src="assets/img/logo.webp" alt="Logo">
              </div>
              <ul class="cs_footer_contact cs_mp_0">
                <li>
                  <i class="fa-regular fa-clock"></i>
                  Open Hours: <br>
                  Mon - Sat: 08:AM – 16:00 PM
                </li>
                <li>
                  <i class="fa-solid fa-location-dot"></i>
                  Heritage Building 1st floor, Dr Ruth K.M Pfau Civil Hospital Baba e Urdu Road, Karachi
                </li>
                <li>
                  <i class="fa-solid fa-phone"></i>
                  021-32750524-6
                </li>
              </ul>
              <div class="cs_social_btns cs_style_1">
              <a href="https://www.facebook.com/siagpk" class="cs_center" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <!-- <a href="javascript:void(0);" class="cs_center"><i class="fa-brands fa-pinterest-p"></i></a> -->
                <a href="https://x.com/SIAGPK" class="cs_center" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/siagpk/" class="cs_center" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/@SIAGPakistan" class="cs_center" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.linkedin.com/company/sindh-institute-of-advanced-endoscopy-and-gastroenterology/" class="cs_center" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="cs_footer_col">
            <div class="cs_footer_widget">
              <h2 class="cs_footer_widget_title">Quick Links</h2>
              <ul class="cs_footer_widget_nav_list cs_mp_0">
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                <li><a href="{{ route('careers') }}">Careers</a></li>
                <li><a href="{{ route('donate') }}">Donations</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="cs_footer_col">
            <div class="cs_footer_widget">
              <h2 class="cs_footer_widget_title">Services</h2>
              <ul class="cs_footer_widget_nav_list cs_mp_0">
                <li><a href="{{ route('ogd.endoscopy') }}">OGD Endoscopy</a></li>
                <li><a href="{{ route('colonoscopy') }}">Colonoscopy</a></li>
                <li><a href="{{ route('ercp') }}">ERCP</a></li>
                <li><a href="{{ route('eswl') }}">ESWL</a></li>
                <li><a href="{{ route('spyglass') }}">Spyglass</a></li>
                <li><a href="{{ route('eus') }}">EUS</a></li>
                <li><a href="{{ route('eus.rfa') }}">EUS RFA</a></li>
                <li><a href="{{ route('esophageal.manometry') }}">Esophageal Manometry</a></li>
                <li><a href="{{ route('fibroscan') }}">Fibroscan</a></li>
              </ul>
            </div>
          </div>
          <div class="cs_footer_col">
            <div class="cs_footer_widget">
              <h2 class="cs_footer_widget_title">Our Doctors</h2>
              <ul class="cs_footer_widget_nav_list cs_mp_0">
                <li><a href="{{ route('dr-saad-khalid-niaz') }}">Prof Saad Khalid Niaz</a></li>
                <li><a href="{{ route('dr-sajida-qureshi') }}">Prof Sajida Qureshi</a></li>
                <li><a href="{{ route('dr-shanil-kadir') }}">Dr. Shanil Kadir</a></li>
                <li><a href="{{ route('dr-aftab-leghari') }}">Dr Aftab Leghari</a></li>
                <li><a href="{{ route('dr-babar-matin') }}">Dr Babar Matin</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_footer_bottom cs_primary_bg">
        <div class="container">
          <div class="cs_footer_bottom_in">
            <p class="cs_footer_copyright mb-0">Copyright © 2026 SIAG, All Rights Reserved.</p>
            <ul class="cs_footer_menu cs_mp_0">              
              <li><a href="{{ route('index') }}">Home</a></li>                
              <li><a href="{{ route('events') }}">Events</a></li>
              <li><a href="{{ route('services') }}">Services</a></li>
              <li><a href="{{ route('tenders') }}">Tenders</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- Start Scroll Up Button -->
    <span class="cs_scrollup">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
      </svg>
    </span>
    <!-- End Scroll Up Button -->

    <!-- Script -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.slick.min.js')}}"></script>
    <script src="{{ asset('assets/js/odometer.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#2193b0'
            });
        @endif
        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '{{ session('error') }}',
                confirmButtonColor: '#2193b0'
            });
        @endif
        @if($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Validation Error!',
                html: '<ul style="text-align: left; padding-left: 20px;">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
                confirmButtonColor: '#2193b0'
            });
        @endif
    </script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
  </body>
</html>
