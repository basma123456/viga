<script src="{{asset('site-assets/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('site-assets/assets/js/popper.min.js')}}"></script>
<script src="{{asset('site-assets/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site-assets/assets/js/uikit.min.js')}}"></script>
<script src="{{asset('site-assets/assets/js/uikit-icons.min.js')}}"></script>
<script src="{{asset('site-assets/assets/js/main.js')}}"></script>
<script src="{{asset('site-assets/assets/js/custom.js')}}"></script>
<script src="{{asset('site-assets/assets/js/countCart.js')}}"></script>
<script src="{{asset('site-assets/assets/js/increment.js')}}"></script>
<script src="{{asset('site-assets/assets/js/updateCart.js')}}"></script>
<script src="{{asset('site-assets/assets/js/deleteCart.js')}}"></script>
<script src="{{asset('site-assets/assets/js/clearCart.js')}}"></script>
<script src="{{asset('site-assets/assets/js/insertShippingAdresses.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>




<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('warning') }}");
    @endif
  </script>
