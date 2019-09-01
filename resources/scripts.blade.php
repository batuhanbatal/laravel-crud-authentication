    <!-- =========================================================-->
    <!-- All Scripts -->
    <!-- ========================================================= -->
    <!-- jquery -->
    <script src="{{asset('backend/assets/vendor/jquery/js/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('backend/assets/vendor/popper/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- feather icons -->
    <script src="{{asset('backend/assets/vendor/feather/js/feather.min.js')}}"></script>
    <!-- perfect scrollbar -->
    <script src="{{asset('backend/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.min.js')}}"></script>
    <!-- chat popup -->
    <script src="{{asset('backend/assets/js/chat.popup.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('backend/assets/js/main.js')}}"></script>
    <!-- toast -->
    <script src="{{asset('backend/assets/vendor/jquery.toast/js/jquery.toast.min.js')}}"></script>
    <!-- toast -->
    <script src="{{asset('backend/assets/js/toast.js')}}"></script>
    <!-- =========================================================-->

    @if($alert_toast = Session::get('alert_toast'))

    <script>
        $.toast({
            heading: "{{$alert_toast['title']}}",
            text: "{{$alert_toast['text']}}",
            showHideTransition: 'fade',
            icon: "{{$alert_toast['type']}}",
            loaderBg: 'rgba(255,255,255,.8)',
            position: 'top-center'
        });
    </script>

    @endif

    @stack('scripts')
  