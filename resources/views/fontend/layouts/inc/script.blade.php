

</script><script src="{{ asset('fontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('fontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('fontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('fontend/assets/js/main.js') }}"></script>
<script src="{{ asset('fontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('fontend/assets/js/toastr.js') }}"></script>
<script src="{{ asset('fontend/assets/js/animated-text.js') }}"></script>
<script>
  @if(Session::has('message'))
    var type ="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info(" {{Session::get('message')}} ");
            break;

        case 'success':
            toastr.success(" {{Session::get('message')}} ");
            break;

        case 'warning':
            toastr.warning(" {{Session::get('message')}} ");
            break;

        case 'error':
            toastr.error(" {{Session::get('message')}} ");
            break;
    }
@endif
</script>
