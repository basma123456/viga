<!DOCTYPE html>
<html lang="en">

@include('site.layouts.head')

<body class="fs-5 text-white">

    <!-----  Start Nav Bar   ----->

    @include('site.layouts.nav')
    <!-----  End Nav Bar   ----->


    <br/>




    <!-- content -->

    @yield('content')

    <!-- End content -->



    <!----- Start footer ----->

    @include('site.layouts.footer')

    <!----- End footer ----->

    @include('site.layouts.scripts')




</body>

</html>
