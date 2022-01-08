<!-- Scripts -->
<script src="{{URL::asset("assets/scripts/jquery-3.4.1.min.js")}}"></script>
<script src="{{URL::asset("assets/scripts/chosen.min.js")}}"></script>
<script src="{{URL::asset("assets/scripts/perfect-scrollbar.min.js")}}"></script>
<script src="{{URL::asset("assets/scripts/slick.min.js")}}"></script>
<script src="{{URL::asset("assets/scripts/rangeslider.min.js")}}"></script>
<script src="{{URL::asset("assets/scripts/magnific-popup.min.js")}}"></script>
<script src="{{URL::asset("assets/scripts/jquery-ui.min.js")}}"></script>
<script src="{{URL::asset("assets/scripts/mmenu.js")}}"></script>
<script src="{{URL::asset("assets/scripts/tooltips.min.js")}}"></script>
<script src="{{URL::asset("assets/scripts/color_switcher.js")}}"></script>
<script src="{{URL::asset("assets/scripts/jquery_custom.js")}}"></script>
@toastr_js
@toastr_render
@yield("js")
<script>
    (function($) {
        try {
            var jscr1 = $('.js-scrollbar');
            if (jscr1[0]) {
                const ps1 = new PerfectScrollbar('.js-scrollbar');

            }
        } catch (error) {
            console.log(error);
        }
    })(jQuery);
</script>
<!-- Style Switcher -->
{{--<div id="color_switcher_preview">--}}
{{--  <h2>Choose Your Color <a href="#"><i class="fa fa-gear fa-spin (alias)"></i></a></h2>--}}
{{--	<div>--}}
{{--		<ul class="colors" id="color1">--}}
{{--			<li><a href="#" class="stylesheet"></a></li>--}}
{{--			<li><a href="#" class="stylesheet_1"></a></li>--}}
{{--			<li><a href="#" class="stylesheet_2"></a></li>--}}
{{--			<li><a href="#" class="stylesheet_3"></a></li>--}}
{{--			<li><a href="#" class="stylesheet_4"></a></li>--}}
{{--			<li><a href="#" class="stylesheet_5"></a></li>--}}
{{--		</ul>--}}
{{--	</div>--}}
{{--</div>--}}
</body>
</html>
