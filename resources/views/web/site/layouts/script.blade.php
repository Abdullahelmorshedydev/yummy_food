<!-- ALL JS FILES -->
<script src="{{ asset('assets/web/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/web/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/web/js/bootstrap.min.js') }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset('assets/web/js/jquery.superslides.min.js') }}"></script>
<script src="{{ asset('assets/web/js/images-loded.min.js') }}"></script>
<script src="{{ asset('assets/web/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/web/js/baguetteBox.min.js') }}"></script>
<script src="{{ asset('assets/web/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/web/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/web/js/custom.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (session('success'))
    <script>
        toastr.success("{{ session('success') }}")
    </script>
@endif

@stack('script')
