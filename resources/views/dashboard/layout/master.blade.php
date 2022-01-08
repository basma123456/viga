@include("dashboard.layout.style")
<!-- Wrapper -->
<div id="main_wrapper">
@include("dashboard.layout.header")
  <!-- Dashboard -->
  <div id="dashboard">

    @include("dashboard.layout.sidebar")
      @yield("content")
  </div>
</div>

@include("dashboard.layout.footer_script")
