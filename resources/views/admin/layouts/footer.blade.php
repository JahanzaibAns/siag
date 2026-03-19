

<!-- // END drawer-layout -->
</div>

<div class="quote-container">
    <blockquote>
        Developed and maintained by <a href="{{ route('index') }}">SIAG</a>
    </blockquote>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
        @if(session('success'))
           Swal.fire({
               icon: 'success',
               title: 'Success!',
               text: '{{ session('success') }}',
               confirmButtonColor: '#2193b0'
           });
       @elseif(session('error'))
           Swal.fire({
               icon: 'error',
               title: 'Error!',
               text: '{{ session('error') }}',
               confirmButtonColor: '#2193b0'
           });
       @endif
</script>
<script src="{{ asset('admin-assets/js/main.js') }}"></script>
@stack('script')
</body>

</html>
